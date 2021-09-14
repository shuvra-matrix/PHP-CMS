<?php
if (isset($_POST['add_user'])) {
    $firstname = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $role = $_POST["role"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST['email'];

    $query = "INSERT INTO users(user_name,user_password,user_firstname,user_lastname,user_email,user_role) VALUE ('$username','$password','$firstname','$lastname','$email','$role')";
    $result = mysqli_query($connect, $query);
}

?>

<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">First Name</label>
        <input id="title" type="text" class="form-control" name="first_name">
    </div>
    <div class="form-group">
        <label for="title">Last Name</label>
        <input id="title" type="text" class="form-control" name="last_name">
    </div>
    <div class="form-group">
        <label for="category">User Role</label>
        <select name="role" id="category">
            <option value="">Select Options</option>
            <option value="Admin">Admin</option>
            <option value="Subscriber">Subscriber</option>
        </select>
    </div>
    <div class="form-group">
        <label for="post_author">Username</label>
        <input id="post_author" type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="post_content">Email</label>
        <input type="email" id="post_content" class="form-control" name="email">
    </div>
    <div class="form-group">
        <label for="post_image">Password</label>
        <input id="post_author" type="text" class="form-control" name="password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="add_user" value="Add User">
    </div>

</form>