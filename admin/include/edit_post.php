<?php
    if(isset($_GET['source'])) {
        if (isset($_GET['post_id']))
        {
            $id = $_GET['post_id'];
            $query = "SELECT * FROM posts WHERE post_id = '$id'";
            $select_all_from_query = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($select_all_from_query);
            $post_id = $row['post_id'];
            $post_catagory_id = $row['post_category_id'];
            $post_author = $row['post_author'];
            $post_comment_counts = $row['post_comment_counts'];
            $post_content = $row['post_content'];
            $post_image = $row['post_image'];
            $post_status = $row['post_status'];
            $post_tag = $row['post_tags'];
            $post_title = $row['post_title'];
            $post_date = $row['post_date'];
        }
    }
    if(isset($_POST['update_post']))
    {
        $post_title = $_POST['title'];
        $post_category = $_POST['cat_id'];
        $post_author = $_POST['author'];
        $post_content =$_POST['content'];
        $post_content = mysqli_real_escape_string($connect,$post_content);
        $post_status = $_POST['post_status'];
        $post_tag = $_POST['post_tag'];
        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($post_image_temp,"../images/$post_image");
        if(empty($post_image))
        {
            $query = "SELECT * FROM posts WHERE post_id = '$id'";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_assoc($result);
            $post_image = $row['post_image'];
        }

        $query = "UPDATE posts SET ";
        $query .="post_title = '$post_title', ";
        $query .="post_category_id ='$post_category', ";
        $query .="post_author='$post_author', ";
        $query .= "post_content='$post_content', ";
        $query .= "post_image='$post_image', ";
        $query .= "post_status='$post_status', ";
        $query .= "post_tags='$post_tag' ";
        $query .= "WHERE post_id='$post_id' ";
        $result = mysqli_query($connect,$query);
        chcek_result($result);
    }

?>


<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input id="title" type="text" class="form-control" name="title" value="<?php echo $post_title ?>">
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select name="cat_id" id="category" >
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
        <input id="post_author" type="text" class="form-control" name="author" value="<?php echo $post_author ?>">
    </div>
    <div class="form-group">
        <label for="post_content">Content</label>
        <textarea id="editor_post"  class="form-control" name="content"><?php echo $post_content ?></textarea>
    </div>
    <div class="form-group">
        <label for="post_image">Image</label>
        <input id="post_image"  type="file"  name="image" value="<?php echo $post_image ?>">
    </div>
    <div class="form-group">
        <img width="100" src="../images/<?php echo $post_image ?>">
    </div>
    <div class="form-group">
        <label for="post_status">Tag</label>
        <input id="post_status" type="text" class="form-control" name="post_tag" value="<?php echo $post_tag ?>">
    </div>
    <div class="form-group">
        <label for="post_status">Status</label>
        <select name="post_status" id="category" >
            <option value="<?php echo $post_status ?>"><?php echo $post_status ?></option>
            <option value="Draft">Draft</option>
            <option value="Publish">Publish</option>
        </select>
    </div>
    <div class="form-group">
        <input  type="submit" class="btn btn-primary" name="update_post" value="Submit">
    </div>

</form>
