<?php

session_start();
$_SESSION['user_name'] == null;
session_destroy();
header("Location:./../index.php");


?>