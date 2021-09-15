 <?php  include "./include/header.php"; 
 
 if(isset($_POST['submit']))
 {
     $user_name = $_POST['username'];
     $user_name = mysqli_real_escape_string($connect,$user_name);
     $email = $_POST['email'];
     $email = mysqli_real_escape_string($connect,$email);
     $password = $_POST['password'];
     $password = mysqli_real_escape_string($connect,$password);
     $confirm_password = $_POST['confirm_password'];
     $confirm_password = mysqli_real_escape_string($connect,$confirm_password);
     if($password === $confirm_password)
     {
        $query="SELECT randSalt FROM users";
        $result = mysqli_query($connect,$query);

        
     }
     else
     {
         echo "<script> alert('Password does not match'); </script>";
     }
 }
 
 
 
 ?>


    <!-- Navigation -->
    
    <?php  include "./include/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Confirm Password</label>
                            <input type="text" name="confirm_password" id="key" class="form-control" placeholder="Confirm Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-success btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "./include/footer.php";?>
