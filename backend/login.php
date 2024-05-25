
<?php
include "database.php";
session_start();

if (isset($_POST['admin-login'])) {
    $username = $_POST['username'];
			$password = $_POST['password'];
		
			$sql = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password'";
			$result = $conn->query($sql);
		
			if ($result->num_rows == 1) {
				$row = $result->fetch_assoc();
				$_SESSION['ID'] = $row['ID'];
				$_SESSION['position'] = trim($row['position']);  // Trim any leading or trailing spaces

			
				if ($_SESSION['position'] === 'admin') {
					echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>';
					echo "<script>Swal.fire({
						title: 'Login Successful!',
						text: 'Redirecting to admin dashboard...',
						icon: 'success',
						timer: 3000,
						timerProgressBar: true,
						showConfirmButton: false
					}).then(function() { window.location = 'records/dashboard'; });</script>";
				}
				elseif ($_SESSION['position'] === 'user') {
					echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
					echo '<script>
					        swal({
					          title: "Login Successful",
					          text: "Redirecting to Admin dashboard...",
					          icon: "success"
					        }).then(function() {
					          window.location.href = "admin/admin";
					        });
      					</script>';
				}
            }
}

?>