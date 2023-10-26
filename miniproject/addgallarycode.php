<?php
$file=$_FILES['files']['name'];
$temp=$_FILES['files']['tmp_name'];
include("connection.php");

$loc="image/";
$ins="insert into gallary(name)values('$file')";
if(mysqli_query($conn,$ins)){
    move_uploaded_file($temp,$loc.$file);
    echo "<script>alert('data inserted');window.location.href='addgallary.php'</script>";

}
else{
    echo "<script>alert('data not inserted');window.location.href='addgallary.php'</script>";
}
?>