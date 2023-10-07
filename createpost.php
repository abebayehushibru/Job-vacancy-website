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
    <title>create post</title>
    <style>
        .create {
            position: relative;
            width: 98%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgb(255, 255, 255);
        }

        .create>h1 {
            color: aliceblue;
            background: black;
            font-size: 40px;
            width: 100%;
            height: auto;
            margin-top: 5px;
            text-align: center;
        }

        .create>div {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .create>div>h2 {
            color: rgb(83, 83, 92);
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .myform {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 300px;
            background-color: rgb(255, 255, 255);
            padding: 10px;
            padding-top: 20px;

            bottom: 20px;
        }

        .myinput {
            position: relative;
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .myinput input {
            width: 90%;

            height: 50px;
            font-size: 12px;
            outline: none;
            padding-left: 10px;
            border: none;


            border-bottom-left-radius: 5px;
            border-top: none;
            padding: 0;
        }

        .myinput input:focus {
            box-shadow: inset 1px 2px 4px rgba(222, 242, 248, 0.815), 0px 1px 3px rgba(149, 223, 241, 0.74);
        }

        .myinput label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 5PX;
            font-size: 18px;
            pointer-events: none;
            color: #887979;
            transition: all .5s;
        }

        .myinput span::before {
            position: absolute;
            content: ' ';
            left: 1px;
            height: 3px;
            top: 48px;
            width: 0%;
            background-color: #2691d9;

            transition: all .5s;
        }

        .myinput input:focus~label,
        .myinput input:valid~label {
            top: 6px;
            color: #2691d9;
        }

        .myinput input:focus~span::before,
        .myinput input:valid~span::before {
            width: 90%;
        }

        .selection {
            position: relative;
            margin-bottom: 10px;

        }

        .selection>span {

            margin-right: 10px;
            margin-bottom: 10px;
            color: #3a0202;

        }

        .select {
            margin-bottom: 10px;
            outline-color: #2691d9;
            color: #238bcf;
            font-weight: bold;
            border: 2px solid#2691d9;
            ;
            border-top: none;
        }

        .selection>input {
            position: relative;
            left: 30%;
            border: none;
            text-indent: 20px;
        }

        .otherinput {
            visibility: hidden;
        }

        .selection>input:valid,
        .selection>input:focus {
            border: none;
            outline: none;
            box-shadow: inset 1px 1px 1px #70a9cf, 0px 1px 3px #2691d9;
            border-radius: 5px;

        }

        .myform>textarea {
            position: relative;

            border: 1px solid #2691d9;
            height: 100px;
            width: 9;
            padding: 5px;
            text-indent: 20px;
            outline: none;
        }

        .myform>textarea:focus {

            box-shadow: inset 1px 2px 1px #70a9cf, 0px 1px 3px #2691d9;
        }

        .toUpload {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;

            padding: 6px 0;
        }

        .toUpload img {
            position: relative;
            height: 60px;
            width: 60px;
            border-radius: 10px;
            border: 1px solid rgb(65, 63, 63);
            left: 50%;
            transform: translateX(-50%);
        }

        .toUpload input {
            height: 60px;
            width: 60px;

            border-radius: 10px;
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
            opacity: 0;
        }


        .plus {
            height: 60px;
            width: 60px;
            font-size: 500%;
            font-weight: bolder;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(255, 255, 255);
            border: 1px solid #adadad;
            border-radius: 10px;
            background: none;
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
        }

        .upload_text {
            position: absolute;
            left: 10%;
            color: rgb(39, 38, 38, 0.9);
        }

        #submit {
            position: relative;
            width: 100px;
            height: 30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 18px;
            background-color: rgb(247, 173, 13);
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            box-shadow: 1px 2px 3px rgb(247, 173, 13);

        }

        #submit:hover,
        #submit:active {
            box-shadow: 2px 2px 4px black;
        }

        .payment {
            margin: 10px;
            width: auto;
        }

        .payment>input {
            width: 100px;
            border-color: #2691d9;
        }
    </style>
</head>

<body>

    <section class="create">
        <h1>ethio jobs</h1>
        <div>
            <h2>Add job</h2>
            <form action="" method="post" class="myform"    enctype="multipart/form-data" >
                <div class="myinput">

                    <input type="text" name="title" id="title" required>
                    <span></span>
                    <label>title *</label>
                </div>
                <div class="myinput">
                    <input type="text" name="company" id="company" required>

                    <span></span>
                    <label> Company name *</label>

                </div>

                <div class="selection">
                    <span>
                        Select Catagorie * <span></span>
                    </span>
                    <select name="select" id="select" class="select" onchange="hide();">
                        <option value="Engineering"> Engineering</option>
                        <option value="Accounting"> Accounting</option>
                        <option value="Healthy"> Healthy</option>
                        <option value="Managnment"> Managnment</option>
                        <option value="Law"> Law</option>
                        <option value="Other"> Other</option>
                    </select>
                    <input type="text" class="otherinput" placeholder="other catagorie" name="other"
                        onkeyup="setselect();">
                </div>
                <div>
                    <label>Job type</label>
                    <select name="jobtype" id="jobtype" class="select">
                        <option value="fixed">Fixed</option>
                        <option value="monthly">Monthly</option>
                    </select>

                </div>
                <div class="payment">
                    payment <input type="number" step="100" name="payment" id="payment" min="100">
                </div>
                <textarea name="discription" id="discriptiontext" placeholder="discription" cols="30"
                    rows="10"></textarea>
                <div class="toUpload">

                    <img alt="" src="R.jfif" class="photo">
                    <span class="plus1">+</span>
                    <input type="file" name="photofile" id="photo" required onchange="setimage(1,this)">

                    <span class="upload_text">upload photo </span>
                </div>
                <div class="toUpload">

                    <img alt="" src="R.jfif" class="logo">
                    <span class="plus2">+</span>
                    <input type="file" name="photologo" id="photologo" required onchange="setimage(2,this)">

                    <span class="upload_text">upload logo </span>
                </div>
                <input type="submit" value="submit" id="submit" name="upload">


            </form>
            <p class="errormsg" style="color: red;"><?php 
            if (isset($_POST['upload'])) {
                require("createpostprocess.php");
            }
            
            ?></p>
        </div>
    </section>

    <script>
        function setselect() {
            var selected = document.querySelector("#select")
            var takeinput = document.querySelector(".otherinput")
            console.log(other.value);
            selected.value = other.value;

        }
        function hide() {
            var selected = document.getElementById("select")
            var takeinput = document.querySelector(".otherinput")
            if (selected.value == "Other") {
                takeinput.style.visibility = "visible";
            }
            else {
                takeinput.style.visibility = "hidden";
            }

        }

        function setimage(x, input) {
            if (x == 1) {
                if (input.files && input.files[0]) {
                    var upphoto = document.querySelector('.photo');

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        upphoto.setAttribute('src', e.target.result)
                        document.querySelector(".plus1").style.dislay = "none"


                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            if (x == 2) {
                if (input.files && input.files[0]) {
                    var upphoto = document.querySelector('.logo');

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        upphoto.setAttribute('src', e.target.result)
                        document.querySelector(".plus2").style.dislay = "none"

                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        }
    
        function checkvalidation() {
            var title = document.querySelector("#title").value;
            var company = document.querySelector("#company").value;
            var select = document.querySelector("#select").value
            var other = document.querySelector(".otherinput")
            var errormsg = document.querySelector(".errormsg")
            var discriptiontext = document.querySelector("#discriptiontext").value
            var photologo = document.querySelector("#photologo").value;
            var photo = document.querySelector("#photo").value;
            var payment = document.querySelector("#payment").value;
            var jobtype = document.querySelector("#jobtype").value;
            errormsg.textContent = "";
            if (title == "") {
                errormsg.textContent = " you forget entering title";

            }

            else if (company == "") {
                errormsg.textContent = " you forget entering company name";

            }
            else if (select == "") {
                errormsg.textContent = " you forget selecting catagories ";

            }
            else if (select == "Other") {
                if (other.value == "") {
                    errormsg.textContent = " You forget entering catagories";
                } else {
                    select = other.value;
                }


            }
            else if (discriptiontext.value == "") {
                errormsg.textContent = " you forget entering job discription";
            }
            else if (photo.value == "") {
                errormsg.textContent = " you forget entering job photo ";
            }

            else if (photologo.value == "") {
                errormsg.textContent = " you forget entering photo of logo ";
            }
console.log(errormsg.textContent)

         if (errormsg.textContent == "") {

                return false;
            }
        
            return false;

        }

    </script>
</body>

</html>