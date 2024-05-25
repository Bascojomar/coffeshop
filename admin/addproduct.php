<?php
include "../backend/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center center-container mt-5">
        <div class="p-4 border rounded w-50 h-50 mt-5">
        <label class="">ADD MOTORCYCLE PARTS</label>
        <form action="" method="post">

            <input type="date" class="form-control my-3" placeholder="Date" name="date">
            <input type="text" class="form-control my-3" placeholder="Name Product" name="product">
            <input type="number" class="form-control my-3" placeholder="Number Product" name="number">
            <input type="text" class="form-control my-3" placeholder="Quantity" name="quantity">
            <input type="text" class="form-control my-3" placeholder="Price" name="price">
            <input type="number" class="form-control my-3" placeholder="Stack" name="stack">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="Save">
            </form>
        </div>
    </div>

    </div>
</div>
</body>
</html>