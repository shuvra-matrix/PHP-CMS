<table class="table table-bordered table-hover table-responsive">
    <thead>
    <tr>
        <th>Id</th>
        <th>Cat Id</th>
        <th>Author</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
        <th>Status</th>
        <th>Tags</th>
        <th>Date</th>
        <th>Comments</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
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
        $post_date = $row['post_date'] ?>
        <tr>
            <td><?php echo $post_id?></td>
            <td><?php echo $post_catagory_id ?></td>
            <td><?php echo $post_author?></td>
            <td><?php echo $post_title?></td>
            <td><?php echo $post_content?></td>
            <td><img style="width:100" src="../images/<?php echo $post_image?>"</td>
            <td><?php echo $post_status?></td>
            <td><?php echo $post_tag?></td>
            <td><?php echo $post_date?></td>
            <td><?php echo $post_comment_counts?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>