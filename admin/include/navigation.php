<?php
$user_role = $_SESSION['user_role'];

?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><?php echo $user_role;  ?></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li>
            <a href="../index.php">Blog Site</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'];      ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="./profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../include/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>

    </ul>



    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->




    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav" style="height: 150%">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="posts" class="collapse">
                    <li>
                        <a href="posts.php">View All Post</a>
                    </li>
                    <li>
                        <a href="posts.php?source=add_post">Add Post</a>
                    </li>
                </ul>
            </li>
            <?php
            if ($user_role === "Admin") {

            ?>
                <li>
                    <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                </li>

                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="users.php">View All User</a>
                        </li>
                        <li>
                            <a href="users.php?source=add_user">Add User</a>
                        </li>
                    </ul>
                </li>
            <?php } ?>

            <?php
            if ($user_role === "Bloger") {

            ?>

                <li class="active">
                    <a href="comment.php"><i class="fa fa-fw fa-file"></i> Comments</a>
                </li>
            <?php } ?>
            <li>

                <a href="./profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
            </li>
        </ul>
    </div>





    <!-- /.navbar-collapse -->
</nav>