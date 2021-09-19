<?php

$role = $_SESSION['user_role'];
if($role == "Admin")
{
    null;
}
else
{
    header("Location:../index.php");
}



?>