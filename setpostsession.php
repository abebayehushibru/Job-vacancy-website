<?php
session_start();
$postno = $_REQUEST["postno"];
$_SESSION["postid"] = $postno;
if (isset($_SESSION["postid"])) {

    header('location:apply.php');
    exit ();
} else {
    echo "not set";
}
?>