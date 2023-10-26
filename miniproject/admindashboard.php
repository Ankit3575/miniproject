<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

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
                <a class="navbar-brand" href="#">AdminDashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="addproduct.php">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="showproduct.php">Show Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true" href="addgallary.php">Add Gallary</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true" href="showgallary.php">Show Gallary</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true" href="">All Order</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true" href="alluser.php">All User</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true" href="changepassword.php">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-disabled="true" href="adminlogout.php">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <?php
                session_start();
                include "connection.php";
                $sessid = $_SESSION['admin'];
                if (!isset($_SESSION['admin'])) {
                    echo "<script>alert('Please login');window.location.href='adminlogin.php'</script>";
                }
                $sel = "select * from admin where email='$sessid'";

                $fetched = mysqli_fetch_array(mysqli_query($conn, $sel), MYSQLI_BOTH);
                ?>
                <h1><?php echo $fetched['1'] ?></h1>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>