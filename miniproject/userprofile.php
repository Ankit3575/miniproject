<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile -mini Project</title>
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

    <h1 class="mt-3" align="center">User Profile</h1>
    <table class="border border-danger p-4 mt-5 p-4" align="center">
        <tr class="border border-danger p-4">
            <th class="border border-danger p-4">Name</th>
            <th class="border border-danger p-4">Email</th>
            <th class="border border-danger p-4">Password</th>
            <th class="border border-danger p-4">Action</th>
        </tr>
        <?php
        session_start();
        include "connection.php";
        $sessid = $_SESSION['user'];
        if (!isset($_SESSION['user'])) {
            echo "<script>alert('Please login');window.location.href='ragisterlogin.php'</script>";
        }
        $sel = "select * from ragister where email='$sessid'";

        $fetched = mysqli_fetch_array(mysqli_query($conn, $sel), MYSQLI_BOTH);
        ?>
        <tr class="border border-danger p-4">
            <td class="border border-danger p-4"><?php echo $fetched['1']?></td>
            <td class="border border-danger p-4"><?php echo $fetched['2']?></td>
            <td class="border border-danger p-4"><?php echo $fetched['3']?></td>
            <td class="border border-danger p-4"><a class="text-decoration-none" href="editprofile.php">Edit Profile</a></td>
        </tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>