
<?php
    if(isset($_POST['adds_post']))
    {
        $post_title = $_POST['title'];
        $post_category = $_POST['post_category'];
        $post_author = $_POST['author'];
        $post_content =$_POST['content'];
        $post_content = mysqli_real_escape_string($connect,$post_content);
        $post_status = $_POST['post_status'];
        $post_tag = $_POST['post_tag'];
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        $post_date = date('d-m-y');
        $post_comment = 4;
        move_uploaded_file($post_image_temp,"../images/$post_image");

        $query = "INSERT INTO posts(post_category_id,post_author,post_comment_counts,post_content,post_image,post_status,post_tags,post_title,post_date) VALUE ('$post_category','$post_author','$post_comment','$post_content','$post_image','$post_status','$post_tag','$post_title',now())";
        $result = mysqli_query($connect,$query);
        chcek_result($result);
    }

?>

<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input id="title" type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select name="post_category" id="category" >
            <?php
            $querys = "SELECT * FROM categories";
            $result = mysqli_query($connect,$querys);
            while ($rows=mysqli_fetch_assoc($result)){
                $title = $rows['cat_title'];?>

                <option value="<?php echo $rows['cat_id']?>"><?php echo $title; ?></option>
            <?php }

            ?>

        </select>
    </div>
    <div class="form-group">
        <label for="post_author">Author</label>
        <input id="post_author" type="text" class="form-control" name="author">
    </div>
    <div class="form-group">
        <label for="post_content">Content</label>
        <textarea id="post_content"  class="form-control" name="content"></textarea>
    </div>
    <div class="form-group">
        <label for="post_image">Image</label>
        <input id="post_image"  type="file"  name="image">
    </div>
    <div class="form-group">
        <label for="post_status">Status</label>
        <input id="post_status" type="text" class="form-control" name="post_status">
    </div>
    <div class="form-group">
        <label for="post_status">Tag</label>
        <input id="post_status" type="text" class="form-control" name="post_tag">
    </div>
    <div class="form-group">
        <input  type="submit" class="btn btn-primary" name="adds_post" value="Submit">
    </div>

</form>
