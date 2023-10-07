<?php
include_once("conectdb.php");
$phonenumber = $_POST["phoneNumber"];
$password = $_POST["password"];

$stmt ="SELECT addminId ,admintype ,phoneNumber,PWD FROM admins where  phoneNumber='".$phonenumber ."'" ;

$result = $conn->query($stmt);


if (!empty($result) ){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (password_verify($password,$row['PWD'])){
       session_start();
        $_SESSION["usertype"]=$row["admintype"];
        $_SESSION["userid"]=$row["addminId"] ;
        header("location:index.php");
    
        exit();
    }
    else {
        echo "wrong password";
    }

  
}
else{
    echo "wrong phone number";
}
