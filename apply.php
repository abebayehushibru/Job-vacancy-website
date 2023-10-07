<?php
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BASIC.css">
    <style>
        .mysec {
            height: auto;
            position: relative;
            width: 96%;
            left: 2%;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgb(250, 177, 83);
        }

        .forform {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .forform>h2 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .flpform {
            padding-top: 15px;
            padding-left: 5px;
            width: 98%;
            left: 1%;
            display: grid;
            grid-template-columns: 400px ;
            justify-content: space-around;
            box-shadow: 1px 2px 3px black;
            margin: 10px;
        }
        .flpform >div{
          border: 2px solid white;
          margin-top: -2px;
            display: flex;
            flex-direction: column;
           align-items: center;
         

        }
        #styledmyinput {
            position: relative;
            display: flex;
            width: 94%;
            left: 2%;
            height: 40px;
            flex-direction: column;
            margin-bottom: 10px;
            background-color: white;

        }

        #styledmyinput input {
            position: relative;
            top: 5px;

            height: 35px;
            font-size: 12px;
            outline: none;
            padding-right: 10px;
            border: none;

        }

        #styledmyinput label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 5PX;
            font-size: 18px;
            pointer-events: none;
            color: #adadad;
            transition: all .5s;
        }

        #styledmyinput span::before {
            position: absolute;
            content: ' ';
            left: 0%;
            height: 3px;
            top: 40px;
            width: 0%;
            background-color: #2691d9;
            transition: all .5s;
        }

        #styledmyinput input:focus~label,
        #styledmyinput input:valid~label {
            top: 9px;
            color: #2691d9;
        }

        #styledmyinput input:focus~span::before,
        #styledmyinput input:valid~span::before {
            width: 100%;
        }

        .edustatus {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .selection {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            position: relative;
            margin-bottom: 10px;

        }

        .selection>span {

            margin-right: 10px;
            margin-bottom: 10px;
            color: #3a0202;

        }

        #select {
            margin-bottom: 10px;
            outline-color: #2691d9;
            color: #238bcf;
            font-weight: bold;
            border: 2px solid#2691d9;
            ;

        }

        .selectionspan {
            font-size: 14px;
            color: rgb(26, 33, 53);
        }

        .role {
            margin-top: 10px;
            position: absolute;
            width: 100%;
        }

        .selection>input {
            position: relative;
            left: 30%;
            border: none;
            text-indent: 20px;
        }

        #gpa {
            position: relative;
            left: -20%;
            margin-bottom: 5px;
        }

        #gpa>input {
            border: none;
            outline: #238bcf;
        }

        .otherinfo {
            width: 99%;
            position: relative;
            display: flex;

        }

        .otherinfo>div {
            position: relative;
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 15px;

        }

        .otherinfo>div:first-child>input {
            width: 40px;
            border: #05090c solid 1px;
            border-radius: 2px;
        }

        .otherinfo>div:last-child>textarea {
            max-width: 120px;
            max-height: 60px;
            min-width: 120px;
            min-height: 60px;

            border-radius: 5px;
            padding: 5px;
            text-indent: 20px;

        }

        .otherinfo>div input:focus,
        .otherinfo>div input:valid,
        .otherinfo>div textarea:focus,
        .otherinfo>div textarea:valid,
        .reason>textarea:focus,
        .reason>textarea:valid {
            border-color: #238bcf;
            outline: none;
        }

        .attachementfile {
            position: relative;
            display: flex;
            width: 98%;
            align-items: center;
            margin-bottom: 10px;

        }
        .attach_file_text{
            font-style: italic;
            font-size: small;
        }
        .attachementfile>div {
            position: relative;
            width: 48%;
            height: 50px;
            margin-right: 1%;
            display: flex;
            align-items: center;
            border: 2px solid rgb(248, 244, 244);
        }

        .attachementfile>div>p {
            margin: 0%;
            width: 90px;
            text-align: center;
            font-weight: bold;
        }

        .attachementfile>div>input {
            position: absolute;
            opacity: 0;
            width: 90px;
            left: 90px;
        }

        .attachementfile>div>img {
            position: absolute;
            width: 90px;
            height: 90%;
            left: 90px;

        }

        .reason {
            width: 80%;
            position: relative;
            left: 10%;
        }

        .reason>p {
            margin: 5px;
            font-style: italic;
        }

        .reason>textarea {
            position: relative;
            max-width: 90%;
            border: none;
            max-height: 60px;
            min-width: 90%;

            min-height: 60px;
            margin-bottom: 10px;
            overflow-y: auto;
        }

        .apply {
            position: relative;
            width: 100%;
            height: 60px;
            display: flex;
            visibility: hidden;
            transition:0.2 visibility ;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .apply>input {
            height: 40px;
            width: 100px;
            border: none;
            border-radius: 5px;
            box-shadow: 1px 2px 3px black;
            background-color: rgb(233, 161, 54);
            color: white;
            font-size: 16px;
            font-weight: bold;
            transition: all .5s;
        }

        .apply>input:hover {
            height: 50px;
            width: 110px;
            font-size: 20px;
        }
        @media screen and (min-width:850px){
            .flpform{
                grid-template-columns: 400px 400px;
            }
          .flpform >div{
          border: 2px solid white;
            margin-bottom: 10px;
            margin-top: 0px;}
        }
    </style>
</head>

<body>

    <header class="sec1">
        <div class="web_name">
            <div class="name_of_web">
                <h1>Ethio jobs</h1>
            </div>
            <div class="logo">
                <div></div>
            </div>
        </div>
        <div class="nav">

            <div class="buttons_of_link">
                <a href="index.php">home</a>
             
            </div>
        </div>

    </header>

    <!--  
        our content start
    -->
    <section class="mysec">
        <div class="forform">
            <h2>Fill your profile</h2>
            <form  method="post"  enctype = "multipart/form-data"  class="flpform"  >
                <div> <h3>Personal information</h3>
                    <div class="" id="styledmyinput">
                        <input type="text" name="firstname" id="firstname" required>
                        <span></span>
                        <label>First Name * </label>
                    </div>
                    <div class="" id="styledmyinput">
                        <input type="text" name="lastname" id="lastname" required>
                        <span></span>
                        <label>Last Name * </label>
                    </div>
                    <div class="" id="styledmyinput">
                        <input type="tel" name="phoneNumber" id="phonenumber" required>
                        <span></span>
                        <label> Phone Number * </label>
                    </div>
                    <div class="" id="styledmyinput">
                        <input type="email" name="email" id="email" required>
                        <span></span>
                        <label> Email * </label>
                    </div>
                </div>
                <div class="edustatus">
                    <h3>Educational Profile</h3>
                    <div class="selection">
                        <div> <span class="selectionspan">
                                EDUCATION LEVEL *
                            </span>
                            <select name="select" id="select" >

                                <option value="TVET_diploma"> TVET Diploma</option>
                                <option value="TVET_diploma"> Diploma</option>
                                <option value="1st degree"> 1st Degree</option>
                                <option value="2nd degree"> 2nd Degree</option>
                                <option value="Doctorate Degrees"> Doctorate Degrees</option>
                                <option value="Certeficate"> Certeficate</option>
                            </select>
                        </div>
                        <div class="role" id="styledmyinput">
                            <input type="text" class="roleinput" name="role"id="role" required>
                            <span></span>
                            <label> Your Role / Department * </label>
                        </div>


                    </div>
                    <div class="myinput" id="gpa">
                        <label> CGPA * </label>
                        <input type="number" name="cgpa" step="0.01" class="roleinput" placeholder=" CGPA " min="0" max="4" id="gpainput" require>
                    </div>
                </div>

                <div class="otherinfo">
                    <div>
                        <p> work experience</p> <input type="number" name="experienceYear" id="experienceYear" min="0"
                            required>
                    </div>
                    <div>
                        <p>Address * </p>
                        <textarea name="ADDRESS" id="ADDRESS" required></textarea>
                    </div>
                </div>
                <div>
                    <p class="attach_file_text"> please enter your id and certeficate file ( jpg, png, pdf)</p>
                    <div class="attachementfile">
                        <div>
                            <p>ID</p>
                            <img src="logo.png" alt="" class="id">
                            <input type="file" name="idphoto" id="idfile" onchange="setimage(1,this)">

                        </div>
                        <div>
                            <p>ENTER Certeficate</p>
                            <img src="logo.png" alt="" class="certify">
                            <input type="file" name="Certeficate" id="certfile" onchange="setimage(2,this)">
                        </div>
                    </div>

                    <div class="reason">
                        <p>Please state the reason for your request</p>
                        <textarea name="reason" id="myreason" cols="30" rows="10"></textarea>
                        <p><input type="checkbox" id="checkbox" onclick="showapply();" required> i agreed with policy </p>

                    </div>
                    <p class="errormsg" style="color: red;"> <?php 
                    if (isset($_POST['apply'])) {
                require("applyprocess.php");
            }
            
            ?></p>
                    <div class="apply">
                        <input type="submit" value="Apply" name="apply" >
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!--  
        our content end
    -->
    <section class="menuview">
        <div class="menu_container">
            <div class="menus">
                <a href="index.php">Home</a>
                <a href="tel:0964799523">contact us</a>
            
                <a href="index.php/#About_us">About</a>
             
            </div>

        </div>

    </section>
    <footer>
        <div class="firstdiv">
            <div>
                <h3>ethio jobs</h3>
                <div class="links">
                    <a href="">Home</a>
                    <a href="">About us</a>
                    <a href="">Contact</a>
                    <a href="">Sign up</a>
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
            <div>
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
    <script src="basic.js"></script>


    <script>

        function showapply(){
            var checkbox =document.querySelector("#checkbox") 
            var apply =document.querySelector(".apply") 
            if(checkbox.checked ){
                apply.style.visibility="visible";
            console.log(checkbox.checked)}
            else {
                apply.style.visibility="hidden";
            }
          
        }
        function checkvalidation() {
var firstname =document.querySelector("#firstname");
var lastname =document.querySelector("#lastname");
var phonenumber =document.querySelector("#phonenumber");
var email =document.querySelector("#email");
var gpa =document.querySelector("#gpainput").value;
var selectvalue = document.querySelector(".select").value;
var role =document.querySelector("#role");
var certfile =document.querySelector("#certfile");
var idfile =document.querySelector("#idfile");
var ADDRESS =document.querySelector("#ADDRESS");
var experienceYear =document.querySelector("#experienceYear");
var errormsg =document.querySelector(".errormsg");

let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
let regnum =/^0[0-9]{9}$/;
let regnum1=/^[+]251+[79][0-9]{8}$/;
let regtext=/^[a-zA-Z][a-zA-Z]+$/;
console.log(gpa)
if(Number(gpa)<1.75){
    console.log(gpa)

}
errormsg.textContent=""

 if (firstname.value=="") {
    errormsg.textContent= " You forget entering firstname name";
    
}

else if (!regtext.test(firstname.value) ) {
    errormsg.textContent= "please correct First name";
    
}
else if (lastname.value=="") {
    errormsg.textContent= " You forget entering Last name";
    
}
else if (!regtext.test(lastname.value) ) {
    errormsg.textContent= "please correct lastname name";
    
}
else if (phonenumber.value=="") {
    errormsg.textContent= " You forget entering phone number";
    
}
else if (!(regnum.test(phonenumber.value)||regnum1.test(phonenumber.value))) {
    console.log(regnum.test(phonenumber.value))
    errormsg.textContent= "PLEASE1! Enter correct phone number";
    
}
else if (email.value=="") {
   
    errormsg.textContent= " you forget entering email";
    
}
else if (!regex.test(email.value)) {
   
   errormsg.textContent= " PLEASE1! Correct your  email";
   
}
  

else if (role.value=="") {
    errormsg.textContent= " you forget entering your role";
}


else if (gpa<1.75 && selectvalue!="Certeficate") {
    if (gpa=='') {
        errormsg.textContent= " you forget Entering   CGPA  ";
    } else {
        errormsg.textContent= " Enter correct CGPA greater than 1.75  ";
    }
 
}

else if (ADDRESS.value=="") {
    errormsg.textContent= " you forget entering your address";
}



else if (idfile.value=="") {
    errormsg.textContent= " you forget entering photo of id";
}

else if (certfile.value=="") {
    errormsg.textContent= " you forget entering photo of Certeficate ";
}
else{

}


        }

        function setimage(x,input){
            if (x==1){
                if (input.files&& input.files[0]){
                    var upphoto =document.querySelector('.id');

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        upphoto.setAttribute('src',e.target.result)
                    
                        
                    
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            if (x==2){
                if (input.files&& input.files[0]){
                    var upphoto =document.querySelector('.certify');

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        upphoto.setAttribute('src',e.target.result)
                    
                    
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        }
    </script>

</body>

</html>
<?php
ob_end_flush();?>