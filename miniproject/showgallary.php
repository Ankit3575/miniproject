<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show gallary </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
 <h1>Show Gallary</h1>
 <table class="border border-warning table table-bordered text-center">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>PICTURE</th>
        <th>ACTION</th>
    </tr>
    <?php
                session_start();
                include "connection.php";
                $sessid = $_SESSION['admin'];
                if (!isset($_SESSION['admin'])) {
                    echo "<script>alert('Please login');window.location.href='adminlogin.php'</script>";
                }
                $sel = "select * from gallary";

                $fetched = mysqli_fetch_array(mysqli_query($conn, $sel), MYSQLI_BOTH);
                ?>
               
    <tr>
        <td><?php echo $fetched['0'] ?></td>
        <td><?php echo $fetched['1'] ?></td>
        <td><img src="image/<?php echo $fetched['1'] ?>" height="200px" width="200px"></td>
        <td><a href="delete.php"><?php echo $fetched['0'] ?>Edit</a></td>
        <td><a href="delete.php"><?php echo $fetched['0'] ?>Delete</a></td>
    </tr>
 </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>