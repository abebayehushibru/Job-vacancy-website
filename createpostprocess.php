<?php
include_once("helperfn.php");
$title = $_POST["title"];
$company = $_POST["company"];
$catagoryselect = $_POST["select"];
$discription = $_POST["discription"];

$photofile = validate_image("./assert/photos/postphotos/", $_FILES['photofile']);
$photologo =validate_image("./assert/photos/logophotos/", $_FILES['photologo']);
$payment =  $_POST["payment"];
$jobtype = $_POST["jobtype"];
$userid = $_SESSION["userid"];


if(empty($title))
{
   $error[] = "you forget entering title ";
}
else if(empty($company))
{
    $error[] = "you forget entering company name ";
}
else   if(empty($catagoryselect))
{
    $error[] = "you forget enter  catagory";
}
else if(empty($discription))
{
    $error[] = "you forget entering job discription";
}
else if(empty($payment))
{
    $error[] = "you forget entering  payment";
}
else if(empty($jobtype))
{
    $error[] = "you forget entering experience Year";
}

else if(empty($photologo))
{
    $error[] = "your logo is not png,jpeg,jpg file";
}
else if(empty($photofile))
{
    $error[] = "your logo is not png,jpeg,jpg file";
}
if (empty($error)) {
    require("conectdb.php");
    $stmt = "INSERT INTO posttable (postTitle,company,postdiscrtpt,postphoto,logophoto,catagory,jobtype,payment,adminNo) VALUES('" . $title . "','" . $company . "','" . $discription . "','" . $photofile . "','" . $photologo . "','" . $catagoryselect . "','" . $jobtype . "'," . $payment . "," . $userid . ")";
    //$stmt ="INSERT INTO admins (phoneNumber,PWD,admintype) VALUES('0914', '3344','admin')";
  
    
    $result = $conn->query($stmt);
    if ($result) {
        echo '<span style="color:green"> your job inserted</span>';
    } else {
        echo '<span style="color:red">  error when inserting </span>';
    }
}

    else{
       echo "$errorr";
    }

// insertin data query to database  php coade?