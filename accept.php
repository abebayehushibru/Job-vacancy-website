<?php

include("conectdb.php");

$postno = $_REQUEST['y'];
$userid = $_REQUEST['z'];
$stmt = " UPDATE usertable SET  acceptance='yes' where 	postno=" . $postno . "AND userid =" . $userid;
if ($result) {
    echo "<span style=\"font-weight:bold;color:green\">accepted</span>";
} else {
    echo "<span style=\"font-weight:bold;color:red\">please try again</span>";
}