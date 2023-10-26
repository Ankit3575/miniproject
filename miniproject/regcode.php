<?php
include"connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass']; 
$date=date("d/m/Y");
date_default_timezone_set("asia/kolkata");
$time=date("H:i:sa");
$sel="select * from ragister where email='$email'";
$qu=mysqli_query($conn,$sel);
$fetch=mysqli_fetch_array($qu,MYSQLI_BOTH);
if($fetch['2']==$email){
    echo "<script>alert('email already exists');window.location.href='ragisterlogin.php'</script>";
 
}
else{
    
$ins="insert into ragister(name,email,password,date,time) values('$name','$email','$pass','$date','$time')";
if(mysqli_query($conn,$ins)){
    echo "<script>alert('data stored');window.location.href='ragisterlogin.php'</script>";
}
else{
    echo "data not inserted";
}
}
?>