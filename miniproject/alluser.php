<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin All admin</title>
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
        <h1 class="text-center mt-3">
            All admin List
        </h1>
        <table class="border border-danger   mt-5" align="center">
            <tr class="border border-danger p-2">
                <th class="border border-danger p-2">Id</th>
                <th class="border border-danger p-2">Name</th>
                <th class="border border-danger p-2">Email</th>
                <th class="border border-danger p-2">Password</th>
                <th class="border border-danger p-2">Action</th>
            </tr>
            <?php

            session_start();
            include "connection.php";
            $sessid = $_SESSION['admin'];
            if (!isset($_SESSION['admin'])) {
                echo "<script>alert('Please login');window.location.href='adminlogin.php'</script>";
            }

            $sel2 = "select * from ragister";
            $r = mysqli_query($conn, $sel2);
            while ($fetched = mysqli_fetch_array($r, MYSQLI_BOTH)) {

            ?>
                <tr class="border border-danger p-2">
                    <td class="border border-danger p-2"><?php echo $fetched['0'] ?></td>
                    <td class="border border-danger p-2"><?php echo $fetched['1'] ?></td>
                    <td class="border border-danger p-2"><?php echo $fetched['2'] ?></td>
                    <td class="border border-danger p-2"><?php echo $fetched['3'] ?></td>
                    <td class="border border-danger p-2"><a class="text-decoration-none" href=".php">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>

    </html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>