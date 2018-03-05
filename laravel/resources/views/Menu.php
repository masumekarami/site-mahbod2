<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--CSS-->
<!--    <link rel="stylesheet" href="Page1.css">-->
    <!--bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.css">-->
    <link rel="stylesheet" href="{!! HTML::asset('css/style.css') !!}">
    <script src="../../../node_modules/angular/angular.js"></script>
</head>
<style>

    body{
        margin: auto;
        background-image: url("../assets/IMG/BackgroundHomemmmmm.jpg");
        background-size: cover;
    }
    #parentAll{
        width: 100%;
        height:100%;
        margin: auto;
        z-index: 900;

    }
    .foo {
        min-height:100vh;
        color: white;
        text-transform: uppercase;
    }
    .Line{
        width:10%;
        height: 100%;
        margin: auto;
    }
    #ParentImage{
        z-index: 1000;
        position: fixed;
        top: 200px;

    }
    .LineImage{
        width:100%;
        height: 100%;
        margin: auto;
        float: left;
        z-index: 1000;
        /*width: 149px;*/
        /*margin: auto;*/
    }
    /*#ParentImage div{*/
    /*float: right;*/
    /*}*/

    /*#ParentImage div:hover{*/
    /*-moz-opacity: 0.2;*/
    /*-webkit-opacity:  0.2;*/
    /*opacity: 0.2;*/
    /*cursor: pointer;*/
    /*}*/
    #Gallery{
        float: left;
        background-color: #94f4e9
    }
    #Education{
        float: left;
        background-color: #e3f190
    }
    #Article{
        float: left;
        background-color: #8fc5f3
    }
    #AboutMe{
        float: left;
        background-color: #f4c692
    }
    #Empty-a{
        background-color: #d695f3;
        float: left;
    }
    #login{
        float: left;
        background-color: #aaf191;
    }
    #Empty-b{
        background-color: #f29e93;
        float: left;
    }
    #Empty-c{
        background-color: #8fbcf3;
        float: left;
    }
    #Empty-d{
        background-color: #f4d092;
        float: left;
    }
    #Empty-e{
        background-color: #94f4e9;
        float: left;
    }
    #Div1 {
        background-color: #94f4e9;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 10%;
        z-index: 2000;
        display: none;
    }
    #Div2 {
        background-color: #e3f190;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 10%;
        z-index: 2000;
        display: none;
    }
    #Div3 {
        background-color: #8fc5f3;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 10%;
        z-index: 2000;
        display: none;
    }
    #Div4 {
        background-color: #f4c692;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 10%;
        z-index: 2000;
        display: none;
    }
    #Div5 {
        background-color: #d695f3;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 10%;
        z-index: 2000;
        display: none;

    }
    #Div6 {
        background-color: #aaf191;
        width: 100%;
        height: 100%;
        position: fixed;
        left: 10%;
        z-index: 2000;
        display: none;
    }
    #parentAll img{
        display: none;
        height: 50%;
        width: 52%;
        position: relative;
        margin-left: -10%;
        margin-top: -10%;
    }

</style>
<body>
<div id="parentAll">
    <div id="Gallery" class="foo Line">
        <img src="../assets/IMG/LogoColor/GalleryLogo.png" class="LogoGallery"/>
    </div>
    <div id="Education" class="foo Line">
        <img src="../assets/IMG/LogoColor/EducationLogo.png" class="LogoEducation"/>
    </div>
    <div id="Article" class="foo Line">
        <img src="../assets/IMG/LogoColor/ArticleLogo.png" class="LogoArticle"/>
    </div>
    <div id="AboutMe" class="foo Line">
        <img src="../assets/IMG/LogoColor/AboutMeLogo.png" class="LogoMe"/>
    </div>
    <div id="Empty-a" class="foo Line">
    </div>
    <div id="login" class="foo Line">
    </div>
    <div id="Empty-b" class="foo Line">
    </div>
    <div id="Empty-c" class="foo Line">
    </div>
    <div id="Empty-d" class="foo Line">
    </div>
    <div id="Empty-e" class="foo Line">
    </div>
</div>
<!--.........................................yes........-->
<div id="ParentImage">
    <div>
        <img src="../assets/IMG/Gallery.png"  class="LineImage item1"/>
    </div>
    <div>
        <img src="../assets/IMG/Education.png"  class="LineImage item2"/>
    </div>
    <div>
        <img src="../assets/IMG/Article.png"  class="LineImage item3"/>
    </div>
    <div>
        <img src="../assets/IMG/AbautMe.png"  class="LineImage item4"/>
    </div>
    <div>
        <img src="../assets/IMG/SaveOrderMe.png"  class="LineImage item5"/>
    </div>
    <div>
        <img src="../assets/IMG/LogIn.png"  class="LineImage item6"/>
    </div>
    <div>
        <img src="../assets/IMG/YesOrNo.png"  class="LineImage item7"/>
    </div>
</div>
<div id="Div1" class="row col-lg-12"></div>
<div id="Div2" class="row col-lg-12"></div>
<div id="Div3" class="row col-lg-12"></div>
<div id="Div4" class="row col-lg-12"></div>
<div id="Div5" class="row col-lg-12"></div>
<div id="Div6" class="row col-lg-12"></div>
</body>

<script src="JQ/jquery-3.3.1.min.js"></script>
<script src="../../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script>
    window.sr = ScrollReveal({ reset: true });
    // Custom Settings
    sr.reveal('#Gallery', {
        origin: 'top',
        duration:1000
    });
    sr.reveal('#Education', {
        origin: 'top',
        duration: 2000
    });
    sr.reveal('#Article', {
        origin: 'top',
        duration:3000
    });
    sr.reveal('#AboutMe', {
        origin: 'top',
        duration: 4000
    });
    sr.reveal('#Empty-a', {
        origin: 'top',
        duration: 5000
    });
    sr.reveal('#login', {
        origin: 'top',
        duration: 6000
    });
    sr.reveal('#Empty-b', {
        origin: 'top',
        duration: 7000
    });
    sr.reveal('#Empty-c', {
        origin: 'top',
        duration: 8000
    });
    sr.reveal('#Empty-d', {
        origin: 'top',
        duration: 9000
    });
    sr.reveal('#Empty-e', {
        origin: 'top',
        duration: 10000
    });

    // IMG LODING
    sr.reveal('.LineImage', {
        // viewOffset: { top: 100, right: 0, bottom: 0, left: 0 },
        origin: 'bottom',
        delay: 3500,
        duration: 2000,

    });
</script>
<script>
    // HOVER BY IMG
    $('.item1').hover(function () {
        $(".LogoGallery").show("fast");
    },function () {
        $(".LogoGallery ").hide("fast");
    });
    // ..........................
    $('.item2').hover(function () {
        $(".LogoEducation").show("fast");
    },function () {
        $(".LogoEducation ").hide("fast");
    });
    // ..........................
    $('.item3').hover(function () {
        $(".LogoArticle").show("fast");
    },function () {
        $(".LogoArticle ").hide("fast");
    });
    // ..........................
    $('.item4').hover(function () {
        $(".LogoMe").show("fast");
    },function () {
        $(".LogoMe ").hide("fast");

    });
    // ..........................

</script>
<script>
    $(document).ready(function(){
        // onclick Gallery
        $(".item1").click(function(){
            $('.item1').fadeOut();
            $(".item2").fadeOut();
            $(".item3").fadeOut();
            $(".item4").fadeOut();
            $(".item5").fadeOut();
            $(".item6").fadeOut();
            $(".item7").fadeOut();
            $("#Education").fadeOut(1100);
            $("#Article").fadeOut(1400);
            $("#AboutMe").fadeOut(1600);
            $("#Empty-a").fadeOut(1800);
            $("#login").fadeOut(2000);
            $("#Empty-b").fadeOut(2100);
            $("#Empty-c").fadeOut(2400);
            $("#Empty-d").fadeOut(2600);
            $("#Empty-e").fadeOut(3000);
            $("#Div1").fadeIn(10000);
        });
        // onclick Education
        $(".item2").click(function(){
            $(".item1").fadeOut();
            $(".item2").fadeOut();
            $(".item3").fadeOut();
            $(".item4").fadeOut();
            $(".item5").fadeOut();
            $(".item6").fadeOut();
            $(".item7").fadeOut();
            $("#Gallery").fadeOut(1100);
            $("#Article").fadeOut(1400);
            $("#AboutMe").fadeOut(1600);
            $("#Empty-a").fadeOut(1800);
            $("#login").fadeOut(2000);
            $("#Empty-b").fadeOut(2100);
            $("#Empty-c").fadeOut(2400);
            $("#Empty-d").fadeOut(2600);
            $("#Empty-e").fadeOut(3000);
            $("#Div2").fadeIn(10000);
        });
        // onclick Article
        $(".item3").click(function(){
            $(".item1").fadeOut();
            $(".item2").fadeOut();
            $(".item3").fadeOut();
            $(".item4").fadeOut();
            $(".item5").fadeOut();
            $(".item6").fadeOut();
            $(".item7").fadeOut();
            $("#Gallery").fadeOut(1100);
            $("#Education").fadeOut(1400);
            $("#AboutMe").fadeOut(1600);
            $("#Empty-a").fadeOut(1800);
            $("#login").fadeOut(2000);
            $("#Empty-b").fadeOut(2100);
            $("#Empty-c").fadeOut(2400);
            $("#Empty-d").fadeOut(2600);
            $("#Empty-e").fadeOut(3000);
            $("#Div3").fadeIn(10000);
        });
        // onclick AbouteMe
        $(".item4").click(function(){
            $(".item1").fadeOut();
            $(".item2").fadeOut();
            $(".item3").fadeOut();
            $(".item4").fadeOut();
            $(".item5").fadeOut();
            $(".item6").fadeOut();
            $(".item7").fadeOut();
            $("#Gallery").fadeOut(1100);
            $("#Education").fadeOut(1400);
            $("#Article").fadeOut(1600);
            $("#Empty-a").fadeOut(1800);
            $("#login").fadeOut(2000);
            $("#Empty-b").fadeOut(2100);
            $("#Empty-c").fadeOut(2400);
            $("#Empty-d").fadeOut(2600);
            $("#Empty-e").fadeOut(3000);
            $("#Div4").fadeIn(10000);
        });
        // onclick OrderMe
        $(".item5").click(function(){
            $(".item1").fadeOut();
            $(".item2").fadeOut();
            $(".item3").fadeOut();
            $(".item4").fadeOut();
            $(".item5").fadeOut();
            $(".item6").fadeOut();
            $(".item7").fadeOut();
            $("#Gallery").fadeOut(1100);
            $("#Education").fadeOut(1400);
            $("#Article").fadeOut(1600);
            $("#AboutMe").fadeOut(1800);
            $("#login").fadeOut(2000);
            $("#Empty-b").fadeOut(2100);
            $("#Empty-c").fadeOut(2400);
            $("#Empty-d").fadeOut(2600);
            $("#Empty-e").fadeOut(3000);
            $("#Div5").fadeIn(10000);
        });
        // onclick Log in
        $(".item6").click(function(){
            $(".item1").fadeOut();
            $(".item2").fadeOut();
            $(".item3").fadeOut();
            $(".item4").fadeOut();
            $(".item5").fadeOut();
            $(".item6").fadeOut();
            $(".item7").fadeOut();
            $("#Gallery").fadeOut(1100);
            $("#Education").fadeOut(1400);
            $("#Article").fadeOut(1600);
            $("#AboutMe").fadeOut(1800);
            $("#Empty-a").fadeOut(2000);
            $("#Empty-b").fadeOut(2100);
            $("#Empty-c").fadeOut(2400);
            $("#Empty-d").fadeOut(2600);
            $("#Empty-e").fadeOut(3000);
            $("#Div6").fadeIn(10000);
        });
    });

</script>
</html>