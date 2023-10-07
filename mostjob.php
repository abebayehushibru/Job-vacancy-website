<?php

include("conectdb.php");

$stmt = "SELECT postid,company,postdiscrtpt,postphoto,logophoto,jobtype,payment FROM posttable ORDER BY postid DESC";
$result = $conn->query($stmt);
echo $result->num_rows ;
if (!empty($result) && $result->num_rows > 0){

    $count =0;
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
if($count==6){
break;
}
else{
    
    echo "<div class=\"items\">
                <div class=\"content\">
                    <img src=\"".$row['postphoto']."\" alt=\"item1\">
                    <p class=\"discription\">"
                    .$row['postdiscrtpt']."
                        <span style=\"text-align:center;margin-top:10px;float:right;\">
                            <span style=\"color:orange ;font-size:22px\">".$row['payment']." </span>
                            birr ".$row['jobtype']."</span>
                    </p>
                </div>
                <div class=\"botom_content\">
                    <div class=\"do\">
                        <img src=\" ".$row['logophoto']."\" alt=\"logo\">
                        <p >".$row['company']."</p>
                    </div>
                    <div class=\"apply\">
                        <button class=\"apply_btn\"><a href=\"apply.php\" onclick=\"setsession(".$row['postid'].");\">apply</a> </button>
                    </div>
                </div>
            </div>
    ";}
    $count++;
}
}