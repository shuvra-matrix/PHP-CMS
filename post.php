<?php
include "include/header.php";
?>
<?php include 'include/navigation.php' ?>
    <!-- Navigation -->
<?php
 if(isset($_GET['post_id']))
 {
     $post_id = $_GET['post_id'];
     $post_id = mysqli_real_escape_string($connect,$post_id);
     $query = "SELECT * FROM posts WHERE post_id ='$post_id'";
     $result = mysqli_query($connect,$query);
     $row = mysqli_fetch_assoc($result);
 }
 else
 {
     header('Location:index.php');
 }
?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $row['post_title'] ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $row['post_author'] ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $row['post_date'] ?> at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/<?php echo $row['post_image'] ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $row['post_content'] ?></p>

                <hr>

                <?php
                        if (isset($_POST['comment']))
                        {
                                $post_id = $_POST['post_id'];
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $comment = $_POST['content'];
                                if(!empty($name) && !empty($email) && !empty($comment))
                                {
                                    $comment = mysqli_real_escape_string($connect,$comment);
                                    $query = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_date) ";
                                    $query .= "VALUES ('$post_id','$name','$email','$comment',now()) ";
                                    $result = mysqli_query($connect,$query);
                                }
                                else
                                {
                                    echo "<script> alert('Comment field can not be empty '); </script>";
                                }
                        }

                    ?>
                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="POST">
                        <div class="form-group">
                            <input class="form-control"  type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control"  type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea  name="content" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $row['post_id'] ?>" name="post_id">
                        </div>
                        <button type="submit" class="btn btn-primary" name="comment">Submit</button>
                    </form>
                </div>

                <hr>
                <h5>Total Comment : <?php echo $row['post_comment_counts'] ?></h5>
                <!-- Posted Comments -->
                <?php
                $query = "SELECT * FROM comments WHERE comment_status = 'approved' AND comment_post_id = '$post_id'";
                $result = mysqli_query($connect,$query);
                while ($rows= mysqli_fetch_assoc($result))
                {
                ?>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo  $rows['comment_author']  ?>
                            <small><?php echo  $rows['comment_date']  ?></small>
                        </h4>
                        <?php echo  $rows['comment_content']  ?>
                    </div>
                </div>
                <?php  }?>
                <!-- Comment -->

            </div>

            <!-- Blog Sidebar Widgets Column -->
       <?php include "include/sidebar.php" ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include "include/footer.php" ?>

