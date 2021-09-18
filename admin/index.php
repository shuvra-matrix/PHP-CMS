<?php include "include/header.php";
$id = $_SESSION['user_id'];
$role = $_SESSION['user_role'];

$user_query = "SELECT * FROM users WHERE user_id= '$id'";
echo $user_query;
$user_result = mysqli_query($connect,$user_query);
$user_row = mysqli_fetch_assoc($user_result); 


?>


    <div id="wrapper">

        <!-- Navigation -->
        <?php include "include/navigation.php"?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To <?php  echo $role;  ?> Page
                            <small>Hi <?php echo $user_row['user_firstname'].' '.$user_row['user_lastname'];      ?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php

                                        if ($role == "Admin") {
                                            $query = 'SELECT * FROM posts';
                                        } else if ($role == "Bloger") {
                                            $query = "SELECT * FROM posts WHERE post_author_id = '$id'";
                                        }
                                        $result = mysqli_query($connect,$query);
                                        $posts = mysqli_num_rows($result);

                                        ?>
                                <div class='huge'><?php echo $posts;  ?></div>
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="./posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php if($user_role == "Bloger"){   ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <?php

                                        $query = "SELECT * FROM comments INNER JOIN posts ON comments.comment_post_id = posts.post_id WHERE posts.post_author_id = '$id'";
                                        $result = mysqli_query($connect,$query);
                                        $comment = mysqli_num_rows($result);

                                    ?>
                                    <div class="col-xs-9 text-right">
                                    <div class='huge'><?php echo $comment;  ?></div>
                                    <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="./comment.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <?php

                                        $query = "SELECT * FROM users";
                                        $result = mysqli_query($connect,$query);
                                        $user = mysqli_num_rows($result);

                                    ?>
                                    <div class="col-xs-9 text-right">
                                    <div class='huge'><?php echo $user; ?></div>
                                        <div> Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="./users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <?php

                                        $query = "SELECT * FROM categories";
                                        $result = mysqli_query($connect,$query);
                                        $cat = mysqli_num_rows($result);

                                    ?>
                                    <div class="col-xs-9 text-right">
                                        <div class='huge'><?php echo $cat; ?></div>
                                        <div>Categories</div>
                                    </div>
                                </div>
                            </div>
                            <a href="./categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



<?php include "include/footer.php" ?>