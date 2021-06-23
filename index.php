<?php  include "include/db.php"; ?>
<?php
include "include/header.php";
?>
<body>

    <?php include 'include/navigation.php' ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php

                $query = 'SELECT * FROM posts';
                $select_all_from_query = mysqli_query($connect,$query);
                while ($row = mysqli_fetch_assoc($select_all_from_query)){
                $post_id = $row['post_id'];
                $post_catagory_id = $row['post_category_id'];
                $post_author = $row['post_author'];
                $post_comment_counts = $row['post_comment_counts'];
                $post_content = $row['post_content'];
                $post_image = $row['post_image'];
                $post_status = $row['post_status'];
                $post_tag = $row['post_tags'];
                $post_title = $row['post_title'];
                $post_date = $row['post_date']
                    ?>


                    <h1 class="page-header">
                        Page Heading
                        <small>Secondary Text</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="#"><?php echo $post_title?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                    <hr>
                    <p><?php echo $post_content?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>






             <?php   }

                ?>




            </div>


          <?php include "include/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
       <?php include "include/footer.php"?>