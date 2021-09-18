<?php include "include/header.php";
include "../include/session.php";
include "../include/admin_session.php";?>


    <div id="wrapper">

    <!-- Navigation -->
    <?php include "include/navigation.php"?>

    <?php
        insert_cat();
    ?>
    <?php
        delete_cat();
    ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome To Admin Page
                        <small>Hi admin</small>
                    </h1>
                    <div class="col-xs-6" style="text-align: center">
                        <form  action="#" method="POST" >
                            <div class="form-group">
                                <label for="category" style="font-size: 2rem">Category</label>
                                <input id="category" class="form-control" type="text" name="cat" placeholder="Add Category" REQUIRED>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                    <?php
                                    //show category data

                                    $query = "SELECT * FROM categories";
                                    $result = mysqli_query($connect,$query);
                                    while ($row=mysqli_fetch_assoc($result))
                                    {?>
                                    <tr>
                                        <td><?php echo $row['cat_id']?></td>
                                        <td><?php echo $row['cat_title'] ?></td>
                                        <td>
                                            <form action="categories.php" method="POST">
                                                <button type="submit" name="delete"  value="<?php echo $row['cat_id']?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="catupdate.php" method="POST">
                                                <button type="submit" name="update" value="<?php echo $row['cat_id'] ?>" class="btn btn-success">Update</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>

                        </table>

                    </div>

                 </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



<?php include "include/footer.php" ?>