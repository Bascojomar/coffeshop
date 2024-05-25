<?php
$position = $_SESSION['position'];
if ($position == 'user' ){
  header('location: ../user/dashboard.php');
}
?>