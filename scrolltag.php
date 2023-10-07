<?php

include("conectdb.php");

$stmt = "SELECT postid,company,postdiscrtpt,catagory,jobtype,payment FROM posttable ORDER BY payment DESC ";
$result = $conn->query($stmt);
if (!empty($result) && $result->num_rows > 0){
    $count =0;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        
          $status = "no_active";
        if ($count==6){
        break;
        }
      
        if($count==1){
            $status = "active";
        }
    echo " <div>
    <div class=\"jobitems\" id=\"". $status."\">
        <h2>".$row['catagory']."</h2>
        <h4>".$row['company']."</h4>
        <h1>".$row['payment']." Birr <sub>".$row['jobtype']."</span></h1>
        <p>".$row['postdiscrtpt']."</p>
        <button class=\"apply_btn\"><a href=\"apply.php\" onclick=\"setsession(".$row['postid'].");\">apply now</a> </button>
    </div>
</div>
    ";
    $count=$count+1;
    
}
}