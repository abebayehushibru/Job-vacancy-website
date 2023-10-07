<?php

include("conectdb.php");
$adminid=$_SESSION['userid'];
$stmt = "SELECT postid,postTitle,jobtype,postphoto FROM posttable where adminNo=".$adminid;
$result = $conn->query($stmt);
if (!empty($result) && $result->num_rows > 0){
  $count=1;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    
    echo "  <div onclick=\"changeslide(1,1,".$row['postid'].");\">
    <div class=\"joblist\">
        <p>".$count."</p>
    </div>
    <div class=\"img\"><a href=\"".$row['postphoto']."\"" ."target=\"_blank\" rel=\"noopener noreferrer\">
            <img src=\"".$row['postphoto'] ."\">
        </a></div>
    <div class=\"jobdiscr\">
        <h2>".$row['postTitle']."</h2>
        <p>".$row['jobtype']."</p>

    </div>
    <div class=\"status\">
        <p> expiration not setted</p>
    </div>

</div>
    ";
    $count++;
   
}
}

else {

echo "no result";}