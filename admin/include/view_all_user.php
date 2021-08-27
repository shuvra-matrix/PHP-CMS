<div class="container" style="overflow: auto;width:100% ">
    <table class="table table-bordered table-hover table-responsive">
        <thead class="">
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>User Image</th>
                <th>User Role</th>
                <th></th>
                <th></th>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = 'SELECT * FROM users';
            $select_all_from_query = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($select_all_from_query)) {
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_firstname = $row['user_firstname'];
                $user_lastname = $row['user_lastname'];
                $user_email = $row['user_email'];
                $user_image = $row['user_image'];
                $user_role = $row['user_role'];
            ?>
                <tr>
                    <td><?php echo $user_id ?></td>
                    <td><?php echo $user_name ?></td>
                    <td><?php echo $user_firstname ?></td>
                    <td><?php echo $user_lastname ?></td>
                    <td><?php echo $user_email ?></td>
                    <td><img style="width:100px" src="../images/<?php echo $user_image ?>" </td>
                    <td><?php echo $user_role ?></td>
                    <td><a href='comment.php?approved=<?php echo $comment_id ?>'>Approve</a></td>
                    <td><a href='comment.php?unapproved=<?php echo $comment_id ?>'>Unapproved</a></td>
                    <td><a href='users.php?delete=<?php echo $user_id ?>'>Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM users WHERE user_id = '$id'";
    $result = mysqli_query($connect, $query);
    header('Location: users.php ');
} ?>