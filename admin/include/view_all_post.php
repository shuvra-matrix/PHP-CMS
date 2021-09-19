
<div class="container" style="overflow: auto;width:100% " >
<table class="table table-bordered table-hover table-responsive" >
    <thead class="">
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
    $id = $_SESSION['user_id'];
    $role = $_SESSION['user_role'];
    if($role == "Admin" )
    {
        $query = 'SELECT * FROM posts';
    }
    else if($role == "Bloger") 
    {     
        $query = "SELECT * FROM posts WHERE post_author_id = '$id'";
    }
    $select_all_from_query = mysqli_query($connect,$query);
    while ($row = mysqli_fetch_assoc($select_all_from_query)){
        $post_id = $row['post_id'];
        $post_catagory_id = $row['post_category_id'];
        $post_author = $row['post_author'];
        $comment_query = "SELECT * FROM comments WHERE comment_post_id = '$post_id'";
        $results = mysqli_query($connect, $comment_query);
        $post_comment_counts = mysqli_num_rows($results);
        $post_content = $row['post_content'];
        $post_image = $row['post_image'];
        $post_status = $row['post_status'];
        $post_tag = $row['post_tags'];
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $next_query = "SELECT * from categories WHERE cat_id = '$post_catagory_id'";
        $result = mysqli_query($connect,$next_query);
        $rows = mysqli_fetch_assoc($result);
       ?>
        <tr>
            <td><?php echo $post_id?></td>
            <td><?php echo $rows['cat_title'] ?></td>
            <td><?php echo $post_author?></td>
            <td><?php echo $post_title?></td>
            <td><?php echo $post_content?></td>
            <td><img style="width:100px" src="../images/<?php echo $post_image?>"</td>
            <td><?php echo $post_status?></td>
            <td><?php echo $post_tag?></td>
            <td><?php echo $post_date?></td>
            <td><?php echo $post_comment_counts?></td>
            <td><a href='posts.php?source=edit_post&post_id=<?php echo $post_id ?>'>Update</a></td>
            <td><a href='posts.php?delete=<?php echo $post_id ?>'>Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
<?php
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $query = "DELETE FROM posts WHERE post_id = '$id'";
    $result = mysqli_query($connect,$query);
    header('Location: posts.php ');

 } ?>