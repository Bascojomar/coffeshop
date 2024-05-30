<?php
// add product
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];
    $number = $_POST['number'];
    $product = $_POST['product'];
    $price = $_POST['price'];
    $stack = $_POST['stack'];

    if (isset($_FILES["image"]["name"]) && $_FILES["image"]["error"] == 0) {
        // Define the upload directory
        $uploadDir = "file/";

        // Create the directory if it does not exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Define the target file path
        $uploadFile = $uploadDir . basename($_FILES["image"]["name"]);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploadFile)) {
            // Prepare the SQL statement
            $sql = "INSERT INTO parts_inventory (part_Name, part_Number, Quantity, Price, Stack, Date, Image) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt) {
                // Bind parameters to the SQL statement
                mysqli_stmt_bind_param($stmt, "ssissss", $product, $number, $quantity, $price, $stack, $date, $uploadFile);

                // Execute the SQL statement
                $result = mysqli_stmt_execute($stmt);

                if ($result) {
                    echo "<script>alert('Success')</script>";
                } else {
                    echo "<script>alert('Database insert failed')</script>";
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            } else {
                echo "<script>alert('Failed to prepare the SQL statement')</script>";
            }
        } else {
            echo "<script>alert('Failed to upload the file')</script>";
        }
    } else {
        echo "<script>alert('No file uploaded or file upload error')</script>";
    }
}


// edit
if (isset($_POST['save'])) {
    $Quantity = $_POST['Quantity'];
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Stack = $_POST['Stack'];

    $query = "UPDATE parts_inventory SET part_Name ='$Name', Quantity = '$Quantity', Price = '$Price', Stack = '$Stack' WHERE IDparts = '$id'";
    $resultt = mysqli_query($conn, $query);

    if ($resultt){
        echo "<script>alert('success')</script>";
    }else {
        echo "<script>alert('not')</script>";
}
}
// delete
if (isset($_POST['delete_user'])) {
    $user_id_to_delete = $_POST['id'];

    // Display a confirmation dialog using JavaScript
    echo "<script>
            var userConfirmed = confirm('Are you sure you want to delete this user?');
            if (userConfirmed) {
                window.location.href = 'dashboard.php?id=$user_id_to_delete&confirmed=1';
            } else {
                window.location.href = 'dashboard.php';
            }
          </script>";
}

// Check for confirmation parameter and perform the deletion
if (isset($_GET['confirmed']) && $_GET['confirmed'] == 1) {
    $user_id_to_delete = $_GET['id'];

    // Perform the deletion query
    $delete_query = "DELETE FROM parts_inventory WHERE IDparts = $user_id_to_delete";
    $delete_result = $conn->query($delete_query);

    if ($delete_result) {
        echo "<script>alert('Deleted Account');</script>";
        echo "<script>window.location.href = 'dashboard.php'</script>";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}


// search 
if (isset($_POST['submitt'])) {
    // Assuming you have a valid database connection in $conn
    $searchRef = $_POST['searchref'];

    if (empty($searchRef)) {
        echo "<script>alert('Please Enter Reference Number')</script>";
         echo "<script>window.location.href = 'dashboard.php'</script>";
    } else {
        $query = "SELECT * FROM parts_inventory WHERE part_Name = '" . $part_Name . "'";
        $result = $conn->query($query);
        $numrows = $result->num_rows;

        if ($numrows > 0) {
          while ($rows = $result->fetch_assoc()) {
            echo "ksjdkashfkahsasfhkjaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
          }
        }
    }
}

// change account
if (isset($_POST['save_info'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $id = $_POST['id'];

    $query = "UPDATE tbl_users SET username ='$user', email = '$email', position = '$position' WHERE ID = '$id'";
    $resultt = mysqli_query($conn, $query);

    if ($resultt){
        echo "<script>alert('success')</script>";
    }else {
        echo "<script>alert('not')</script>";
}
}


// change password
if (isset($_POST['save_pass'])) {
$currentpass = $_POST['current'];
$newpass = $_POST['newpass'];
$confirmpass = $_POST['confirm'];
    

// Current password is correct
if($currentpass){
    $sql = "SELECT * FROM tbl_users WHERE password='$currentpass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        // Confirm new password
        if ($newpass !== $confirmpass) {
            echo "New passwords do not match.";
        } else {
            // Enforce restrictions
            if (preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $newpass)) {
                // Update database
                $sql = "UPDATE tbl_users SET password='$newpass' WHERE password='$currentpass'";
                if (mysqli_query($conn, $sql)) {
                    echo '<script>
                    alert("success");
                    </script>';
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo '<script>
                alert("Atleast 8 characters Uppercase and Lowercase");
                </script>';
            }
        }
    } else {
        echo '<script>
                alert("Current password is incorrect.");
                </script>';
    }
}
}
?>