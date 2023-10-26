<?php
include("connection.php");
$email=$_POST['email'];
$opass=$_POST['opass'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
session_start();
$sessid=$_SESSION['admin'];
$sel="select * from admin where email='$sessid'";
$qu=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($qu,MYSQLI_BOTH);
if($fetch['password']==$opass){
if($npass==$cpass){
    $up="update admin set password='$npass' where email='$sessid'";
    if($qur=mysqli_query($conn,$up)){
        echo "<script>alert('password change');window.location.href='adminlogin.php'</script>";

    }
    else{
        echo "<script>alert('password not change');window.location.href='changepassword.php'</script>";

    }
}
else{
    echo "<script>alert('new password and confirm password not match');window.location.href='changepassword.php'</script>";
}
}
else{
    echo "<script>alert('old password not match');window.location.href='changepassword.php'</script>";
   
}
