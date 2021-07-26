
<div class="container" style="overflow: auto;width:100% " >
    <table class="table table-bordered table-hover table-responsive" >
        <thead class="">
        <tr>
            <th>Id</th>
            <th>Post Id</th>
            <th>Author</th>
            <th>Email</th>
            <th>Content</th>
            <th>Status</th>
            <th>In Response To</th>
            <th>Date</th>
            <th>Approve</th>
            <th>Unapproved</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        <?php
        $query = 'SELECT * FROM comments';
        $select_all_from_query = mysqli_query($connect,$query);
        while ($row = mysqli_fetch_assoc($select_all_from_query)){
            $comment_id = $row['comment_id'];
            $comment_post_id = $row['comment_post_id'];
            $comment_author = $row['comment_author'];
            $commrnt_email = $row['comment_email'];
            $comment_content = $row['comment_content'];
            $comment_status = $row['comment_status'];
            $comment_date =$row['comment_date'];
            ?>
            <tr>
                <td><?php echo $comment_id?></td>
                <td><?php echo $comment_post_id?></td>
                <td><?php echo $comment_author?></td>
                <td><?php echo $commrnt_email?></td>
                <td><?php echo $comment_content?></td>
                <td><?php echo $comment_status?></td>

                <?php    $query = "SELECT * FROM posts WHERE post_id = '$comment_post_id'";
                        $result = mysqli_query($connect,$query);
                        $rows = mysqli_fetch_assoc($result)
                ?>


                <td><?php echo $rows['post_title'] ?></td>
                <td><?php echo $comment_date?></td>
                <td><a href='comment.php?approved=<?php echo $comment_id ?>'>Approve</a></td>
                <td><a href='comment.php?unapproved=<?php echo $comment_id ?>'>Unapproved</a></td>
                <td><a href='comment.php?delete=<?php echo $comment_id ?>'>Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php
if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = '$id'";
    $result = mysqli_query($connect,$query);
    header('Location: comment.php ');

} ?>
<?php
if(isset($_GET['approved']))
{
    $id = $_GET['approved'];
    $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = '$id'";
    $result = mysqli_query($connect,$query);
    header('Location: comment.php ');

} ?>
<?php
if(isset($_GET['unapproved']))
{
    $id = $_GET['unapproved'];
    $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = '$id'";
    $result = mysqli_query($connect,$query);
    header('Location: comment.php ');

} ?>

