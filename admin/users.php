<?php include "include/header.php"; ?>


<div id="wrapper">

    <!-- Navigation -->
    <?php include "include/navigation.php" ?>

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
                    <?php
                    if (isset($_GET['source'])) {
                        $value = $_GET['source'];
                    } else {
                        $value = "";
                    }
                    switch ($value) {
                        case "add_user":
                            include("./include/add_user.php");
                            break;

                        case "edit_user":
                            include("./include/edit_user.php");
                            break;


                        default:
                            include("./include/view_all_user.php");
                    }
                    ?>
                </div>

            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->



    <?php include "include/footer.php" ?>