<?php
include("connection.php");
$email=$_POST['email'];
$pass=$_POST['pass'];
$sel="select * from ragister where email='$email'";
$qu=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($qu,MYSQLI_BOTH);
if($fetch['email']==$email){
if($fetch['password']==$pass){
    session_start();
    $_SESSION['user']=$email;
    echo "<script>alert('login success');window.location.href='userdashboard.php'</script>";

}
else{
    echo "<script>alert('Password wrong');window.location.href='ragisterlogin.php'</script>";

}
}
else{
    echo "<script>alert('emailid wrong');window.location.href='ragisterlogin.php'</script>";

}
?>