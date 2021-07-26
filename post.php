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
                                $comment = mysqli_real_escape_string($connect,$comment);
                                $query = "INSERT INTO comments (comment_post_id,comment_author,comment_email,comment_content,comment_date) ";
                                $query .= "VALUES ('$post_id','$name','$email','$comment',now()) ";
                                $result = mysqli_query($connect,$query);
                                $query = "UPDATE posts SET post_comment_counts = post_comment_counts + 1 WHERE post_id = $post_id";
                                $result = mysqli_query($connect,$query);
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
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>









            <!-- Blog Sidebar Widgets Column -->
       <?php include "include/sidebar.php" ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include "include/footer.php" ?>
