<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eggs Contest</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src='./dist/dropzone.js'>

    </script>
    <link rel='stylesheet' href='./dist/dropzone.css'>


    <style>
        @import url('https://fonts.googleapis.com/earlyaccess/notosanstc.css');
        * {
            font-family: 'Noto Sans TC', sans-serif !important;
        }

        body {}

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .btn-file {
            position: relative;
            overflow: hidden;
        }

        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

        #img-upload {
            width: 20%;
            margin-top: 30px;
        }
    </style>

    <script>
        $().ready(function(){
            
            $(document).on('change', '.btn-file :file', function() {
		    var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
        });
    </script>


    <style>
        @import url('https://fonts.googleapis.com/earlyaccess/notosanstc.css');
        @import url('https://fonts.googleapis.com/earlyaccess/notosanssc.css');
        body {
    
            font-family: "Noto Sans TC";
        }
        .thankyou{ text-align: center; font-size: 5em; color: white; font-weight: bold; margin-top: 50px; margin-bottom:50px; }
        .btnWord {
            font-size: 1.6em;
        }
    
        @media (min-width:1200px) {
            .secondLine {
                padding-left: 50px;
            }
            .navbar {
                height: 120px;
                background-color: rgb(251, 187, 39);
            }
            .myHead {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
    
            .links a {
                font-weight: bold;
                line-height: 120px;
                visibility: visible;
                border-radius: 10px;
                border: 2px solid rgb(251, 187, 39);
                color: black;
                padding: 10px 20px;
                margin-left: 30px;
                text-decoration: none;
                font-size: 18px;
    
    
            }
            .links a:hover {
                border-color: white;
            }
    
            .banner {
                background-color: rgb(251, 187, 39);
                margin-top: 120px;
                min-height: 700px;
            }
            .eggHeader {
    
                font-weight: bold;
                font-size: 5em;
                color: white;
                /* margin-left: -15px; */
            }
            .eggDetails {
                font-size: 1.6em;
                margin-top: 40px;
                margin-left: 50px;
            }
    
            .headerList {
                margin-top: 20px;
            }
    
            .left {
                /* padding-left: 100px; */
            }
    
            #slideshow {
                margin: 0 auto;
                /*设置在页面水平居中*/
                /*overflow: hidden;*/
                position: relative;
            }
            #slideshow img {
                width: 100%;
                position: absolute;
                /*图片采取绝对定位，均位于左上角，重叠在一起*/
                top: 0;
                left: 5;
                opacity: 0;
                /*初始不透明度为0，图片都看不见*/
                transition: opacity 1s linear;
                /*--重点--定义一个关于透明度的transition*/
            }
            #slideshow img.active {
                opacity: 1;
                /*有active类的图片不透明度为1，即显示图片*/
            }
    
            .title {
                margin-bottom: 60px;
            }
            .title_header {
                font-size: 42px;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;
    
            }
            .title_subheader {
                font-size: 1.6em;
                margin-bottom: 30px;
    
            }
    
            .uploadDetails {
                font-size: 1.6em;
                margin-top: 30px;
            }
    
    
            label {
                font-size: 1.6em;
                font-weight: bolder;
            }
            .box__dragndrop,
            .box__uploading,
            .box__success,
            .box__error {
                display: none;
            }
    
            .myBtn {
                background-color: #fbbc27;
                border: none;
                color: white;
                font-weight: bold;
                padding: 10px 20px;
                margin-top: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 25px;
            }
            .footer_link {
                margin-top: 70px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 14px;
                list-style: none;
                color: black;
            }
            .footer_link a {
                color: black;
                padding: 0px 20px;
    
            }
    
            .footer_link a:hover {}
            .copyright {
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 12px;
                list-style: none;
                color: black;
            }
    
            #buttonid {
                border: 2px solid rgba(0, 0, 0, 0.3);
                border-radius: 25px;
                height: 200px;
                font-size: 3em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;
    
            }
    
            #checkRead {
                color: black;
                cursor: pointer;
            }
        }
    
        @media (min-width:1000px) and (max-width:1200px) {
            .secondLine {
                padding-left: 40px;
            }
            .navbar {
                height: 120px;
                background-color: rgb(251, 187, 39);
            }
            .myHead {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
    
            .links a {
                font-weight: bold;
                line-height: 120px;
                visibility: visible;
                border-radius: 10px;
                border: 2px solid rgb(251, 187, 39);
                color: black;
                padding: 10px 20px;
                margin-left: 30px;
                text-decoration: none;
                font-size: 18px;
    
    
            }
            .links a:hover {
                border-color: white;
            }
    
            .banner {
                background-color: rgb(251, 187, 39);
                margin-top: 120px;
                min-height: 600px;
            }
            .eggHeader {
                font-weight: bold;
                font-size: 4em;
                color: white;
    
    
            }
            .eggDetails {
                font-size: 1.6em;
                margin-top: 40px;
                margin-left: 40px;
            }
    
            .headerList {
                margin-top: 20px;
            }
    
            .left {
                /* padding-left: 50px; */
            }
    
            #slideshow {
                margin: 0 auto;
                /*设置在页面水平居中*/
                /*overflow: hidden;*/
                position: relative;
            }
            #slideshow img {
                width: 100%;
                position: absolute;
                /*图片采取绝对定位，均位于左上角，重叠在一起*/
                top: 0;
                left: 5;
                opacity: 0;
                /*初始不透明度为0，图片都看不见*/
                transition: opacity 1s linear;
                /*--重点--定义一个关于透明度的transition*/
            }
            #slideshow img.active {
                opacity: 1;
                /*有active类的图片不透明度为1，即显示图片*/
            }
    
            .title {
                margin-bottom: 60px;
            }
            .title_header {
                font-size: 3em;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;
    
            }
            .title_subheader {
                font-size: 1.6em;
                margin-bottom: 30px;
    
            }
    
            .uploadDetails {
                font-size: 1.6em;
                margin-top: 30px;
            }
    
    
            label {
                font-size: 1.6em;
                font-weight: bolder;
            }
            .box__dragndrop,
            .box__uploading,
            .box__success,
            .box__error {
                display: none;
            }
    
            .myBtn {
                background-color: #fbbc27;
                border: none;
                color: white;
                font-weight: bold;
                padding: 10px 20px;
                margin-top: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 25px;
            }
            .footer_link {
                margin-top: 70px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 14px;
                list-style: none;
                color: black;
            }
            .footer_link a {
                color: black;
                padding: 0px 20px;
    
            }
    
            .footer_link a:hover {}
            .copyright {
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 12px;
                list-style: none;
                color: black;
            }
    
            #buttonid {
                border: 2px solid rgba(0, 0, 0, 0.3);
                border-radius: 25px;
                height: 200px;
                font-size: 3em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;
    
            }
    
            #checkRead {
                color: black;
                cursor: pointer;
            }
        }
    
    
        @media (min-width:800px) and (max-width:1000px) {
            .secondLine {
                padding-left: 30px;
            }
            .navbar {
                height: 120px;
                background-color: rgb(251, 187, 39);
            }
            .myHead {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
    
            .links a {
                font-weight: bold;
                line-height: 120px;
                visibility: visible;
                border-radius: 10px;
                border: 2px solid rgb(251, 187, 39);
                color: black;
                padding: 10px 20px;
                margin-left: 30px;
                text-decoration: none;
                font-size: 18px;
    
    
            }
            .links a:hover {
                border-color: white;
            }
    
            .banner {
                background-color: rgb(251, 187, 39);
                margin-top: 120px;
                min-height: 600px;
            }
            .eggHeader {
                font-weight: bold;
                font-size: 3em;
                color: white;
    
            }
            .eggDetails {
                font-size: 1.1em;
                margin-top: 30px;
                margin-left: 30px;
            }
            .headerList {
                margin-top: 20px;
            }
            .left {}
    
            #slideshow {
                margin: 0 auto;
                /*设置在页面水平居中*/
                /*overflow: hidden;*/
                position: relative;
            }
            #slideshow img {
                width: 100%;
                position: absolute;
                /*图片采取绝对定位，均位于左上角，重叠在一起*/
                top: 0;
                left: 5;
                opacity: 0;
                /*初始不透明度为0，图片都看不见*/
                transition: opacity 1s linear;
                /*--重点--定义一个关于透明度的transition*/
            }
            #slideshow img.active {
                opacity: 1;
                /*有active类的图片不透明度为1，即显示图片*/
            }
    
            .title {
                margin-bottom: 60px;
            }
            .title_header {
                font-size: 2em;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;
    
            }
            .title_subheader {
                font-size: 1.1em;
                margin-bottom: 30px;
    
            }
    
            .uploadDetails {
                font-size: 1.1em;
                margin-top: 30px;
            }
    
    
            label {
                font-size: 1.1em;
                font-weight: bolder;
            }
            .box__dragndrop,
            .box__uploading,
            .box__success,
            .box__error {
                display: none;
            }
    
            .myBtn {
                background-color: #fbbc27;
                border: none;
                color: white;
                font-weight: bold;
                padding: 10px 20px;
                margin-top: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 25px;
            }
            .footer_link {
                margin-top: 70px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 14px;
                list-style: none;
                color: black;
            }
            .footer_link a {
                color: black;
                padding: 0px 20px;
    
            }
    
            .footer_link a:hover {}
            .copyright {
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 12px;
                list-style: none;
                color: black;
            }
    
            #buttonid {
                border: 2px solid rgba(0, 0, 0, 0.3);
                border-radius: 25px;
                height: 200px;
                font-size: 3em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;
    
            }
    
            #checkRead {
                color: black;
                cursor: pointer;
            }
        }
    
        @media (max-width:800px) {
            .thankyou{ text-align: center; font-size: 2.8em; color: white; font-weight: bold; margin-top: 50px; margin-bottom:30px; }
            .secondLine {}
            .btnWord {
                font-size: 1.1em;
            }
            li {
                list-style: none;
            }
            .navbar {
                height: 120px;
                background-color: rgb(251, 187, 39);
            }
            .myHead {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
    
            .links a {
                font-weight: bold;
                line-height: 120px;
                visibility: visible;
                border-radius: 10px;
                border: 2px solid rgb(251, 187, 39);
                color: black;
                padding: 10px 5px;
                text-decoration: none;
                font-size: 12px;
    
    
            }
            .links a:hover {
                border-color: white;
            }
    
            .banner {
                background-color: rgb(251, 187, 39);
                margin-top: 120px;
                min-height: 700px;
            }
            .eggHeader {
                font-weight: bold;
                font-size: 2.6em;
                color: white;
    
            }
            .eggDetails {
                font-size: 1em;
                margin-top: 20px;
                margin-bottom: 30px;
    
            }
            .headerList {
                margin-top: 10px;
                text-align: left;
                margin-left: 30px;
            }
    
            .left {
                text-align: center;
            }
    
            #slideshow {
                margin: 0 auto;
                /*设置在页面水平居中*/
                /*overflow: hidden;*/
                position: relative;
            }
            #slideshow img {
                width: 100%;
                position: absolute;
                /*图片采取绝对定位，均位于左上角，重叠在一起*/
                top: 0;
                left: 5;
                opacity: 0;
                /*初始不透明度为0，图片都看不见*/
                transition: opacity 1s linear;
                /*--重点--定义一个关于透明度的transition*/
            }
            #slideshow img.active {
                opacity: 1;
                /*有active类的图片不透明度为1，即显示图片*/
            }
    
            .title {
                margin-bottom: 100px;
            }
            .title_header {
                font-size: 1.2em;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;
    
            }
            .title_subheader {
                font-size: 1em;
                margin-bottom: 30px;
    
            }
    
            .uploadDetails {
                font-size: 1em;
                margin-top: 30px;
            }
    
    
            label {
                font-size: 1em;
                font-weight: bolder;
            }
            .box__dragndrop,
            .box__uploading,
            .box__success,
            .box__error {
                display: none;
            }
    
            .myBtn {
                background-color: #fbbc27;
                border: none;
                color: white;
                font-weight: bold;
                padding: 10px 20px;
                margin-top: 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 25px;
            }
            .footer_link {
                margin-top: 50px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 8px;
                list-style: none;
                color: black;
            }
            .footer_link a {
                color: black;
                padding: 0px 5px;
    
            }
    
            .footer_link a:hover {}
            .copyright {
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content: center;
                font-size: 8px;
                list-style: none;
                color: black;
            }
    
            #buttonid {
                border: 2px solid rgba(0, 0, 0, 0.3);
                border-radius: 25px;
                height: 100px;
                font-size: 1em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;
    
            }
    
            #checkRead {
                color: black;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="myHead">
                <div>
                    <a class="navbar-brand" href="#"><img src="/images/logo.png" alt="" style='height:80px;'></a>
                </div>
                <div class='links'>
                    <a href="https://www.eggsaregood.ca">主頁</a>
                    <a href="https://sc.eggsaregood.ca/contest" style='font-family: "Noto Sans SC", sans-serif !important; '>简体中文</a>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container-fluid banner">

        <div class="container">
            <div class="thankyou">
                感謝您的參與
            </div>
        </div>

        <div class="container">
            <div class="col-sm-6 left">
                <div class="eggHeader">
                    「雞蛋大變身」<br> <span class='secondLine'>有獎遊戲</span>
                </div>
                <div class="eggDetails">
            
                    <ul style='font-weight:bold'>
                        <li>頭獎(1名) : $3,000現金</li>
                        <li>入圍獎(10名) : 一年免費享用雞蛋<br>(52張一打雞蛋換領券)</li>
                        <li>首50名參加者: 一個月免費享用雞蛋<br>(4 張一打雞蛋換領券)</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 right">
                <div id="slideshow">
                    <img class="active" src="/images/banner/EFC-contest-img-1.png" />
                    <img src="/images/banner/EFC-contest-img-2.png" />
                    <img src="/images/banner/EFC-contest-img-3.png" />
                </div>
            </div>
        </div>

        
    </div>

    


    
<div class='clear-top container-fluid'  style='background-color:#fbbc27; height:150px;'>
    <div class=' container' >
        <div class=' footer_link'>
            <li>
                <a href='http://www.eggs.ca/resources' id="footer1" style='font-weight:bold;font-family: Noto Sans TC;'>其他資源(英文)</a>
            </li>
            <li>
                <a href='http://www.eggs.ca/community' id="footer2" style='font-weight:bold;font-family: Noto Sans TC;'>社區消息(英文)</a>
            </li>
            <li>
                <a href='http://www.eggs.ca/about-us' id="footer3" style='font-weight:bold;font-family: Noto Sans TC;'>關於我們(英文)</a>
            </li>
            <li>
                <a href='http://www.eggs.ca/contactus' id="footer4" style='font-weight:bold;font-family: Noto Sans TC;'>聯絡我們(英文)</a>
            </li>

        </div>
    </div>
    

    <div class="container copydiv text-center">

        <span id='copyright'>© 2018 Egg Farmers of Canada. All rights reserved </span>

    </div>

</div>
    
</body>

<script>
    //---------主角：轮播图函数-------------
    function slideshow() {
      var slideshow=document.getElementById("slideshow"),
      imgs=slideshow.getElementsByTagName("img"), //得到图片们
    
      current=0; //current为当前活跃的图片编号
    
      function slideOff() {
        imgs[current].className=""; //图片淡出
    
      }
      function slideOn() {
        imgs[current].className="active"; //图片淡入
    
      }
    
      function changeSlide() { //切换图片的函数
        slideOff();
        current++; //自增1
        if(current>=imgs.length) current=0;
        slideOn();
      }
    
      //每2s调用changeSlide函数进行图片轮播
      var slideon=setInterval(changeSlide,2000);
    
      slideshow.onmouseover=function () {
        clearInterval(slideon); //当鼠标移入时清除轮播事件
      }
      slideshow.onmouseout=function () {
        slideon=setInterval(changeSlide,1500); //当鼠标移出时重新开始轮播事件
      }
    
    
    }
    
    slideshow();
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-79368805-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-79368805-3');

</script>

</html>