<?php
session_start();
include_once("helperfn.php");
$firstname=validate_text($_POST["firstname"]);
$lastname=validate_text($_POST["lastname"]);
$phoneNumber=$_POST["phoneNumber"];
$email = $_POST["email"];
$edlevel=$_POST["select"];
$role=$_POST["role"];
$cgpa=(double) $_POST["cgpa"];
$experienceYear = $_POST["experienceYear"];
$ADDRESS=$_POST["ADDRESS"];
$reason=$_POST["reason"];
$idphoto =  validate_image( "./assert/photos/userphoto/id/", $_FILES['idphoto']);
$certficatephoto = validate_image( "./assert/photos/userphoto/cert/",$_FILES['Certeficate']);
$postidno =intval($_SESSION["postid"]);
$error = array();

if(empty($firstname))
{
   $error[] = "you forget enter last name";
}
else if(empty($phoneNumber))
{
    $error[] = "you forget enter phoneNumber ";
}
else   if(empty($edlevel))
{
    $error[] = "you forget enter  catagory";
}
else if(empty($role))
{
    $error[] = "you forget entering your role";
}
else if(empty($cgpa))
{
    $error[] = "you forget entering  commulative GPA";
}
else if(empty($experienceYear))
{
    $error[] = "you forget entering experience Year";
}
else if(empty($ADDRESS))
{
    $error[] = "you forget enter ADDRESS";
}
else if(empty($idphoto))
{
    $error[] = "you  entering wrong file type for id photo: allow types jpg,jpeg,png GPA";
}
else if(empty($certficatephoto))
{
    $error[] = "you  entering wrong file type for certficate photo : allow types jpg,jpeg,png GPA";
} 
if (empty($error)) {
    require("conectdb.php");
 
    $stmt = "INSERT INTO usertable (firstname,lastname,phonenumber,email,edlevel,cgpa,roleofuser,expyear,address,reason,idphoto,certphoto,postno) VALUES ('".$firstname."', '".$lastname."',' ".$phoneNumber."','". $email."','". $edlevel."',". $cgpa.",'". $role."',". $experienceYear.",'". $ADDRESS."','". $reason."','". $idphoto."','". $certficatephoto."',". $postidno.")";
    $result = $conn->query($stmt);
    if ($result){
        header("location:right.php");
        exit();
    }
    else{
       header("location:wrong.php"); 
      echo "wrong";
    }
}
else{
    echo $error[0];
}