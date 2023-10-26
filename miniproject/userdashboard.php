<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="userdashboard.php">UserDashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        include "connection.php";
                        session_start();
                        $sessid = $_SESSION['user'];
                        $sel = "select count(*) from cart where userid='$sessid' and status='false'";
                        $q = mysqli_query($conn, $sel);
                        $fetch = mysqli_fetch_array($q, MYSQLI_BOTH);
                        ?>
                        <a class="nav-link" href="showcart.php">Cart (<?php echo $fetch['0'] ?>)</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" href="order.php">order</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" href="gallary.php">Gallary</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" href="userprofile.php">User Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" href="logout.php">Logout</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button name="btn" class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <?php
            
            include "connection.php";
          
            if (!isset($_SESSION['user'])) {
                echo "<script>alert('Please login');window.location.href='ragisterlogin.php'</script>";
            }
            $sel = "select * from ragister where email='$sessid'";

            $fetched = mysqli_fetch_array(mysqli_query($conn, $sel), MYSQLI_BOTH);
            ?>
            <h1><?php echo $fetched['1'] ?></h1>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>