<?php  
include "./db.php";
session_start();
if(isset($_POST['login']))
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $user_name = mysqli_real_escape_string($connect,$user_name);
    $password = mysqli_real_escape_string($connect,$password);
    
    $query = "SELECT * FROM users WHERE user_name = '{$user_name}'";
    $result = mysqli_query($connect,$query);
    if(!$result)
    {
        $message = "Something Went Wrong";
    }
    else
    {
        while($row = mysqli_fetch_assoc($result))
        {   
            $db_id = $row['user_id'];
            $db_username = $row['user_name'];
            $db_password = $row['user_password'];
            $db_fname = $row['user_firstname'];
            $db_lastname = $row['user_lastname'];
            $db_role = $row['user_role'];
            $password = crypt($password,$db_password);
        }
            if($user_name === $db_username && $password === $db_password )
            {
                
                if($db_role == 'Admin')
                {   
                    $_SESSION['user_id'] = $db_id;
                    $_SESSION['user_name'] = $db_username;
                    $_SESSION['firstname'] = $db_fname;
                    $_SESSION['lastname'] = $db_lastname;
                    $_SESSION['user_role'] = $db_role;
                    echo "<script>alert('Hellow $db_username');
                    window.location.href='../admin/index.php'; </script>";
                }

                else if ($db_role == 'Bloger') {
                $_SESSION['user_id'] = $db_id;
                $_SESSION['user_name'] = $db_username;
                $_SESSION['firstname'] = $db_fname;
                $_SESSION['lastname'] = $db_lastname;
                $_SESSION['user_role'] = $db_role;
                echo "<script>alert('Hellow $db_username');
                    window.location.href='../admin/index.php'; </script>";
                }



                else if($db_role == 'Subscriber')
                {
                    echo "<script>alert('Hellow Subscriber $db_username');
                    window.location.href='../index.php'; </script>";
                }
                else
                {
                    header("Location: ../index.php");
                }
            }
            else
            {
                echo "<script>alert('Invalid User Name and Password');
                window.location.href='../index.php'; </script>";
            }       
    
        }
    }





?>