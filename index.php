<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobvacancy.et</title>

    <style>
        body {
            margin: 0;
            padding: O;
            height: 100vh;
            width: 100%;
        }

        .sec1 {
            height: auto;
            width: 98%;
            margin: 1%;

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

        .menuBtn>div,
        .change>div {
            transition: 1s transform;
        }

        .menuBtn {
            background-color: rgb(8, 0, 0);

            top: 2%;
            height: 98%;
            left: -100%;
            width: 20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .change {
            width: 20%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .menuBtn>div {
            background-color: white;
            margin-top: 6px;
            width: 30px;
            height: 4px;
            border-radius: 3px;
        }

        .change>div:first-child {
            margin-top: 6px;
            position: relative;
            background-color: rgb(255, 255, 255);
            transform: rotate(-45deg);
            width: 20px;
            height: 4px;
            translate: 0px 10px;
            border-radius: 3px;
        }

        .change>.bar2 {
            display: none;
        }

        .change>div:last-child {
            margin-top: 6px;
            transform: rotate(45deg);
            background-color: rgb(255, 255, 255);
            translate: 0px 0px;
            height: 4px;
            width: 20px;
            border-radius: 3px;
        }

        .name_of_web {
            postion:absolute;
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

        .logo {
            display: NONE;
            top: 40%;
            position: relative;
            width: 10%;

        }

        .logo div {
            margin: 10PX;

            height: 60px;
            background-size: cover;
            width: 60px;

            border-radius: 50%;
            background-color: aliceblue;
            background-image: url('logo.png');
            background-size: cover;

        }

        .nav {
            height: 30px;
            width: 100%;
            background-color: black;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .search {
            position: relative;
            display: flex;

            justify-content: flex-end;
            right: 20px;

            width: 50%;
        }

        .search>div {
            display: flex;
            justify-content: center;
            background-color: rgb(255, 255, 255);
            padding: 2px;
            height: 20px;
            width: auto;
            border-radius: 10px;

        }

        .search>div>input {
            text-align: center;

            border: none;
            overflow: hidden;
            background-color: rgb(255, 255, 255);
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;

        }

        .search input:focus {
            border: 2px rgb(100, 92, 80) solid;
            border-right: none;
            outline: none;


        }

        .search input:focus~img {
            border: 2px rgb(77, 63, 43) solid;
            border-left: none;
            width: 18px;
        }

        .search>div>img {
            border: none;
            position: relative;
            background-color: rgb(255, 255, 255);
            left: 0;
            width: 20px;
            padding-left: 5px;
            color: white;
            font-size: bold;
            border: none;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
      

        .buttons_of_link {
           display: none;
        }
        @media screen and (min-width:850px) {
        .buttons_of_link {
            width: 50%;

            display: flex;
            justify-content: flex-end;
        }
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

        .discr_web {
            top: 10px;
            position: relative;
            height: 300px;
            width: 100%;

            background-size: 100%;
            background-color: rgba(9, 10, 1, 0.5);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .discr_web>div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .discr_web>div>h2 {
            text-decoration: underline;
            font-size: 400%;
            color: white;
        }
        .discr_web>div>a{
            text-decoration: none;
            height: 60px;
            width: 100%;
       
        }
        .discr_web>div>a>button {
            width: 100%;
            height: 60px;
            background: none;
            border: 5px orange solid;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 1s color;
            font-weight: bold;
            color: orange;
        }

        .discr_web>div>a>button:hover {
            color: green;
            border-color: green;
            transition: 1s background-color;

        }

        .sec2 {
            position: relative;
            width: 98%;
            height: auto;
            top: 2%;
            left: 1%;
            bottom: 15px;
            background: rgb(14, 12, 12);
        }

        .sec2>h2 {
            position: relative;
            top: 10px;
            text-align: center;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .container {
            overflow: hidden;
            display: grid;
            justify-content: space-around;
            grid-template-columns: auto;
            grid-gap: 10px;
            padding-right: 10px;
        }

        .items {
            position: relative;
            margin-top: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 94%;
            bottom: 10px;
            left: 2%;
            right: 2%;
            border: .5px solid rgb(247, 242, 242);
            padding: 10px;
            background-color: rgba(253, 253, 253, 0.993);
            overflow: hidden;
            box-shadow: .5px 1px 1px;
            height: 450px;
        }

        .items>.content {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 350px;


        }

        .content img {
            width: 100%;
            height: 300px;
        }

        .content p {
            position: relative;
            text-indent: 10px;
            height: auto;
            word-wrap: break-word;
            overflow-wrap: inherit;
            font-size: 16px;
            color: rgb(44, 40, 40, 0.7);
            font-style: italic;
            padding: 5px;
        }


        .botom_content {
            position: relative;
            display: flex;

            justify-content: space-around;
            width: 100%;
            top: 20px;
            height: 90px;


        }

        .do {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 70%;

            float: left;
        }

        .do>img {
            position: relative;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            margin-right: 10px;
            transition: all .2s;
        }

        .do>img:hover {
            height: 70px;
            width: 70px;
        }

        .do>p {
            color: rgb(224, 120, 22);
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            font-style: italic;
            font-weight: bold;
        }

        .apply {
            float: right;
            background: none;
            position: relative;
            top: 2%;
            height: 98%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .apply>button {
            background: none;
            height: 20px;
            border: none;
          
            text-align: center;
            border-radius: 5px;
            width: auto;
            transition: all .2s;
            border: 1px solid;
            margin-bottom: 3px;


        }
        .apply>button>a{
            text-decoration: none;
            position: relative;
            height: 20px;
        
            color: rgb(221, 159, 65);
        }

        .apply>button:hover {
            position: static;
            background-color: rgb(255, 119, 78);
           
            box-shadow: 1px 2px 3px black;
            border: none;
            font-size: large;
            height: 30px;

        }
        .apply>button>a:hover{
            font-size: large;
            background-color: rgb(255, 119, 78);
            color: aliceblue;
        }

        .sec3 {
            position: relative;
            top: 10px;
            width: 98%;
            left: 1%;
            bottom: 10px;
            background-color: rgb(39, 37, 37);

        }

        .sec3>h2 {
            position: relative;
            top: 15px;

            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;

            transform: translateX(-50%);
            width: 100px;
            left: 50%;

        }

        .catagories {

            padding: 5px;
            display: grid;
            grid-template-columns: 200px 200px 200px;
            justify-content: space-around;
            grid-gap: 5px;
        }

        .catagories>div {
            position: relative;
            background: white;

            display: flex;
            width: 100%;
            flex-direction: column;
            align-items: center;

            margin-bottom: 6px;

        }

        .catagories>div>h4::first-letter {
            text-decoration: underline;
            text-transform: uppercase;
        }

        .catagories>div>h4 {
            color: rgb(39, 38, 38, .8);
            font-size: large;
            margin-bottom: 5px;
            margin-top: 0;
        }

        .catagories>div>img {
            position: relative;
            width: 98%;
        }

        .more {
            display: flex;
            height: 40px;

            align-items: center;
        }

        .more>p {
            position: relative;
            color: rgb(43, 41, 41);
            background-color: rgb(255, 159, 81);
            height: 30px;
            font-size: 20px;
            font-weight: bold;
            width: 30px;
            margin-right: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 3px;
        }

        .more>button {
            height: 30px;
            font-size: large;
            background: none;
            color: rgb(218, 88, 88);
            border: 1px solid;
            border-radius: 5px;

        }

        .more>button:hover {
            background: rgb(253, 67, 11);
            color: aliceblue;
            border: none;
            box-shadow: 1px 1px 1px rgb(184, 94, 43);
        }

        .sec4 {
            position: relative;
            display: flex;
            justify-content: center;
            flex-direction: column;
            width: 100%;

        }

        .sec4>h2 {
            text-align: center;
            margin-bottom: 0;
        }

        .sec4>div {
            position: relative;

            padding-left: 10px;
            padding-right: 10px;
            color: rgb(0, 0, 0, 0.5);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .sec4>div>p {
            text-indent: 30px;
            border: 1px solid orange;
            padding: 10px;
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
            visibility:hidden;
            width: 95%;
            left: 1%;
            background: rgb(0, 0, 0, 0.6);
            display: block;
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



        .job_with_price {
            position: relative;
            height: 400px;
            width: 100%;
            left: 2%;
            margin-bottom: 20px;
            background: rgb(204, 130, 33);
        }

        .jbContainer {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgb(172, 170, 170);

        }

        .job_div {
            position: relative;
            width: 350px;
            height: 90%;

            overflow: hidden;
            display: flex;
            align-items: center;

            border-radius: 10px;
            padding: 1px;

        }

        .job_div>div {
            position: relative;
            display: flex;
            display: flex;
            align-items: center;
            transition: 1s left;
            left: 0;

        }

        .job_div>div>div {}

        .jobitems {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;

        }

        .btnDiv {
            position: relative;
            width: 15%;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .btnDiv>span {
            position: relative;
            height: 80px;
            width: 80px;
            overflow: hidden;
            border-radius: 5px;
            opacity: 0.5;
            margin: 5px;

        }

        .btnDiv>span:hover {
            background-color: rgb(0, 0, 0, 0.1);
        }

        .btnDiv>span:active {
            background-color: rgb(0, 0, 0, 0.3);
            box-shadow: 1px 2px 2px rgb(0, 0, 0);
        }

        .btnDiv:last-child>span {
            background-image: url(next.png);
            background-size: cover;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center;
        }

        .btnDiv:first-child>span {
            background-image: url(next.png);
            background-size: cover;
            background-repeat: no-repeat;
            transform: rotate(180deg);
            background-position: center;
        }

        #no_active {
            height: 250px;
            width: 95px;

            background-color: rgb(180, 174, 166);
            border: .5px solid rgb(231, 227, 227);
            transition: all .5s ease-in-out;
            opacity: 0.5;

        }

        #active {

            height: 300px;
            width: 120px;
            margin-right: 5px;
            margin-left: 5px;
            background-color: rgb(255, 255, 255);
            border: 3px solid rgb(122, 93, 50);
            transition: all .5s ease-in-out;



        }

        .jobitems>h2 {
            position: relative;
            margin: 0%;
            margin-bottom: 5px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 120%;
            color: rgb(0, 0, 0, 0.8);
            bottom: 0%;

        }

        .jobitems>h5 {
            margin: 1px;
            color: rgb(0, 0, 0, 0.6);
        }

        .jobitems>h1 {
            margin: 10px;
            color: rgb(236, 137, 15);
        }

        .jobitems>p {

            margin: 0;
            width: 150px;
            height: 160px;
            font-size: 11px;
            text-indent: 30px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: oblique;

            padding: 15px;
            margin-bottom: 10px;
        }


        #active button {
            display: block;
            position: relative;
            bottom: 5px;
            height: 30px;
            border: 1px rgb(0, 0, 0) solid;
            border-radius: 5px;
            background: black;
            color: rgb(255, 255, 255);

        }
        #active button>a{
            height: 30px;
            background:none ;
            text-decoration: none;
            color: rgb(243, 235, 235);

        }
        #active button:hover {
            background-color: rgb(247, 168, 0);
      
            font-size: large;
            border: none;
        }

        #no_active button {
            visibility: hidden;
        }




        @media screen and (min-width:300px) {
            .catagories {
                grid-template-columns: auto;

            }

            .job_div {
                width: 350px;
            }

            #active {
                width: 140px;
            }

            #no_active {
                width: 90px;
            }

            #active>p {
                width: 130px;
                padding: 5px;
                font-size: 11px;
            }

            #no_active>p {
                width: 130px;
                padding: 5px;
                font-size: 8px;
            }

        }

        @media screen and (min-width:550px) {
            .catagories {
                grid-template-columns: auto auto;
            }

            .container {

                grid-template-columns: auto;
            }

            .job_div {
                width: 500px;
            }

            #active {
                width: 200px;
            }

            #no_active {
                width: 140px;
            }

            #active>p {
                width: 180px;
                padding: 5px;
                font-size: 10px;
            }

        }



        @media screen and (min-width:650px) {
            .catagories {
                grid-template-columns: auto auto auto auto;
            }

            .container {

                grid-template-columns: auto auto;
            }

            .logo {
                display: none;
            }


        }

        @media screen and (min-width:850px) {


            .buttons_of_link>div {
                display: block;
            }

            .catagories {
                grid-template-columns: auto auto auto auto auto;
            }

            .job_div {
                width: 685px;
            }

            #active {
                width: 295px;
            }

            #no_active {
                width: 190px;
            }

            #active>p {
                width: 250px;
                padding: 5px;
                font-size: 13px;
            }

            .container {

                grid-template-columns: auto auto auto;
            }

            .menuview {
                display: none;
            }

            .menuBtn {
                display: none;
            }

            .logo {
                display: block;
            }

        }

        .serachsec {
            position: relative;
            width: 100%;
            max-height: 500px;
            margin-top: 1%;

            overflow: hidden;
        }

        .serachsec>div {
            position: relative;
            height: 100%;
            width: 98%;
            padding: 1%;
            display: flex;
            flex-direction: column;

        }

        .serachsec>div>div {
            width: 100%;
        }

        .serachsec>div>div>div:hover {
            background-color: rgb(231, 231, 231);
        }

        .srcresult {
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
            box-shadow: 1px 2px .5px;
            margin-bottom: 10px;

        }

        .srcresult>p {
            font-style: italic;
            font-size: small;
            margin: 0%
        }

        .containersrc {
            position: relative;
            max-height: 470px;
            overflow-y: auto;
            width: 100%;
            display:none;
        }

        .containersrc>div {
            position: relative;
            left: 1px;
            height: 130px;
            width: 98%;
            display: flex;
            margin-bottom: 10px;
            box-shadow: 1px 1px 2px black;

        }

        .containersrc>div>div:first-child {
            height: 120px;
            width: 20%;


        }

        .containersrc>div>div>img {
            position: relative;
            height: 100px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: .5s height;
        }

        .containersrc>div>div>img:hover {
            height: 110px;
        }

        .descriptionitems {
            position: relative;
            width: 65%;

            margin: 5px;
            border-left: 2px solid black;

        }

        .descriptionitems h3 {
            margin: 0;
            height: 30px;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT',
                Calibri, 'Trebuchet MS', sans-serif;

        }

        .descriptionitems p {
            margin: 0px;

        }

        .textcontent {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-style: oblique;
            color: rgb(126, 117, 106);
            font-size: smaller;
            height: 50px;
            padding-left: 5px;
            overflow: hidden;
            text-indent: 30px;

        }

        .typeofjob {
            text-align: center;
            color: rgb(231, 109, 15);

        }

        .containersrc>div>div:last-child {
            margin: 10px;
            width: 15%;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-left: 2px solid black;


        }

        .containersrc>div>div:last-child h2 {
            margin: 10px;
            color: rgb(255, 166, 0);
        }

        .containersrc>div>div:last-child button {
            height: 40px;
            width: 80px;
            border-color: chocolate;
            font-size: larger;

            border-radius: 10px;
            box-shadow: 1px 1px 1px;
        }

        .containersrc>div>div:last-child button:hover {
            background-color: rgb(173, 77, 8);
            color: white;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <header class="sec1">
        <div class="web_name">
            <div class="menuBtn" id="menuBtn" onclick="viewed();">
                <div></div>
                <div class="bar2"></div>
                <div></div>
            </div>
            <div class="logo">
                <div></div>
            </div>
            <div class="name_of_web">
                <h1>Ethio jobs</h1>
            </div>

        </div>
        <div class="nav">
            <div class="search">
                <div>
                    <input type="text" class="" placeholder="search" id="srcinput" onkeyup="search();">
                    <img class="serachbtN" src="search0.png">
                </div>
            </div>
            <div class="buttons_of_link">
                <a href="index.html">home</a>
                <a href="#about_us">about</a>
                <?php

                if (isset($_SESSION["userid"])) {
                    echo "<div>
                    <a href=\"createpost.php\">Add Job</a>
                    <a href=\"displayJob.php\">Your jobs</a>
                </div>";
if ($_SESSION["usertype"]=="creator") {
    echo "
                    <a href=\"addadmin.php\">Add Admin</a>
                    <a href=\"deleteadmin.php\">Delete Admin</a>";
            
}
echo"
                <a href=\"logout.php\">log out</a>";

                } 
                else {
                    echo " <a href=\"signIn.php\">sign in</a>";
                }
                
                ?>

            </div>
        </div>

        <section class="serachsec">
            <div>
                <div class="srcresult">
                    <p>searh result is 20</p>

                </div>
                <div class="containersrc">
                 <?php 
                 include("search.php");
                 ?>

                </div>
            </div>
        </section>
        <div class="discr_web">

            <div>
                <h2>welcome</h2>
                <?php

                if (empty($_SESSION["userid"])) {
                    echo "<a href=\"signin.php\"><button class=\"sign\"> sign in</button></a>
    ";
                }
    ?>
            </div>
        </div>
    </header>

    <section class="sec2">
        <h2 class="recent">Most recent Jobs</h2>
        <div class="container">
<?php

include("mostjob.php");
?>

        </div>

    </section>
    <section class="sec3">
        <h2>All jobs</h2>
        <div class="catagories">
            <div>
                <h4 class="cataname">engineering</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+5</p>
                    <button class="morebtn">more</button>

                </div>
            </div>

            <div>
                <h4 class="cataname">Accounting</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+8</p>
                    <button class="morebtn">more</button>
                </div>
            </div>
            <div>
                <h4 class="cataname">law</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+5</p>
                    <button class="morebtn">more</button>

                </div>
            </div>

            <div>
                <h4 class="cataname">healthy</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+8</p>
                    <button class="morebtn">more</button>
                </div>
            </div>
            <div>
                <h4 class="cataname">teaching</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+5</p>
                    <button class="morebtn">more</button>

                </div>
            </div>

            <div>
                <h4 class="cataname">managnment</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+8</p>
                    <button class="morebtn">more</button>
                </div>
            </div>
            <div>
                <h4 class="cataname">managnment</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+8</p>
                    <button class="morebtn">more</button>
                </div>
            </div>
            <div>
                <h4 class="cataname">managnment</h4>
                <img src="dw.jpg" alt="cat1">
                <div class="more">
                    <p class="num">+8</p>
                    <button class="morebtn">more</button>
                </div>
            </div>




        </div>
    </section>

    <section class="sec4" id="about_us">

        <h2>ABOUT US</h2>

        <div>
            <p>Your search for Easy threat detection incident management platform vacancies ends here. Receptix.de is a
                global job marketplace that has created a tangible and seamless bridge between job aspirants and
                potential employment opportunities. We offer millions of jobs in destinations across the globe to make
                your job hunt as seamless as possible with our world-class programmatic technology. We believe that
                great talent has no regional boundaries and with the worldwide shift towards remote working, has emerged
                as a preferred destination to look for remote as well as on-site opportunities in a single-point access
                with customised job recommendations to match your career interests.
                So if you're looking for a job, be it part-time or full-time, on-site or work-from-home - Receptix.de
                has got you covered!</p>
        </div>

    </section>
    <section class="job_with_price">
        <div class="jbContainer">
            <div class="btnDiv" onclick="scrolljobs(1);"><span></span></div>
            <div class="job_div">
                <div id="moveDIV">
                  <?php 
                  
                  include("scrolltag.php");
                  ?>
                </div>

            </div>
            <div class="btnDiv" onclick="scrolljobs(2);"><span></span></div>

        </div>

    </section>
    <footer>
        <div class="firstdiv">
            <div>
                <h3>ethio jobs</h3>
                <div class="links">
                    <a href="">Back To Top</a>
                    <a href="#about_us">About us</a>
                    <a href="tel:0948251946">Contact</a>
                
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
    <section class="menuview">
        <div class="menu_container">
            <div class="menus">
                <a href="index.php">Home</a>
                <a href="#about_us">About</a>    
                 <?php

                if (isset($_SESSION["userid"])) {
                    echo "
                    <a href=\"createpost.php\">Add Job</a>
                    <a href=\"displayJob.php\">Your jobs</a>";
                    if ($_SESSION["usertype"]=="creator") {
                        echo "
                                        <a href=\"addadmin.php\">Add Admin</a>
                                        <a href=\"deleteadmin.php\">Delete Admin</a>";
                                
                    }
               
               echo "<a href=\"logout.php\">log out</a>";

                } else {
                    echo " <a href=\"signIn.php\">sign in</a>";
                }
                ?>

            </div>

        </div>

    </section>


    <script>
        var x = 0;
        var menubtn = document.getElementById("menuBtn");
        function viewed() {
            console.log("heloo")
            if (x == 0) {
                menubtn.classList.remove("menuBtn");
                menubtn.classList.add("change");
                document.querySelector(".menuview").style.visibility = "visible";
                document.querySelector(".menu_container").style.transform = "translate(0%)";
                x = 1;
            } else {
                menubtn.classList.remove("change");
                menubtn.classList.add("menuBtn");
                document.querySelector(".menuview").style.visibility = "hidden";
                document.querySelector(".menu_container").style.transform = "translate(-100%)";
                x = 0;
            }

        }

        function scrolljobs(x) {
            var array = new Array
            var jobdiv = document.querySelector(".job_div");
            var movediv = document.getElementById('moveDIV');
            var jobitemsarray = document.querySelectorAll(".jobitems");
            const activediv = document.getElementById("no_active");
            const divsArr = Array.from(jobitemsarray)
            for (i = 0; i < divsArr.length; i++) {
                if (divsArr[i].getAttribute('id') == "active") {
                    divsArr[i].setAttribute('id', "no_active")
                    if (x == 1) {
                        if (i == 0) {
                            divsArr[divsArr.length - 1].setAttribute('id', "active");
                            movediv.style.left = -((divsArr.length - 3) * activediv.clientWidth + i * 2 + 5) + "px";
                        }
                        else {
                            divsArr[i - 1].setAttribute('id', "active");
                            if (i - 1 == 0) {
                                movediv.style.left = "0px";
                            }
                            else
                                movediv.style.left = -((i - 2) * activediv.clientWidth + i * 2) + "px";
                        }
                    }

                    else if (x == 2) {
                        if (i == divsArr.length - 1) {
                            divsArr[0].setAttribute('id', "active");
                            movediv.style.left = "0px";

                        }
                        else {
                            divsArr[i + 1].setAttribute('id', "active");
                            if (i + 1 == divsArr.length - 1) {
                                movediv.style.left = -((divsArr.length - 3) * activediv.clientWidth + i * 2 + 5) + "px";

                            } else {
                                movediv.style.left = -(i * activediv.clientWidth + i * 2) + "px";

                            }
                        }

                    }
                    return;

                }
            }
        }

        var serachsec = document.querySelector(".serachsec")
        var srcinput = document.querySelector("#srcinput").value;
        if (srcinput.length == 0) {
            serachsec.style.display = "none"
        }
        function search() {

            var containersrc = document.querySelector(".containersrc");
            var allsrcitemsdiv = document.querySelectorAll(".srcitems")
            // const allcontainersrcdiv = allsrcitemsdiv.querySelectorAll(".srcitems")
            var srcinput = document.querySelector("#srcinput").value;
            var srcresult = document.querySelector(".srcresult");
            srcinput = srcinput.toLowerCase();
            if (srcinput.length == 0) {
                serachsec.style.display = "none"
            }
            else {
                serachsec.style.display = ""
                let totalserc = 0;
                for (let i = 0; i < allsrcitemsdiv.length; i++) {
                    var h2content = allsrcitemsdiv[i].querySelectorAll('div')[1].querySelector('h3').innerHTML.toLowerCase();
                    var p2content = allsrcitemsdiv[i].querySelectorAll('div')[1].querySelectorAll('p')[0].innerHTML.toLowerCase();
                    console.log()
                    if (h2content.includes(srcinput) || p2content.includes(srcinput)) {
                        allsrcitemsdiv[i].style.display = "";
                        totalserc = totalserc + 1;
                    }
                    else {
                        allsrcitemsdiv[i].style.display = "none";
                    }
                    srcresult.style.display = ""
                    srcresult.innerHTML = "<p> search result is : " + totalserc + "</p>";

                }

            }
        }



        function setsession(postid) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(xhttp.responseText)
                    // Typical action to be performed when the document is ready:
                    //document.getElementsByTagName("body").innerHTML = xhttp.responseText;
                }
            };
            xhttp.open("POST", "setpostsession.php?postno=" + postid, true);
            xhttp.send();
        }

    </script>
</body>

</html>