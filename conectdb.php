<?php
$dbname="ethiojobs";
$hostname="localhost";
$password ="";
$username="root";
$conn1 = mysqli_connect($hostname,$username,$password);
$conn = mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn){
    die( "faild to connect ".mysqli_connnect_error());

}

