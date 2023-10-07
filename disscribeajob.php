<?php

include("conectdb.php");
$y = $_REQUEST['y'];
$postno = $_REQUEST['z'];
$userid = $_REQUEST['z'];

if ($y == 1) {
    $stmt = "SELECT postid,postTitle,postdisrtpt,postphoto,jobtype,payment FROM posttable where postid=" . $postno;
    $result = $conn->query($stmt);
    if (!empty($result) && $result->num_rows > 0) {
        $count = 1;
        if ($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {

            echo "<div class=\"buttondiv\"\"><img src=\"backbutton.png\" alt=\"back\" onclick=\"changeslide(2,1);\"></div>
                <div class=\"basicdisc\"  >
                    <div>
                        <img src=\"" . $row['postphoto'] . " >
                    </div>
                    <div>
                        <h2>" . $row['postTitle'] . "</h2>
                        <p> " . $row['postdisrtpt'] . "</p>
                    </div>
                </div>

                <div class=\"otherdisc\">
                    <div>
                        <p>" . $row['jobtype'] . "</p>
                        <p>payment :" . $row['payment'] . " Birr </p>
                    </div>
                    <div>";



        }
    }
    $stmt = "SELECT COUNT(postno)FROM usertable where postno=" . $postno;
    $result = $conn->query($stmt);
    if (!empty($result) && $result->num_rows > 0) {
        $count = 0;
        while ($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {
            $count++;
        }
        echo " <p>total applicant for job : " . $count . "</p>
    <p>submited date : not set</p>
    <p> exp date : not set </p>
</div>
</div>
<button onclick=\"changeslide(1,2," . $postno . ");\"> see applicant</button>
    ";
    }


} else if ($y == 2) {
    $stmt = "SELECT firstname,lastname,cgpa,usrid,acceptance FROM usertable where postno=" . $postno;
    $result = $conn->query($stmt);
    if (!empty($result) && $result->num_rows > 0) {
        $count = 1;
        while ($row = mysql_fetch_array($result, MYSQLI_ASSOC)) {
            $count++;
            echo "
    div class=\"appliersamplepro\">
    <p>" . $count . "</p>
    <p> " . $row['firstname'] . "  " . $row['lastname'] . "</p>
    <p>CGPA :  " . $row['cgpa'] . "</p>";

            if ($row['acceptance'] == "no") {
                echo "<button onclick=\"changeslide(1,3," . $row['usrid'] . ");>view</button>";
            }

            if ($row['acceptance'] == "yes") {
                echo "<button onclick=\"changeslide(1,3," . $row['usrid'] . ");>Accepted</button>";
            }
            echo "</div>";

        }
    } else
        echo "no search result";
} else if ($y == 3) {
    $stmt = "SELECT * FROM usertable where userid=" . $userid;
    $result = $conn->query($stmt);
    if (!empty($result) && $result->num_rows > 0) {
        echo "
    <h2> About applicant</h2>
    <div>
        <div class=\"spcfprofile\">
            <h3>personal information</h3>
            <div>
                <p>full name : " . $row['firstname'] . "  " . $row['lastname'] . "</p>
                <p>email : " . $row['email'] . "  </p>
                <p>phone number :  " . $row['phonenumber'] . "  </p>
              
                <p class=\"linkimage\"> id <a href=\" " . $row['idphoto'] . " target=\"_blank\"
                        rel=\"noopener noreferrer\">
                        <img src=\"" . $row['idphoto'] . " \" ></a></p>
            </div>
        </div>
        <div class=\"educationalprofile\">
            <p> Department : " . $row['roleofuser'] . " </p>
            <p>Educational level : " . $row['edlevel'] . "</p>
            <p>CGPA : " . $row['cgpa'] . "</p>
            <div class=\"linkimage\">
                certeficate : <a href=\"" . $row['certphoto'] . "\" target=\"_blank\" rel=\"noopener noreferrer\">
                    <img src=\"" . $row['certphoto'] . "\" </a>
            </div>

        </div>
        <div class=\"otherprofile\">
            <div>
                <p>work experience year : " . $row['expyear'] . " </p>

                <address>address" . $row['addres'] . " </address>

            </div>
            <div>
                <h2>reason</h2>
                <p class=\"content\">" . $row['reason'] . " 
                </p>
            </div>



        </div>
        <div class=\"reciveapplicant\">
        ";
        if ($row['acceptance'] == "no") {
            echo "
            <button onclick=\"accept(" . $row['userid'] . ",".$postno .");\"> recive</button>";
        }
        if ($row['acceptance'] == "yes") {
            echo "
            <button> acepted</button>";
        }


        echo "

        </div>

    </div>
</div>
";

    } else {
        echo "no search result";
    }
}