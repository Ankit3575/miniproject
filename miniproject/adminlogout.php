<?php
session_start();

if(isset($_SESSION['admin'])){
    session_destroy();
    echo "<script>alert('logout success');window.location.href='adminlogin.php'</script>";

}
else{
    echo "<script>alert('logout fail');window.location.href='admindashboard.php'</script>";
}

?>