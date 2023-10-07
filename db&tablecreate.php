<?php
$hostname="localhost";
$password ="";
$username="root";
$conn1 = mysqli_connect($hostname,$username,$password);

$stmt = "CREATE DATABASE ethiojobs ";
$result = $conn1->query($stmt);
if($result){
  if ($result) {
  $stmt= "CREATE TABLE admins (
      addminId int(11) AUTO_INCREMENT,
      phoneNumber Varchar (50) not null,
      email Varchar(50) not null,
      PWD TEXT Not null,
      admintype  varchar (10)  default 'admin',
      primary key (addminId));";
      
  }
  $result = $conn->query($stmt);
  if ($result) {
  
  $stmt ="INSERT INTO admins  VALUES (0,'0964799523','abeaba64@gmail.com','".password_hash('228742',PASSWORD_DEFAULT)."','creator');";
   $result = $conn->query($stmt);
  }
 
    $stmt ="create table usertable (
    userid int not null  AUTO_INCREMENT,
    firstname varchar(50) not null,
    lastname varchar(50) not null,
    phoneNumber varchar(50) not null,
    email varchar(50) not null,
    edlevel varchar(100) not null,
    cgpa double not null,
    roleofuser varchar(200) not null,
    expyear int(11),
    address varchar(200),
    reason TEXT ,
    idphoto text,
    certphoto text,
    postno int (11),
    acceptance varchar(5),
    Primary key (userid));";
    
      $result = $conn->query($stmt);
      
      $stmt ="create table posttable(
      postid int not null AUTO_INCREMENT,
      postTitle varchar Text
      company  text not null,
      postdiscrtpt text not null,
      postphoto text not null,
      logophoto text not null,
      catagory text not null,
      jobtype varchar(50),
      payment double,
      adminNo int(11),
      primary key(postid));";
      
       $result = $conn->query($stmt);}
      


