<?php
include("connection.php");
session_start();
$sessid=$_SESSION['user'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("H:i:sa");
$datetime=$date."".$time;

$up="update cart set address='$address',pincode='$pin',ordertime='$datetime',status='true' where userid='$sessid'";
if(mysqli_query($conn,$up)){

    echo "<script>alert('order conformed');window.location.href='userdashboard.php'</script>";
}
else{
    echo "<script>alert('order failed');window.location.href='checkout.php'</script>";
}

?>