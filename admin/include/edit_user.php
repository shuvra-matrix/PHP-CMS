<?php
if (isset($_GET['source'])) 
{
    if (isset($_GET['user_id'])) 
    {
        $id = $_GET['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$id'";
        $select_all_from_query = mysqli_query($connect, $query);
        $row = mysqli_fetch_assoc($select_all_from_query);
        $user_id = $row['user_id'];
        $user_name = $row['user_name'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
     // $user_image = $row['user_image'];
        $user_role = $row['user_role'];
        $user_password = $row['user_password'];
    }
}
if (isset($_POST['update_user'])) {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];

    $query = "UPDATE users SET user_name = '$username', user_password = '$password', user_firstname = '$firstname',user_lastname='$lastname',user_email='$email',user_role = '$role' WHERE user_id = '$user_id' ";
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
        <select name="role" id="category">
            <option value="<?php echo $user_role  ?>"><?php  echo $user_role ; ?></option>
            <option value="Admin">Admin</option>
            <option value="Subscriber">Subscriber</option>
        </select>
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
        <label for="post_image">Password</label>
        <input id="post_author" type="text" class="form-control" name="password" value="<?php echo $user_password;?>">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" name="update_user" value="Update User">
    </div>

</form>