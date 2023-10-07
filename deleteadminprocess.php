<?php
include("conectdb.php");
$phonenumber = $_POST["phoneNumber"];

$stmt = "SELECT addminId  FROM admins where  phoneNumber='" . $phonenumber . "'";

$result = $conn->query($stmt);
if (!empty($result)) {
$y=false;
$z=false;
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $adminid = $row['addminId'];
    $stmt = "SELECT postid  FROM posttable where  adminNo=" . $adminid;
    $result1 = $conn->query($stmt);
    if (!empty($result1)) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            $postid = $row1['postid '];
            $stmt = "SELECT postno   FROM usertable where  postno=" . $postid;
            $result2 = $conn->query($stmt);
            if (!empty($result2)) {
                while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
                    $postid = $row2['postid '];
                    $stmt = "DELETE    FROM usertable where  postno=" . $postid;
                    $result3 = $conn->query($stmt);
                    

                }
            }
            $stmt = "DELETE    FROM posttable where  postid=" . $postid;
             $result3 = $conn->query($stmt);
             if($result3){
             $z=true;
             }
        }

    }

    $stmt = "DELETE FROM admins where  addminId=" . $adminid;
     $result3 = $conn->query($stmt);
    if($result3){
    $y=true;
    }


if ($y&&$z) {
    $_SESSION['message'] = "yesdel";
      header("location:notdeleted.php");
  
    exit();
} else {
    $_SESSION['message'] = "nodele";
    header("location:deleted.php");
    exit();
}

}
else {
echo "not found such phone Number";
}