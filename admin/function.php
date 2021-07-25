<?php

    function delete_cat()
    {   global $connect;
        if(isset($_POST['delete']))
        {
            $id = $_POST['delete'];
            $query= "DELETE FROM categories WHERE cat_id = '$id'";
            $result = mysqli_query($connect,$query);
        }
    }

    function insert_cat()
    {
        global $connect;
        if(isset($_POST['submit'])) {
            $item = $_POST['cat'];
            if ($item == "" || empty($item)) {
                echo "<script>alert('Category Must Not Be Empty')</script>";
            } else {
                $query = "INSERT INTO categories(cat_title) value ('$item')";
                $result = mysqli_query($connect, $query);
            }
        }

    }

    function update_cat()
    {
        global $connect;
        $items = $_GET['up_cat'];
        $up_id = $_GET['updata'];
        if ($items == "" || empty($items)) {
            echo "<script>alert('Category Must Not Be Empty')</script>";
        }
        else
        {
            $query = "UPDATE categories SET cat_title='$items'WHERE cat_id = '$up_id'";
            echo "<script>alert('update done');window.location.href='categories.php';</script>";
            $result = mysqli_query($connect, $query);
        }
    }

    function chcek_result($result)
    {
        global $connect;
        if(!$result)
        {
            die("QUERY FAILD." .mysqli_error($connect));
        }
        else
        {
            echo "<script>alert('New Post Add')</script>";
        }

    }




?>

