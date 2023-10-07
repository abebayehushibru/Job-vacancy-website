<?php
ob_start();

?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>sign in</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            
        }
        header{
            position: relative;
            width: 98%;
            height:30%;
            left: 1%;
            background-color: rgb(3, 3, 0);
            height: auto;
}header>div{
    display: flex;
  

}
header>div>div:first-child{
    width: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: aliceblue;
    font-size: 26px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
header>div>div:last-child{
    width: 30%;
    display: flex;
    align-items: center;
    justify-content: center;
}
header>div>div>img{
    height: 80px;
    width: 80px;
    border-radius: 40px;
}
.sec_signin{
    position: relative;
    margin-bottom: 30px;
    width: 100%;
}
.sec_signin>.container{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.container>form{
    margin-top: 2%;
    width: 50%;
    background-color: rgb(255, 255, 255);
    border-radius: 4px;
    border: 1px rgb(0, 0, 0) solid;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 10px;
}
form>h2{
    font-size:30px;
   font-family: Arial, Helvetica, sans-serif;


}form>h2::first-letter{
    text-transform: uppercase;
}
form>div>input{
    margin:5px;
    height: 30px;

    border-radius: 4px;
    border: 1px rgb(0, 0, 0) solid;
}

form>div>input:focus{
    outline: none;
}
   form>div>button{
height: 30px;
background-color: rgb(0, 0, 0);
color: white;
font-weight: bold;
border: none;
border-radius: 5px;
box-shadow: 1px 1px 2px blue;
   }
   form>div>button:hover{
    height: 30px;
    font-size: 18px;
   } 
   .forget{
    width: 100%;
    padding-left: 30px;
   }
.forget>p{
   
    font-style: italic;
    font-weight: bolder;
    left: 0%;
    float: left;
}   form >div>p>a{
    text-decoration: none;
    color: rgb(98, 180, 4);
}
form>button{
    background-color: rgb(83, 161, 6);
    border: none;
    border-radius: 4px;
    height: 30px;
    color: white;

}
form>button>a{
    text-decoration: none;
    color: white;
    font-size: 18px;

}

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
    <script type="text/javascript">
        
    </script>
</head>

<body>
    <header>
        <div>
            <div>
                <h2>Ethio jobs</h2>
            </div>
            <div>
                <img src="logo.png" alt="logo">
            </div>
        </div>
    </header>
    <section class="sec_signin">
        <div class="container">
            <form action="" class="signin" method="post">
                <h2>sign in</h2>

                <span style="color:red;font-weight:bold">

                <?php
                if (isset($_POST['login'])) {
                    require("loginprocess.php");
                }
                ?>
            </span>
                <div>
                    <input type="TEL" name="phoneNumber" id="" placeholder="phone number" class="phonenumber">
                    <span></span>
                </div>
                <div>
                    <input type="password" placeholder="password " class="phonenumber"name="password" id="">
                    <span></span>
                </div>
           <div> <button class="submit" name="login"> Log in</button></div>
                <div class="forget">
                <p class="forget">
                    <a href="forget.php">
                    forget password</a></p>
                </div>

                </div>
            </form>
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
</body>

</html>
<?php
ob_end_flush();
?>