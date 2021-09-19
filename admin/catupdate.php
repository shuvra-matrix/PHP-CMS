<?php include "include/header.php";
include "../include/session.php"; ?>


    <div id="wrapper">

    <!-- Navigation -->
<?php include "include/navigation.php"?>

    <div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Category Update</small>
                </h1>
                <div class="col-xs-6" style="text-align: center">

                        <?php if (isset($_GET['updata']))
                        {
                            update_cat();
                        }

                    ?>
                    <form  action="catupdate.php" method="GET" >
                        <div class="form-group">
                            <label for="category" style="font-size: 2rem">Update Category</label>
                            <input id="category" class="form-control" type="text" name="up_cat" placeholder="Add Category" REQUIRED>
                        </div>
                        <div class="form-group">
                            <?php if(isset($_POST['update'])){
                                $id = $_POST['update'];
                            }?>
                            <button type="submit" name="updata" value="<?php echo $id ;?>" class="btn btn-primary" >Submit</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



<?php include "include/footer.php" ?>