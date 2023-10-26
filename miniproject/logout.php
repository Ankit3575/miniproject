<?php
session_start();

if(isset($_SESSION['user'])){
    session_destroy();
    echo "<script>alert('logout success');window.location.href='ragisterlogin.php'</script>";

}
else{
    echo "<script>alert('logout fail');window.location.href='userdashboard.php'</script>";
}

?>