<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart - mini Project</title>
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
    <h1>Product In Cart</h1>
    <table class="table table-borderd">
        <tr>
            <th> Sr no </th>
            <th> Product Image </th>
            <th> Produvct Name </th>
            <th> Product Price </th>
            <th> Action </th>
        </tr>
        <?php

        include("connection.php");
        session_start();
        $sessid = $_SESSION['user'];
     
        $sel = "select * from cart where userid = '$sessid'";
        $qu = mysqli_query($conn, $sel);
        while ($fetch = mysqli_fetch_array($qu, MYSQLI_BOTH)) {
             $pid = $fetch['2'];
            $sel1 = "select * from product where id = '$pid'";

            $qu1 = mysqli_query($conn, $sel1);
            while ($fetched = mysqli_fetch_array($qu1, MYSQLI_BOTH)) {
        ?>

                <tr>
                    <td><?php echo $fetched['0'] ?></td>
                    <td><img src="product/<?php echo $fetched['3'] ?>" height="150px" width="150px"></td>
                    <td><?php echo $fetched['1'] ?></td>
                    <td><?php echo $fetched['2'] ?></td>
                    <td><a href="remove.php">Remove</a></td>
                </tr>
            <?php

            }
            ?>
        <?php
        }
        ?>
        <a href="checkout.php">checkout</a>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>