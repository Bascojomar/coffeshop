<?php 
include 'database.php';
include "session.php";
$update = mysqli_query($conn, "UPDATE tbl_users WHERE username = '$_SESSION[username]'");
session_destroy();
header("location:../../index.php");
 ?>