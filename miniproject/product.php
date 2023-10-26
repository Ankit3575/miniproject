<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product PAge - mini Project</title>
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
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-disabled="true" href="order.php">Order</a>
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
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <?php
            include("connection.php");
            // session_start();
            // $sessid=$_SESSION['user'];
            $sel = "select * from product";
            $q = mysqli_query($conn, $sel);
            while ($fetch = mysqli_fetch_array($q, MYSQLI_BOTH)) {
            ?>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="product/<?php echo $fetch['3'] ?>" alt="" srcset="" height="150px" width="100%">
                        <div class="card-body">
                            <h3>
                                <?php echo $fetch['1'] ?>
                            </h3>
                            <h4><?php echo $fetch['2'] ?></h4>
                            <p><?php echo $fetch['4'] ?></p>
                            <a href="cart.php?pid=<?php echo $fetch['0'] ?>"><button class="btn btn-primary">Add To Cart</button></a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>