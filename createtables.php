<?php

include_once("conectdb.php");
$stmt ="INSERT INTO admins (phoneNumber,PWD,admintype) VALUES('0949180098', '228742','admin')";

$result = $conn->query($stmt);
if ($result){
    echo "inserted";
}






