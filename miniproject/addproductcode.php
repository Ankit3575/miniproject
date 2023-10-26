<?php
include("connection.php");
$name=$_POST['name'];
$price=$_POST['price'];
$file1=$_FILES['files']['name'];
$file2=$_FILES['files']['tmp_name'];
$pedsc=$_POST['pdesc'];
$loc="product/";
echo $ins="insert into product(name,price,picture,description)values('$name','$price','$file1','$pedsc')";
if(mysqli_query($conn,$ins)){
    move_uploaded_file($file2,$loc.$file1);
    echo "<script>alert('product stored');window.location.href='addproduct.php'</script>";
}
else{
    echo "<script>alert('product not stored');window.location.href='addproduct.php'</script>";
}

?>