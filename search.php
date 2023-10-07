<?php
include("conectdb.php");
$stmt= "SELECT postid,postTitle,jobtype,postdiscrtpt,postphoto,payment FROM posttable";
$result = $conn->query($stmt);
if (!empty($result) && $result->num_rows > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo "
<div class=\"srcitems\">
                     <div>
                         <img src=\" ".$row['postphoto']."\">
                     </div>
                     <div class=\"descriptionitems\">
                         <h3> ".$row['postTitle']."</h3>
                         <p class=\"textcontent\"> ".$row['postdiscrtpt']."
                         </p>
                         <p class=\"typeofjob\"> ".$row['jobtype']."</p>
                     </div>
                     <div>
                         <h2> ".$row['payment']."</h2>
                        <a href=\"apply.php\"> <button class=\"apply\" onclick=\"setsession( ".$row['postid'].");\">apply</button></a>
                     </div>
                 </div>";}
              
                 }
                 
                 else{
                 echo "no post";
                 }
                 ?>