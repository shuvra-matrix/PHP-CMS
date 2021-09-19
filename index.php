<?php
include "include/header.php";

?>
<?php include 'include/navigation.php' ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Welcome To Mon Blog
            </h1>
            <?php
            $lower = 0;
            $page_no = "";
            $post_query = 'SELECT * FROM posts WHERE post_status="Publish"';
            $result = mysqli_query($connect, $post_query);
            $post_count = mysqli_num_rows($result);
            $post_count = ceil($post_count / 5);
            if (isset($_GET['page'])) {
                $page_no = $_GET['page'];
                $page_no = mysqli_real_escape_string($connect, $page_no);
                $lower = ($page_no * 5) - 5;
            }
            $query = "SELECT * FROM posts WHERE post_status='Publish' LIMIT $lower , 5";
            $select_all_from_query = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($select_all_from_query)) {
                $post_id = $row['post_id'];
                $post_catagory_id = $row['post_category_id'];
                $post_author = $row['post_author'];
                $post_comment_counts = $row['post_comment_counts'];
                $post_content = substr($row['post_content'], 0, 250);
                $post_image = $row['post_image'];
                $post_status = $row['post_status'];
                $post_tag = $row['post_tags'];
                $post_title = $row['post_title'];
                $post_date = $row['post_date'];
                $post_auth = $row['post_author_id'];
            ?>




                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?post_id=<?php echo $post_id ?>"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="./author.php?author=<?php echo $post_auth;  ?>"><?php echo $post_author ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="post.php?post_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>






            <?php   }

            ?>




        </div>


        <?php include "include/sidebar.php" ?>

    </div>
    <!-- /.row -->

    <hr>

    <ul class="pager">
        <?php for ($i = 1; $i <= $post_count; $i++) {

            if ($i == $page_no) { ?>


                <li><a class="active_link" href="./index.php?page=<?php echo $i; ?>"><?php echo $i; ?> </a></li>

            <?php } else { ?>
                <li><a href="./index.php?page=<?php echo $i; ?>"><?php echo $i; ?> </a></li>
        <?php }
        } ?>
    </ul>
    <!-- Footer -->
    <?php include "include/footer.php"; ?>