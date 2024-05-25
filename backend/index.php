<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

		
			$sql = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'";
			$result = $conn->query($sql);
		
			if ($result->num_rows == 1) {
				$row = $result->fetch_assoc();
				$_SESSION['ID'] = $row['ID'];
				$_SESSION['position'] = trim($row['position']);  // Trim any leading or trailing spaces

			
				if ($_SESSION['position'] === 'admin') {
                    header("location:admin/dashboard.php");
				}
				elseif ($_SESSION['position'] === 'user') {
                    header("location:user/dashboard.php");
				}
            }else {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
					echo '<script>
					       alert ("invalid");
      					</script>';
            }
}
?>