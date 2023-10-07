<?php  ob_start();
  
$phonenumber = $_POST['phoneNumber'];


if (!empty($phonenumber)) {
    include_once('conectdb.php');

    $stmt = "SELECT addminId ,phoneNumber,email FROM admins  where  phoneNumber='" . $phonenumber . "'limit 1";
    $result = $conn->query($stmt);

    if (!empty($result)) {

        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $_SESSION['forgetaddminId'] = $row['addminId'];
        $_SESSION['adminemail'] = $row['email'];
        $_SESSION['adminphno'] = $row['phoneNumber'];
        $verifycode = "";
        $i = 0;
        while ($i < 6) {
            $m = rand(0, 9);
            $verifycode = $verifycode . "$m";
            $i++;

        }
        $_SESSION['verifycode'] = "112233";///$verifycode;
       
  
        header("location:verify.php");
            exit();
    }
    else {

        echo "<span style=\"color:red;font-weight:bold;\"> phone number not found </span>";
    }
}

else{
    echo " forget enter phone number";
}
ob_end_flush();

?>
