<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Gallary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <h1>Admin Show Product</h1>
    <table class="border table-bordered">
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Product Description</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include("connection.php");
        $sel = "select * from product";
        $qu = mysqli_query($conn, $sel);
        while ($fetched = mysqli_fetch_array($qu, MYSQLI_BOTH)) {

        ?>
            <tr>
                <td><?php echo $fetched['0'] ?></td>
                <td><?php echo $fetched['1'] ?></td>
                <td><?php echo $fetched['2'] ?></td>
                <td><img src="product/<?php echo $fetched['3'] ?>" height="100px"></td>
                <td><?php echo $fetched['4'] ?></td>
                <td><a href="">Edit</a></td>
                <td><a href="">Delete</a></td>
            </tr>

    </table>
<?php
        }
?>
</body>

</html>