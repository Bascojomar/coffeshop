<?php

$position = $_SESSION['position'];


if ($position == 'admin' ){
  header('location: ../admin/dashboard');
}
?>