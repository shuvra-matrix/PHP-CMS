<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">Mon Blog</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                        $query = 'SELECT * FROM categories';
                        $select_all_categores_query = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_assoc($select_all_categores_query)) {
                            $cat_title = $row['cat_title'];
                            $cat_id = $row['cat_id'];
                            echo "<li><a href='category.php?cat_id=$cat_id'>{$cat_title}</a></li>";
                        } ?>
                    </ul>
                </li>

                <?php
                if (isset($_SESSION['user_name'])) {
                ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User Panel <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="./admin/index.php">Control Panel</a>
                            </li>
                            <li>
                                <a href="./include/logout.php">Log out</a>
                            </li>

                        </ul>
                    </li>
                <?php }else{ ?>
                <li>
                    <a href="./registration.php">Sign up</a>
                </li>
                <?php } ?>
                <!-- <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li> -->

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>