<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Blog Search Well -->

    <div class="well">
        <h4>Blog Search</h4>
        <form method="POST" action="./search.php">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" name="submit" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
            <!-- /.input-group -->
        </form>
    </div>

    <!--Login-->
    
    <?php
    if (!isset($_SESSION['user_name'])) 
    { ?>

        <div class="well">
            <h4>Log In</h4>
            <form method="POST" action="./include/login.php">
                <div class="form-group">
                    <input name="user_name" type="text" class="form-control" placeholder="User Name">
                </div>
                <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary" name="login">Log In</button>
                    </span>
                </div>
                <!-- /.input-group -->
            </form>
        </div>

    <?php } ?>


    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                <?php
                $query = "SELECT * FROM categories";
                $select_all_catagory = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($select_all_catagory)) {
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];
                ?>
                    <!-- Blog Categories Well -->
                    <ul class="list-unstyled">
                        <li><a href="category.php?cat_id=<?php echo $cat_id ?>"><?php echo $cat_title ?></a>
                        </li>
                    </ul>

                <?php
                } ?>
            </div>

        </div>
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>