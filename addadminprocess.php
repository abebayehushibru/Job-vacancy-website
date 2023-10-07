<?php
include("conectdb.php");
include("helperfn.php");
$phonenumber = $_POST["phoneNumber"];
$password = $_POST["password"];
$email = $_POST["email"];
$cmpassword = $_POST["cmpassword"];


if ($cmpassword == $password) {
$password = validate_text($password);

    $hashed_pwd=password_hash($password,PASSWORD_DEFAULT);
    $stmt = "INSERT INTO admins (phoneNumber,PWD,email) VALUES ('".$phonenumber ."','".$hashed_pwd."','".$email ."')";
    $result = $conn->query($stmt);
    if ($result) {
header("location:added.php");
exit();
    }
    else{
        header("location:notadded.php");
exit();
    }
}
else {
    echo "password not matched";
}