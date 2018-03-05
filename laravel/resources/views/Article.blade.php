<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <script src="<?php \Illuminate\Support\Facades\URL::to('../../../js/JQ/jquery.min.js'); ?>"></script>
    <script defer src="<?php \Illuminate\Support\Facades\URL::to('../../../js/all.js'); ?>"></script>
<!--    <link rel="stylesheet" type="text/css" href="css/Articles.css">-->
    <style>
        body {
            margin: 0 auto;
        }

        * {
            box-sizing: border-box;
        }

        .BlockOne{
            background-color: #f3c893;
            width: 10%;
            height: 100vh;
            position: absolute;
            left: 0;
            top: 0;
        }

        .BlockTwo{
            background-color: #fcdcb6;
            width: 45%;
            height: 100vh;
            position: absolute;
            left: 137px;
            top: 0;
        }

        .BlockThree{
            background-color: #f3c893;
            width: 45%;
            height: 100vh;
            position: absolute;
            right: 0;
            top: 0;
        }

        .MyVideo {
            width: 80%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 30%;
        }

        h3{
            color: #a3835c;
            display: flex;
            position: absolute;
            bottom: 0;
            left: 30px;
            align-items: center;
            justify-content: center;
        }

        h4{
            color: #a3835c;
            text-align: center;
            font-size: 20px;
        }

        div p{
            padding: 30px;
            font-size: 12px;
        }

        .logo{
            position: absolute;
            left: 90px;
            top: 0;
            width: 20%;
        }

        .filter{
            text-align: center;
            list-style-type: none;
            position: absolute;
            top: 200px;
            right: 40px;
            cursor:pointer;
        }

        .sidemenu{
            font-size:25px;
            cursor:pointer;
            color: #a3835c;
        }

        .AboutMeContent{
            text-align: right;
            padding: 20%;
            margin-top: 10%;
        }

        .FilterMenu{
            margin: 150% 35%;
            text-align: center;
        }

        a{
            text-decoration: none;
            color: #000;
            cursor: pointer;
        }

        .SideBar{
            border-radius:100%;
            width: 5px;
            height: 5px;
            background-color: #aab860;
            margin: 5px 10px;
        }

        img{
            width: 25%;
            display: block;
            margin-left: auto;
            margin-right: 15%;
            margin-top: 20%;
        }

        .article{
            position: relative;
            top: 50px;
            left: 50px;
            font-size: 16px;
        }

        .close {
            position: absolute;
            right: 5%;
            bottom: 10%;
            width: 50%;
            background-color: #a3835c;
        }
        .close:before, .close:after {
            position: absolute;
            left: 15px;
            content: ' ';
            height: 40px;
            width: 4px;
            background-color: #a3835c;
        }
        .close:before {
            transform: rotate(45deg);
        }
        .close:after {
            transform: rotate(-45deg);
        }


        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fcdcb6;
            overflow-x: hidden;
            transition: 0.5s;
            /*padding-top: 60px;*/
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 15px;
            color: #000;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
            color: #a3835c;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }
    </style>
</head>
<body>
<div>

    <div class="BlockOne" id="BlockOne">

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="filter">
                <li><a>size</a></li>
                <li><a>name</a></li>
                <li><a>date</a></li>
                <li><a>tag</a></li>
            </ul>
        </div>

        <div id="main">
            <span class="sidemenu" onclick="openNav()"><i class="fas fa-ellipsis-v"></i></span>
        </div>



        <a href="#">
            <img src="<?php URL::to('img/arm-mahbod.article.png'); ?>" class="logo"/>
        </a>
        <h3>Articles</h3>
    </div>

    <div class="BlockTwo" id="BlockTwo">
        @foreach($article as $articles)
        <div class="article">
            <a href="#"><i class="far fa-file-alt"></i>  {{ $articles->title }}</a>
        </div>
        @endforeach
        <a href="#" class="close"></a>
    </div>

    <div class="BlockThree" id="BlockThree">
        <div>
            <h4>Articles's Name</h4>
            <p>Articles's Text</p>
        </div>
    </div>

</div>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "10%";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("BlockOne").style.transition = "0.5s";
        document.getElementById("BlockOne").style.position = "absolute";
        document.getElementById("BlockOne").style.left = "137px";


        document.getElementById("BlockTwo").style.width = "40%";
        document.getElementById("BlockTwo").style.transition = "0.5s";
        document.getElementById("BlockTwo").style.position = "absolute";
        document.getElementById("BlockTwo").style.left = "274px";

        document.getElementById("BlockThree").style.transition = "0.5s";
        document.getElementById("BlockThree").style.width = "40%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.getElementById("BlockOne").style.transition = "0.5s";
        document.getElementById("BlockOne").style.position = "absolute";
        document.getElementById("BlockOne").style.left = "0";

        document.getElementById("BlockTwo").style.width = "45%";
        document.getElementById("BlockTwo").style.transition = "0.5s";
        document.getElementById("BlockTwo").style.position = "absolute";
        document.getElementById("BlockTwo").style.left = "137px";

        document.getElementById("BlockThree").style.width = "45%";
    }
</script>

</body>
</html>