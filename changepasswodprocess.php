<?php
$password = $_POST['password'];
$cmpassword=$_POST['confrimpassword'];

if( $password==$cmpassword){
    $addminid = $_SESSION['forgetaddminId'];
    $stmt ="UPDATE admins  SET PWD='".$password."'where  addminId=".$addminid ;

    $result = $conn->query($stmt);
    if (!empty($result)) {
        header("location:signIn.php");
        exit();
    }
    echo "<span style=\"color:red;font-weight:bold;\"> error occurrd please try again</span>";

}
 
else {
    echo "<span style=\"color:red;font-weight:bold;\"> password not matched</span>";
}
 