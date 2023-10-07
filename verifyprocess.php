<?php
$_SESSION['verifycode']="665566";
$verifycode  = $_POST['verifycode'];
if( $_SESSION['verifycode'] ==$verifycode){
    header("location:changepassword.php");
    exit();
}
 
else {
    echo "<span style=\"color:red;font-weight:bold;\">wrong verification code</span>";
}
 

