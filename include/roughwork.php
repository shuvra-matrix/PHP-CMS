<?php  include "db.php"; ?>
<?php

$query = 'SELECT * FROM posts';
$select_all_from_query = mysqli_query($connect,$query);
while ($row = mysqli_fetch_assoc($select_all_from_query)) {
    $post_id = $row['post_id'];
    $post_catagory_id = $row['post_category_id'];
    $post_author = $row['post_author'];
    $post_comment_counts = $row['post_comment_counts'];
    $post_content = $row['post_content'];
    $post_image = $row['post_image'];
    $post_status = $row['post_status'];
    $post_tag = $row['post_tags'];
    $post_title = $row['post_title'];

    echo $post_title;
}
    ?>