<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("location:signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        height: 100vh;
        width: 100%;
        margin: 0%;
        padding: 0%;
    }

    .display {
        position: relative;
        overflow: hidden;


    }

    .display>div {
        position: relative;

        left: 0%;
        width: 400%;
        display: flex;
        transition: .7s ease-in-out;

    }

    .display>div>div {
        position: relative;
        display: flex;
        position: relative;
        margin-left: 1%;
        margin-right: 1%;
        width: 98%;
    }


    .listthejob {
        width: 100%;
        display: flex;
        flex-direction: column;


    }

    .listthejob>div {
        position: relative;
        height: 80px;
        width: 98%;
        margin-top: 5px;
        margin-bottom: 5px;

        display: flex;
        align-items: center;
        box-shadow: 1px 2px 3px;

    }

    .listthejob>div:hover {
        background-color: antiquewhite;
    }

    .joblist {
        position: relative;
        width: 10%;
        height: 100%;
        margin-right: 5px;

        display: flex;
        align-items: center;
        justify-content: center;

    }

    .joblist>p {
        margin: 0;
    }

    .img {
        height: 98%;
        width: 30%;

        margin-top: 1%;
        border-right: 2px solid;
        margin-bottom: 1%;
    }

    .img>a {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .img>a>img {
        max-height: 70px;
    }

    .jobdiscr {
        width: 40%;
        margin-left: 1%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-right: 2px solid;
    }

    .jobdiscr>h2 {
        margin: 1px;
        margin-bottom: 10px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande',
            'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: medium;
    }

    .jobdiscr>p {
        margin: 5px;
        font-style: italic;
        color: rgb(95, 90, 90);
    }

    .status {
        width: 15%;
        height: 100%;
        display: flex;
        align-items: center;
        font-style: italic;
        justify-content: center;
    }

    /* second div */
    .seejobdisc {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100%;

    }


    .seejobdisc>div {
        width: 98%;
        margin-bottom: 10px;
        display: flex;

    }

    .buttondiv {
        height: 40px;
        margin-bottom: 10px;
    }

    .buttondiv>img {
        height: 40px;

    }

    .basicdisc,
    .otherdisc {
        height: 200px;
        border: 1px solid;
    }

    .basicdisc>div {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 5px;
    }

    .basicdisc>div:first-child {
        width: 30%;
    }

    .basicdisc>div>img {
        max-height: 100px;
    }

    .basicdisc>div>h2 {
        height: 40px;
        background-color: beige;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin: 0%;
    }

    .basicdisc>div>p {
        position: relative;
        margin: 0;
        height: 120px;
        display: flex;
        align-items: center;
        text-indent: 10px;
        font-size: 14px;
        font-style: italic;
        overflow-y: auto;
        font-family: 'Lucida Sans', 'Lucida Sans Regular',
            'Lucida Grande',
            'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .otherdisc>div {
        width: 49%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 20px;
        margin-right: 1%;
    }

    .otherdisc>div>p {
        color: rgb(71, 70, 70);
        margin: 5px;
        font-size: larger;
    }

    .seejobdisc>button {
        position: relative;
        color: orange;
        height: 40px;
        border: 2px solid;
        border-radius: 5px;
        background: none;
        transition: all .5px;
        font-size: larger;


    }

    .seejobdisc>button:hover {
        background-color: orange;
        color: white;
        border-color: orange;
        box-shadow: 1px 2px 3px orange;
    }

    .seeperson {
        height: 100%;
        position: relative;

        display: flex;
        flex-direction: column;
    }

    .appliersampldiv {
        min-height:100% ;
        overflow-y: auto;

    }

    .appliersamplepro {
        position: relative;
        height: 60px;
        left: 2%;
        width: 96%;
        display: flex;
        align-items: center;
        justify-content: space-around;
        border-radius: 5px;
        box-shadow: 1px 2px 3px;
        margin-bottom: 4px;

    }

    .appliersamplepro:hover {
        background-color: aliceblue;
    }

    .appliersamplepro>p {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .appliersamplepro>p:first-child {
        width: 20%;

    }

    .appliersamplepro>p:nth-child(2) {
        width: 40%;

    }

    .appliersamplepro>p:nth-child(3) {
        width: 20%;

    }


    .appliersamplepro>button {
        width: 60px;
        height: 30px;
        border-radius: 5px;

    }

    .appliersamplepro>button:hover {
        background-color: rgb(67, 238, 132);
        border-color: rgb(67, 238, 132);
        color: white;
    }

    /*  specific detail*/
    .seespceficperson {
        position: relative;
        display: flex;
        flex-direction: column;
       min-height: 100%;

    }

    .seespceficperson>div:nth-child(2) {
        display: flex;
        flex-direction: column;
        height: auto;

        align-items: center;


    }

    .seespceficperson>div>h2 {
        position: relative;
        text-align: center;
        margin: 5px;
        border: 1px solid;
        padding: 5px;
        background-color: black;
        color: azure;
    }

    .seespceficperson>div>div>div {
        display: flex;
        flex-direction: column;

        border-radius: 10px;
        box-shadow: 1px 1px 3px;
    }

    .seespceficperson>div:nth-child(2)>div {

        display: grid;
        grid-template-columns: 45% 45%;
        justify-content: space-around;
        padding-bottom: 10px;
    }

    .seespceficperson>div:nth-child(2)>div>div {
        margin: 10px;
        height: 250px;
    }

    .spcfprofile {
        display: flex;
        flex-direction: column;
        border-radius: 10px;
        box-shadow: 1px 1px 3px;
    }

    .spcfprofile>h3 {
        text-align: center;
    }

    .spcfprofile>div {

        padding-left: 0px;
    }

    .spcfprofile>div>p {
        font-weight: bold;
        font-size: medium;
        color: rgb(76, 79, 82);
        margin: 10px;

    }

    .linkimage {
        display: flex;
        align-items: center;
        padding-left: 5px;
    }

    .linkimage>a {
        margin-left: 10px;
        height: 40px;
        width: 60px;
        overflow: hidden;
        border-radius: 5px;
    }

    .linkimage>a>img {
        position: relative;
        height: 40px;
        width: 60px;
    }

    .educationalprofile {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .educationalprofile>p {
        color: rgb(76, 79, 82);
        margin: 0 0 10px 20px;
    }

    .otherprofile {
        padding: 10px;
    }

    .otherprofile>div:nth-child(1) {
        padding-left: 10px;

    }

    .otherprofile>div:nth-child(2) {
        margin-top: 10px;
        border: 2px solid;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

    }

    .otherprofile>div:nth-child(2)>h2 {
        position: relative;
        margin: 0%;
        padding-left: 5px;
        padding-right: 5px;
        top: -15px;
        height: 30px;
        border: 2px solid;
        text-align: center;
        background-color: white;
    }

    .otherprofile>div:nth-child(2)>p {
        margin: 0%;
        height: 120px;
        overflow-y: auto;
        padding-left: 5px;
        padding-right: 5px;
        text-indent: 20px;
        font-family: monospace;
        font-style: italic;
        color: rgb(61, 57, 57);
        margin-bottom: 5px;
    }

    .reciveapplicant {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .reciveapplicant>a{
        text-decoration: none;

    }
    .reciveapplicant>a>button {
        height: 40px;
        width: 80px;
        font-size: larger;
        font-weight: bold;
        border-radius: 5px;
        background: none;
        box-shadow: 1px 2px 2px;
        padding: 5px;
        border: 1px solid orange;
    }

    .reciveapplicant>button:hover {
        background-color: orange;
        color: white;
        border-color: orange;
    }

    .web_name {
        position: relative;
        background-color: rgb(0, 0, 0);
        display: flex;
        height: 40px;
        justify-content: center;
        align-items: center;

        width: 100%;
        color: rgb(255, 255, 255);
    }

    .name_of_web {
        postion: absolute;
        left: 40%;
        width: 60%;
        display: flex;
        text-align: center;
    }

    .name_of_web h1 {
        position: relative;
        font-size: 200%;
        left: 5%;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .nav {
        height: 30px;
        width: 100%;
        background-color: black;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .buttons_of_link>div {
        width: auto;
        display: none;
    }

    .buttons_of_link>a,
    .buttons_of_link>div>a {
        position: relative;
        margin-right: 10px;
        text-decoration: none;
        height: 20px;
        transition: 1s font-size;
        transition: 1s top;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        color: white;
    }

    .buttons_of_link>a::first-letter {
        text-transform: uppercase;
    }

    .buttons_of_link>a:hover,
    .buttons_of_link>div>a:hover {
        font-weight: bold;
        top: -10px;
        text-decoration: underline;
        font-size: 20px;
    }

    /** footer */

    footer {
        position: relative;
        width: 98%;
        left: 1%;
        background: rgb(0, 0, 0);
        display: flex;
        flex-direction: column;
    }

    .firstdiv {
        position: relative;
        width: 100%;
        display: flex;
        display: grid;
        grid-template-columns: 32% 32% 32%;
    }

    .firstdiv>div {
        margin-left: 1%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .firstdiv>div>h3::first-letter {
        text-transform: uppercase;
        color: orange;
        font-size: larger;
        text-shadow: 1px 1px 1px orange;
    }

    .firstdiv>div>h3 {
        color: rgb(250, 248, 248);
        margin-bottom: 1%;
        font-weight: bolder;
        font-size: x-large;
        font-family: monospace;
    }

    .links {
        display: flex;
        flex-direction: column;
    }

    .links>a {
        position: relative;
        text-decoration: none;
        color: white;
        text-align: left;
        transition: 1s left;
        margin-top: 5px;
        left: 0;
    }

    .links>a:hover {
        left: -10px;
    }

    .bankacc {
        position: relative;
        margin-bottom: 0;
        top: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        align-items: center;
    }

    .bankacc img {
        height: 40px;
        margin-right: 10px;
    }

    .bankacc p {
        font-size: large;
        color: white;
    }

    .firstdiv>div>a {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: rgb(255, 255, 255);
        display: flex;
        transition: .2s width;
        transition: .2s height;
        transition: .2s top;
        align-items: center;
        justify-content: center;
        margin-top: 5px;
    }

    .firstdiv>div>a>img {
        height: 70%;
        width: 70%;
    }

    .firstdiv>div>a:hover {
        width: 40px;
        height: 40px;
        top: -5px;
    }

    .owner {
        color: wheat;
        text-align: center;
    }

    .menuview {
        position: absolute;
        top: 100px;
        height: calc(100% - 100px);
        width: 95%;
        left: 1%;
        background: rgb(0, 0, 0, 0.6);
        visibility: hidden;
        padding-left: 20px;
    }

    .menu_container {
        position: relative;
        background: rgb(22, 29, 12);
        width: 200px;
        transform: translateX(-100%);
        transition: 1s transform;

    }

    .menus {
        display: flex;
        flex-direction: column;

    }

    .menus>a {
        text-decoration: none;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: white;
        font-size: 23px;
        border-bottom: 1px black solid;
        padding-bottom: 5px;
        padding-left: 30px;
    }

    .menus>a:hover {
        border: 2px solid;
        border-color: orange;
        padding-left: 10px;
    }
</style>

<body>
    <header>
        <div class="web_name">
            <div class="name_of_web">
                <h1>Ethio jobs</h1>
            </div>

        </div>
        <div class="nav">
            <div class="buttons_of_link">
                <a href="index.php">home</a>
                <a href="index.php/#about_us">about</a>
            </div>
        </div>

    </header>
    <section class="display">

        <div class="changedisplaye" style="height:auto" id="changedisplaye">

            <div class="listthejob">
        
                
                <?php
                include("displayjobprocess.php");
                ?>
                
                
            </div>


            <div class="seejobdisc">

                <div class="buttondiv"><img src="backbutton.png" alt="back" onclick="changeslide(2,1);"></div>
                <div class="basicdisc">
                    <div>
                        <img src="download.jpg" alt="">
                    </div>
                    <div>
                        <h2>title</h2>
                        <p> believe that roughly 70% of job descriptions are
                            terribly written, don't actually have that much to
                            do with the
                            job someone will be hired for in the long run</p>
                    </div>
                </div>

                <div class="otherdisc">
                    <div>
                        <p>job type</p>
                        <p>payment : $1200 </p>
                    </div>
                    <div>
                        <p>total reg for job : 14</p>
                        <p>submited date : </p>
                        <p> exp date </p>
                    </div>
                </div>
                <button onclick="changeslide(1,2);"> see applicant</button>


            </div>

            <div class="seeperson">
                <div class="buttondiv"><img src="backbutton.png" alt="back" onclick="changeslide(2,2);"></div>

                <div class="appliersampldiv">
                   
                </div>


            </div>
            <div class="seespceficperson">
                <div class="buttondiv"><img src="backbutton.png" alt="back" onclick="changeslide(2,3);"></div>
                <div class="seespceficpersonDiv">
                    <h2> About applicant</h2>
                    <div>
                        <div class="spcfprofile">
                            <h3>personal information</h3>
                            <div>
                                <p>full name</p>
                                <p>email</p>
                                <p>phone number</p>
                                <p> gender </p>
                                <p class="linkimage"> id <a href="download.jpg" target="_blank"
                                        rel="noopener noreferrer">
                                        <img src="download.jpg" alt="id"></a></p>
                            </div>
                        </div>
                        <div class="educationalprofile">
                            <p> Department : </p>
                            <p>Educational level </p>
                            <p>CGPA : </p>
                            <div class="linkimage">
                                certeficate : <a href="http://" target="_blank" rel="noopener noreferrer">
                                    <img src="download.jpg" alt="certeficate"></a>
                            </div>

                        </div>
                        <div class="otherprofile">
                            <div>
                                <p>work experience</p>

                                <address>address</address>

                            </div>
                            <div>
                                <h2>reason</h2>
                                <p class="content">
                                    applicant, appliernoun. a person who requests
                                    or seeks something such as assistance or
                                    employment or admission · applicator,
                                    appliernoun. a device for applying a

                                </p>
                            </div>



                        </div>
                        <div class="reciveapplicant">
                            <a href=""><button onclick="accept(1,1);"> recive</button></a>
                            

                         

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <footer>
        <div class="firstdiv">
            <div>
                <h3>ethio jobs</h3>
                <div class="links">
                    <a href="index">Home</a>
                    <a href="index.php#about_us">About us</a>
                    <a href="#contact_us">Contact</a>

                </div>
            </div>

            <div>
                <h3>support us</h3>
                <div class="bankacc">
                    <img src="cbe.jpg" alt="cbe">
                    <p class="acc">100029746210<br>Abebayehu shibru</p>
                </div>
                <div class="bankacc">
                    <img src="ab.jpg" alt="cbe">
                    <p class="acc">100029746210<br>Abebayehu shibru</p>
                </div>

            </div>
            <div id="contact_us">
                <h3>follow us </h3>
                <a href="fb.com">
                    <img src="facebook.svg" alt="fb">
                </a>
                <a href="tg.org"><img src="telegram.svg" alt="fb"></a>
                <a href="yb.com">
                    <img src="youtube.svg" alt="yb">
                </a>
            </div>
        </div>
        <div class="owner">
            <p>2022&copy; ahavah company</p>
        </div>
    </footer>

    <script>
        var heightarray = [];
        var counitration= 
        heightarray[0] = document.querySelector(".listthejob").clientHeight;
        heightarray[1] = document.querySelector(".seejobdisc").clientHeight;
        function changeslide(x, y, z) {
            var changediv = document.querySelector(".changedisplaye");
            var divheight;
            var setaclass;
            var m = y;
            if (x == 1) {
                if (y == 1) {
                    setaclass = document.querySelector(".seejobdisc");
                    divheight = setaclass.clientHeight;
                    changediv.style.left = "-100%";
                   

                }
                else if (y == 2) {
                    changediv.style.left = "-200%";

                    setaclass = document.querySelector(".appliersampldiv");
                    divheight = setaclass.clientHeight;
                    heightarray[2] = divheight;
                }
                else if (y == 3) {


                    changediv.style.left = "-300%"
                    setaclass = document.querySelector(".seespceficpersonDiv");
                    divheight = setaclass.clientHeight;
                    heightarray[3] = divheight;
                }
                
               
document.querySelector("#changedisplaye").style.height = Number(heightarray[m]) + 20 + "px";
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
              if (this.readyState == 4 && this.status == 200) {
   
                
                  setaclass.innerHTML = this.responseText;
              }
          };
      
          
          xmlhttp.open("Post", "discribeajob.php?y="+y+"&z="+z, true);
          xmlhttp.send();

            }
            if (x == 2) {
                if (y == 1) {
                    changediv.style.left = "0%";


                }
                else if (y == 2) {
                    changediv.style.left = "-100%"


                }
                else if (y == 3) {
                    changediv.style.left = "-200%";


                }
                m = m - 1;

            }
         
         


        }
        function setsession(postid) {
           
        }
        function accept(y,x) {
          var setaclass=  document.querySelector(".reciveapplicant")  ;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(xhttp.responseText)
                    setaclass.innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("POST", "accept.php?y=" + y + "z=" + x, true);
            xhttp.send();
        }
    </script>
</body>

</html>