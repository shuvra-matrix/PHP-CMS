<?php
include "./include/header.php";
include "../include/session.php";

    if (isset($_SESSION['user_name'])) 
    {
        $user_names = $_SESSION['user_name'];
        $query = "SELECT * FROM users WHERE user_name = '$user_names'";
        $select_all_from_query = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($select_all_from_query);
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
     // $user_image = $row['user_image'];
        $user_role = $row['user_role'];
    }

if (isset($_POST['update_user'])) {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $username = $_POST["username"];
    $salt = "$2y$10$2usesomecrazystrings22";
    $password = crypt($password,$salt);
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];

    $query = "UPDATE users SET user_name = '$username', user_firstname = '$firstname',user_lastname='$lastname',user_email='$email' WHERE user_id = '$user_id' ";
    $result = mysqli_query($connect, $query);
    if(!$result)
    {   
        $message = "Something Went Wrong";
        die($message);
    }
    else
    {
        echo "<script>alert('User Updated');
        window.location.href='./users.php';</script>";
    }
}

?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "include/navigation.php" ?>

    <?php
    insert_cat();
    ?>
    <?php
    delete_cat();
    ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome To Admin Page
                        <small>Hi admin</small>
                    </h1>
                    
                    <form action="" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="title">First Name</label>
                        <input id="title" type="text" class="form-control" name="first_name" value="<?php  echo $user_firstname;  ?>">
                        <input type="hidden" name="user_id" value="<?php  echo $user_id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="title">Last Name</label>
                        <input id="title" type="text" class="form-control" name="last_name" value="<?php   echo $user_lastname;  ?>">
                    </div>
                    <div class="form-group">
                        <label for="category">User Role</label>
                        <span> <?php  echo $user_role ; ?> </span>
                    </div>
                    <div class="form-group">
                        <label for="post_author">Username</label>
                        <input id="post_author" type="text" class="form-control" name="username" value="<?php  echo $user_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="post_content">Email</label>
                        <input id="post_content" class="form-control" name="email" type="email" value="<?php  echo $user_email; ?>" >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="update_user" value="Update User">
                    </div>

                </form>


                </div>

            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



    <?php include "include/footer.php" ?>