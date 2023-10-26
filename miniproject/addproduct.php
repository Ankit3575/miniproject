<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Gallary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4 bg-danger p-5">

                <h1 class="text-center">Add Product</h1>
                <form action="addproductcode.php" method="post" enctype="multipart/form-data" class="bg-info">
                    <div class="mb-3">
                        <label for="exampleInputName">Product Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputprice">Product Price</label>
                        <input type="number" name="price" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPicture">Product Picture</label>

                        <input type="file" name="files" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescription">Product Discription</label>
                        <input type="text" name="pdesc" id="" class="form-control">
                    </div>
                    <button class="btn btn-primary">Add</button>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>



</body>

</html>