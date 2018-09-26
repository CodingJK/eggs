<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eggs Campaign</title>
    
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

        body{
           
        }
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 80px;
            margin-bottom: 80px;
        }
        .btn-file { position: relative; overflow: hidden; } .btn-file input[type=file] { position: absolute; top: 0; right: 0; min-width:
        100%; min-height: 100%; font-size: 100px; text-align: right; filter: alpha(opacity=0); opacity: 0; outline: none; background:
        white; cursor: inherit; display: block; } #img-upload{ width: 20%; margin-top:30px;}
        

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
        body{
            
            font-family: "Noto Sans TC";
        }
        .btnWord{
            font-size: 1.6em;
        }
        @media (min-width:1200px){
            .secondLine{ padding-left: 50px; }
            .navbar{
                height: 120px; 
                background-color: rgb(251, 187, 39);
            }
            .myHead{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            
            .links a{
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
            .links a:hover{
                border-color: white;
            }
            
            .banner{
                background-color: rgb(251, 187, 39);
                margin-top:120px;
                min-height: 600px;
            }
            .eggHeader{
                
                font-weight: bold;
                font-size:5em;
                color: white;
                /* margin-left: -15px; */
            }
            .eggDetails{
                font-size: 1.6em;
                margin-top: 40px;
                margin-left: 50px;
            }

            .headerList{
                margin-top: 20px;
            }

            .left{
                /* padding-left: 100px; */
            }

            #slideshow{  
                margin:
            0 auto; /*设置在页面水平居中*/ /*overflow: hidden;*/ position: relative; } #slideshow img{ width: 100%; position: absolute; /*图片采取绝对定位，均位于左上角，重叠在一起*/
            top: 0; left: 5; opacity: 0; /*初始不透明度为0，图片都看不见*/ transition: opacity 1s linear; /*--重点--定义一个关于透明度的transition*/ } #slideshow
            img.active{ opacity: 1; /*有active类的图片不透明度为1，即显示图片*/ }
            
            .title{
                margin-bottom:60px;
            }
            .title_header{
                font-size: 42px;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;

            }
            .title_subheader{
                font-size: 1.6em;
                margin-bottom: 30px;

            }

            .uploadDetails{
                font-size: 1.6em;
                margin-top: 30px;
            }

            
            label{
                font-size: 1.6em;
                font-weight: bolder;
            }
            .box__dragndrop, .box__uploading, .box__success, .box__error { display: none; }

            .myBtn{
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
            .footer_link{
                margin-top: 70px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 14px;
                list-style: none;
                color: black;
            }
            .footer_link a{
                color: black;
                padding: 0px 20px;

            }

            .footer_link a:hover{

            }
            .copyright{
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 12px;
                list-style: none;
                color: black;
            }

            #buttonid{
                border:2px solid rgba(0,0,0,0.3);border-radius:25px;
                height: 200px;
                font-size: 3em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;

            }

            #checkRead{
                color: black;
                cursor: pointer;
            }
        }
        @media (min-width:1000px) and (max-width:1200px){
            .secondLine{ padding-left: 40px; }
            .navbar{
                height: 120px; 
                background-color: rgb(251, 187, 39);
            }
            .myHead{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            
            .links a{
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
            .links a:hover{
                border-color: white;
            }
            
            .banner{
                background-color: rgb(251, 187, 39);
                margin-top:120px;
                min-height: 600px;
            }
            .eggHeader{
                font-weight: bold;
                font-size:4em;
                color: white;
                
                
            }
            .eggDetails{
                font-size: 1.6em;
                margin-top: 40px;
                margin-left: 40px;
            }

            .headerList{ margin-top: 20px; }

            .left{
                /* padding-left: 50px; */
            }

            #slideshow{  margin:
            0 auto; /*设置在页面水平居中*/ /*overflow: hidden;*/ position: relative; } #slideshow img{ width: 100%; position: absolute; /*图片采取绝对定位，均位于左上角，重叠在一起*/
            top: 0; left: 5; opacity: 0; /*初始不透明度为0，图片都看不见*/ transition: opacity 1s linear; /*--重点--定义一个关于透明度的transition*/ } #slideshow
            img.active{ opacity: 1; /*有active类的图片不透明度为1，即显示图片*/ }
            
            .title{
                margin-bottom:60px;
            }
            .title_header{
                font-size: 3em;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;

            }
            .title_subheader{
                font-size: 1.6em;
                margin-bottom: 30px;

            }

            .uploadDetails{
                font-size: 1.6em;
                margin-top: 30px;
            }

            
            label{
                font-size: 1.6em;
                font-weight: bolder;
            }
            .box__dragndrop, .box__uploading, .box__success, .box__error { display: none; }

            .myBtn{
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
            .footer_link{
                margin-top: 70px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 14px;
                list-style: none;
                color: black;
            }
            .footer_link a{
                color: black;
                padding: 0px 20px;

            }

            .footer_link a:hover{

            }
            .copyright{
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 12px;
                list-style: none;
                color: black;
            }

            #buttonid{
                border:2px solid rgba(0,0,0,0.3);border-radius:25px;
                height: 200px;
                font-size: 3em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;

            }

            #checkRead{
                color: black;
                cursor: pointer;
            }
        }


        @media (min-width:800px) and (max-width:1000px){
            .secondLine{ padding-left: 30px; }
            .navbar{
                height: 120px; 
                background-color: rgb(251, 187, 39);
            }
            .myHead{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            
            .links a{
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
            .links a:hover{
                border-color: white;
            }
            
            .banner{
                background-color: rgb(251, 187, 39);
                margin-top:120px;
                min-height: 400px;
            }
            .eggHeader{
                font-weight: bold;
                font-size:3em;
                color: white;
                
            }
            .eggDetails{
                font-size: 1.1em;
                margin-top:30px;
                margin-left: 30px;
            }
            .headerList{
                margin-top: 20px;
            }
            .left{
                
            }

            #slideshow{  margin:
            0 auto; /*设置在页面水平居中*/ /*overflow: hidden;*/ position: relative; } #slideshow img{ width: 100%; position: absolute; /*图片采取绝对定位，均位于左上角，重叠在一起*/
            top: 0; left: 5; opacity: 0; /*初始不透明度为0，图片都看不见*/ transition: opacity 1s linear; /*--重点--定义一个关于透明度的transition*/ } #slideshow
            img.active{ opacity: 1; /*有active类的图片不透明度为1，即显示图片*/ }
            
            .title{
                margin-bottom:60px;
            }
            .title_header{
                font-size: 2em;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;

            }
            .title_subheader{
                font-size: 1.1em;
                margin-bottom: 30px;

            }

            .uploadDetails{
                font-size: 1.1em;
                margin-top: 30px;
            }

            
            label{
                font-size: 1.1em;
                font-weight: bolder;
            }
            .box__dragndrop, .box__uploading, .box__success, .box__error { display: none; }

            .myBtn{
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
            .footer_link{
                margin-top: 70px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 14px;
                list-style: none;
                color: black;
            }
            .footer_link a{
                color: black;
                padding: 0px 20px;

            }

            .footer_link a:hover{

            }
            .copyright{
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 12px;
                list-style: none;
                color: black;
            }

            #buttonid{
                border:2px solid rgba(0,0,0,0.3);border-radius:25px;
                height: 200px;
                font-size: 3em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;

            }

            #checkRead{
                color: black;
                cursor: pointer;
            }
        }

        @media (max-width:800px) {
            .secondLine{
                
            }
            .btnWord{ font-size: 1.1em; }
            li{
                list-style: none;
            }
            .navbar{
                height: 120px; 
                background-color: rgb(251, 187, 39);
            }
            .myHead{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
            }
            
            .links a{
                font-weight: bold;
                line-height: 120px;
                visibility: visible;
                border-radius: 10px;
                border: 2px solid rgb(251, 187, 39);
                color: black;
                padding: 10px 10px;
                text-decoration: none;
                font-size: 12px;
            
                
            }
            .links a:hover{
                border-color: white;
            }
            
            .banner{
                background-color: rgb(251, 187, 39);
                margin-top:120px;
                min-height: 700px;
            }
            .eggHeader{
                font-weight: bold;
                font-size:2em;
                color: white;
                
            }
            .eggDetails{
                font-size: 1em;
                margin-top:20px;
                margin-bottom: 30px;
                
            }
            .headerList{
                margin-top: 10px;
                text-align: left;
                margin-left: 30px;
            }

            .left{
              text-align: center;
            }

            #slideshow{  margin:
            0 auto; /*设置在页面水平居中*/ /*overflow: hidden;*/ position: relative; } #slideshow img{ width:100%; position: absolute; /*图片采取绝对定位，均位于左上角，重叠在一起*/
            top: 0; left: 5; opacity: 0; /*初始不透明度为0，图片都看不见*/ transition: opacity 1s linear; /*--重点--定义一个关于透明度的transition*/ } #slideshow
            img.active{ opacity: 1; /*有active类的图片不透明度为1，即显示图片*/ }
            
            .title{
                margin-bottom:100px;
            }
            .title_header{
                font-size: 1.2em;
                font-weight: bold;
                margin-top: 30px;
                margin-bottom: 30px;

            }
            .title_subheader{
                font-size: 1em;
                margin-bottom: 30px;

            }

            .uploadDetails{
                font-size: 1em;
                margin-top: 30px;
            }

            
            label{
                font-size: 1em;
                font-weight: bolder;
            }
            .box__dragndrop, .box__uploading, .box__success, .box__error { display: none; }

            .myBtn{
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
            .footer_link{
                margin-top: 50px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 8px;
                list-style: none;
                color: black;
            }
            .footer_link a{
                color: black;
                padding: 0px 5px;

            }

            .footer_link a:hover{

            }
            .copyright{
                margin-top: 20px;
                margin-bottom: 10px;
                display: flex;
                justify-content:center;
                font-size: 8px;
                list-style: none;
                color: black;
            }

            #buttonid{
                border:2px solid rgba(0,0,0,0.3);border-radius:25px;
                height: 100px;
                font-size: 1em;
                display: flex;
                justify-content: center;
                color: gray;
                align-items: center;
                cursor: pointer;

            }

            #checkRead{
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
                    <a href="https://sc.eggsaregood.ca" style='font-family: "Noto Sans SC", sans-serif !important; '>简体中文</a>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container-fluid banner">
        <div class="container">
            <div class="col-sm-6 left" style='padding-left:0;'>
                <div class="eggHeader">
                    「雞蛋大變身」<br>
                    <span class='secondLine' >有獎遊戲</span>
                </div>
                <div class="eggDetails">
                    <span>烹調雞蛋並做成特別造型，<br></span>
                    <span>例如動物、人物、物件或風景等，<br></span>
                    <span>拍下照片，填妥下列表格<br></span>
                    <span>並上載作品照片，即有機會贏取:<br></span>
                    
                    <ul style='font-weight:bold' class='headerList'>
                        <li>頭獎(1名) : $3,000現金</li>
                        <li>入圍獎(10名) : 一年免費享用雞蛋<br>(52張一打雞蛋換領券)</li>
                        <li>首50名參加者: 一個月免費享用雞蛋<br>(4 張一打雞蛋換領券)</li>
                    </ul>
                    {{-- <span>‧頭獎(1名) : $3,000現金<br></span>
                    <span>‧入圍獎(10名) : 一年免費享用雞蛋<br></span>
                    <span>(52張一打雞蛋換領券)<br></span>
                    <span>‧首50名參加者: 一個月免費享用雞蛋<br></span>
                    <span>(4 張一打雞蛋換領券)<br></span> --}}
                </div>
            </div>
            <div class="col-sm-6 right" style='padding-right:0;'>
                <div id="slideshow">
                    <img class="active" src="/images/banner/EFC-contest-img-1.png" />
                    <img src="/images/banner/EFC-contest-img-2.png" />
                    <img src="/images/banner/EFC-contest-img-3.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid title">
        <div class="container">
            <div class="title_header">
                參加「雞蛋大變身」有獎遊戲
            </div>
            <div class="title_subheader">
                請以英文填妥下列表格，然後上載作品照片。作品必須以雞蛋為主要材料之一， 並由您所製作。參加者必須為加拿大居民。
            </div>
            <div>
            @if (count($errors)>0)
                <div class="alert alert-danger col-xs-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <label style='margin-bottom:15px;'>表格:<br></label>
            <form method="POST" action="/savePic" id='myForm' enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class='col-xs-12 form-group' style='padding-left:0'>
                    <label for="firstname" class="col-sm-2" style='padding-left:0; font-weight:400 !important'>姓:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control " id="firstname" name='firstname' value="{{old('firstname')}}" required>
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class='col-xs-12 form-group' style='padding-left:0'>
                    <label for="firstname" class="col-sm-2" style='padding-left:0; font-weight:400 !important'>名:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control " id="lastname" name='lastname' value="{{old('lastname')}}" required>  
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class='col-xs-12 form-group' style='padding-left:0'>
                    <label for="firstname" class="col-sm-2" style='padding-left:0; font-weight:400 !important'>電話號碼:</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control form-control-sm" id="phone" name='phone' value="{{old('phone')}}" required>
                    </div>
                    <div class="col-sm-5"> </div>
                </div>
                <div class='col-xs-12 form-group' style='padding-left:0'>
                    <label for="firstname" class="col-sm-2" style='padding-left:0; font-weight:400 !important'>電郵地址:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control form-control-sm" id="email" name='email' value="{{old('email')}}" required>
                    </div>
                    <div class="col-sm-5"> </div>
                </div>
                
                

                <div class="col-xs-12" style='padding-left:0'>
                    <div class="uploadDetails" style='padding:0'>
                        照片檔案最小為2MB，最大為12MB。檔案格式必須為JPG、TIF、BMP 或PNG。直或橫的照片均可。
                    </div>
                    <div class="form-group row">
                        
                            <input type="file" id="imgInp" name='image' style='opacity:0;' >
                        </div>

                        <div class="col-xs-12 " id='buttonid' >
                            點擊此處上傳圖片
                        </div>
                        <img id='img-upload' />
                    </div>
                </div>
                <script>
                    document.getElementById('buttonid').addEventListener('click', openDialog);
                    function openDialog() {
                    document.getElementById('imgInp').click();
                    }
                </script>
                <div class="col-xs-12 form-group" style='padding-left:0'>
                        
                    <div class='container' id="reading" style='padding-left:0'>
                        <a data-toggle="modal" data-target="#myModal" id='checkRead'>
                           <span class='btnWord'>閱讀條文及條款</span>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 form-group" style='padding-left:0'>
                    <input type="checkbox" name="check" id="read" value="checked">
                    <span class='btnWord'>同意條文及條款</span>
                </div>
                <script>
                </script>
                <div class="container" style='padding-left:0'>
                    <button class="myBtn" type='submit' id='mySubmit'>遞 交</button>
                    
                </div>
                  
            </form>
            <script>
                $('#mySubmit').click(function(e){
                    e.preventDefault();
                    if ($('#read').is(":checked")) {
                        $('#mySubmit').prop('disabled', true);
                        $("#myForm").submit();
                    }else{
                        alert('请先同意條文及條款');
                    }
                });
            </script>
            </div>

           
        </div>

        
        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style='width:70%'>
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                                                                            </button>
                        <h4 class="modal-title" id="myModalLabel" style="display:flex;justify-content:space-between">
                            <div>閱讀條文及條款</div>
                            <div> </div>
                        </h4>
                    </div>
                    <div class="modal-body">
                        <span style='font-size:16px; font-weight:bold; text-align:center !important'>僅加拿大居民可參與本次比賽<br> 參加本次比賽無需進行任何購買或支付。任何購買或支付行為均不會提高或影響您贏得比賽的機會。<br> 通過流動設備參與本次比賽的參賽者需要支付標準數據傳輸費用。請在通過流動設備參與本次比賽之前，聯絡您的服務供應商以瞭解具體的價格及服務計劃資料和收費。）</span>
                        
                        <ol>
                            <li>重要日期：<br>本Egg Transformation Contest（以下簡稱「比賽」）的參賽期從東部時間（以下簡稱「ET」）2018年9月25日淩晨12：00：01開始，到東部時間2018年10月25日晚上11：59：59結束（以下簡稱 「參賽期」））</li>
                            <li>參賽資格：<br>比賽開放給加拿大居民參加，其參賽時要已經達到所居住省份/地區的法定成年年齡；除此之外，所有加拿大雞蛋行銷協會（Canadian Egg Marketing Agency）（經營別稱「加拿大蛋農協會」（Egg Farmers of Canada））（以下簡稱「主辦方」）及其附屬機構、獎品供應商、廣告/推廣機構和參與到本次比賽的開發、生產、管理、評判或實施之中的任何其他個人或實體（與主辦方合稱為「舉辦比賽方」）的員工、代表或代理（以及與其生活在一起的人，
                            無論是否有關聯）均無參賽資格。</li>
                            <li>同意接受規則的法律約束：<br>參與本次比賽即表示您已閱讀本次比賽的官方規則和條例（以下簡稱「規則」）並同意接受其法律約束。</li>
                            <li>參賽方法：<br>若要參賽，請在參賽期內上網到EggsAreGood.ca/contest（以下簡稱「網址」），然後遵循螢幕上的提示完成以下步驟：<br>
                                <ol type='a'>
                                    <li>獲取官方參賽表格（以下簡稱「參賽表」）；</li>
                                    <li>完整地填寫參賽表所要求的各項資料，包括（i）全名；（ii）電郵地址；及（iii）包括區號的電話號碼；</li>
                                    <li>上載一（1）張您所創作的獨特雞蛋食品藝術圖片（以下簡稱「圖片」），將一個或多個雞蛋作為其中一個主要元素（以下簡稱「主題」）來展示（或以其他方式描述您將如何展示）。重要提示：您並不需要在圖片中展示真實的雞蛋，展示真實的雞蛋也不會增加或影響您在本次大賽中獲獎的機會;<br><br>重要提示：想要具備參賽資格，您的圖片必須滿足以下要求：（i）採用以下其中一種格式：JPG、TIF、BMP、PNG；（ii）檔案大小不得低於2 MB，也不得超過12 MB；及（iii）遵循比賽規則的其他方面（ 包括，但不限於，以下第7條規則中所載列的具體提交要求）。</li>
                                    <li>表明您已閱讀比賽規則並同意接受其法律約束；</li>
                                    <li>點擊「提交」。</li>
                                </ol><br>
                                想要具備參賽資格，您的圖片必須滿足以下要求：（i）反映主題；及（ii）符合比賽規則要求，包括，但不限於，以下第7條規則中所載列的具體的提交要求（完全由主辦方根據其唯一及絕對酌情權決定）。任何不符合比賽規則（包括，但不限於，以下第7條規則中所載列的具體的提交要求）的圖片（完全由主辦方根據其唯一及絕對酌情權決定）均將被取消資格，無法參與到本次比賽中。<br>
                                在點擊「提交」後，您將有資格獲得一次（1）登記比賽參賽作品（單獨稱作「參賽作品」，合稱為「參賽作品」）的機會。為了獲得參賽資格，您必須在參賽期內根據比賽規則提交您的參賽作品。
                            </li>
                            <li>參賽限制：<br>
                                每個人的參賽作品數目是沒有限制的，但用於參賽的每一張圖片都必須是原創而且獨一無二的。如果主辦方（利用主辦方得到或以其他方式發現的任何證據或其他資料利用主辦方得到或以其他方式發現的任何證據或其他資料）發現有參賽者企圖：（i）不止一（1）次地提交同一圖片和/或提交非其原創的圖片；和/或（ii）使用多個姓名、多個身份、多個電郵地址、任何自動化、macro 、script、機器人或其他系統或程式和/或任何其他不符合主辦方對規則字面和精神之解讀的手段參賽或以其他方式參加或破壞本次比賽；則主辦方可根據其唯一及絕對酌情權取消該參賽者的參賽資格。舉辦比賽方及其他各自的代理、員工、董事、繼任者和受讓人（合稱為「免責方」）對遲交、遺失、發送錯誤、延誤、不完整或不相容的參賽作品（所有這些參賽作品均是不正確）不承擔任何責任。如果主辦方根據其唯一及絕對酌情權認定某一參賽作品存在以下情形之一：（i）參賽作品未能在參賽期內根據比賽規則按時提交和為比賽所接收；和/或（ii）參賽作品隨附的圖片不符合比賽規則的要求（包括，但不限於，以下第7條規則中所載列的具體的提交要求）（完全由主辦方根據其唯一及絕對酌情權決定），則主辦方可拒收該參賽作品。
                            </li>
                            <li>驗證：<br>主辦方可隨時出於任何理由對所有參賽作品、圖片和參賽者進行驗證。根據其唯一及絕對酌情權，主辦方有權出於以下目的要求參賽者證明其身份和/或參賽資格（以主辦方可接受的形式——包括，但不限於，政府簽發的帶照片的身份證件）：（i）為要驗證參賽人士的參賽資格；（ii）為要驗證用於參與
                            （據稱參與）此次比賽的任何參賽作品、圖片和/或任何其他資料的資格和/或合法性；和/或（iii）出於主辦方根據其對比賽規則字面和精神的解讀對本次比賽進行管理時認為必要的任何其他理由，由其根據其唯一及絕對酌情權決定。如果參賽者未能在主辦方規定的時限內提供令主辦方完全滿意的證明，主辦方可根據其唯一及絕對酌情權取消參賽者的參賽資格。本次比賽的時間將由主辦方所使用的官方計時器唯一決定。</li>
                            <li>提交要求：<br>
                            提交參賽作品即表示您同意該參賽作品（及圖片）遵循本規則中規定的所有條件。免責方將不承擔與以下情形相關的任何責任：（I）您的參賽作品（或其任何部分——包括，但不限於，圖片）的使用；（II）任何比賽相關活動的參與；（III）任何個人資料的使用、收集、存儲和披露；和/或（IV）被宣佈為獲獎者時的任何獎品（包括任何獎品的任何使用或濫用）。
                            如果經查明您未遵守或未完全遵守任何比賽規則，您須保護免責方免受傷害。在比賽結束和/或任何獎品發放後，這一免責和補償應繼續有效。<br>
                            參與此次比賽即意味著各參賽者在此聲明並保證其所提交的圖片：<br>
                            <ol type="i">
                                <li>是其原創作品，且參賽者擁有圖片的全部必要權利，有權使用該圖片參與本比賽；</li>
                                <li>不違反任何法律、法規、法令或條例；</li>
                                <li>不得提及任何可辨識的第三方或包含其肖像，但已取得這些個體許可的情形除外，且如果他們不滿所在轄區的法定成年年齡，則必須取得其父母/法定監護人的許可；</li>
                                <li>不會導致任何形式的索賠，包括，但不限於，侵權、侵犯隱私或宣傳或侵犯任何第三方的任何權利和/或利益的索賠；</li>
                                <li>不包含誹謗、商業誹謗、色情或淫穢內容，同時也不包含、描繪、包括、討論或涉及任何以下內容，包括，但不限於：裸體；酒精/毒品消費或吸煙；露骨或生動的性行為或性暗示；粗魯、庸俗或冒犯性的語言和/或符號；對任何民族、種族、性別、 宗教或其他團體的貶損性描述（包括，但不限於，主辦方的任何競爭對手）；認可、寬容和/或討論任何非法、不恰當、有風險或危險行為或行事的內容；某些人的私人資料，包括，但不限於，姓名、電話號碼和地址（無論是實體的還是電子形式）；
                                主辦方產品之外的產品或服務的商業資訊、比較或徵集；除主辦方外的任何可辨識的第三方產品、商標、品牌和/或標誌（例如：未經許可，您的圖片中出現的任何衣物和/或產品均不得包含任何明顯的標誌、商標或其他第三方資料——注意：參賽者已取得許可的所有可辨識的第三方產品、商標、品牌和/或標誌也須進行模糊處理，以使其無法辨認）；違反本規則的行為或其他活動；和/或任何其他被認為或可能會被認為不恰當、不合適或有冒犯性的資料，
                                完全由主辦方根據其唯一及絕對酌情權決定。</li><br>
                                主辦方和/或其推廣機構或指定內容監督人（以下簡稱「監督人」）有權對所有圖片進行篩選。監督人將取消由其根據唯一及絕對酌情權認定違反本規則所述條款及條件的圖片的參賽資格。 監督人有權根據其唯一及絕對酌情權在任何時候，出於任何理由要求參賽者修改、編輯和/或重新提交其圖片（或其任何部分）以確保圖片符合本規則或滿足任何其他原因。如果在比賽期間或之後任何時候，需要採取相應的行動以確保比賽根據主辦方對本規則之字面和精神的解讀有條不紊地進行，則主辦方保留自行決定根據具體情況採取其認為必要的任何行動的權利。
                            </ol>
                            </li>
                            <li>許可：<br>
                                參與本次比賽和提交參賽作品即表示各參賽者：（i）同意授予主辦方永久性、非獨家、免版稅的許可；許可主辦方出於宣傳或推廣本次比賽的目的或任何其他原因而發佈、展示、複製、修改、編輯或以其他方式全部或部分使用其圖片或與雞蛋或雞蛋相關產品的宣傳或推廣有關；（ii）同意放棄其對圖片所擁有的全部道德權利，以利於主辦方（及經主辦方授權使用該圖片的任何人）；及（iii）同意對免責方進行免責，並保護免責方免受因使用其圖片（或其中的任何部分）而產生的所有索賠、損失、
                                責任、成本和費用的損害，包括，但不限於，基於宣傳侵犯、名譽權侵害、隱私權侵犯、版權侵犯、商標侵權或任何其他智慧知識財產權相關訴因或其他訴因的任何索賠。
                            </li>
                            <li>獎品：<br>
                                <u>大獎</u>本次比賽設大獎（以下簡稱「大獎」）一（1）名，獎品為三千元（$3,000加元）的支票一（1）張，以確認的優勝者為收款人。 在不限制上述規定的普遍性的原則下，以下一般條件適用于大獎：（i）大獎必須按頒獎原樣接受，不得轉讓或讓與（除非經主辦方根據其唯一及絕對酌情權特別許可）；（ii）不允許更換，除非其為主辦方的選擇；（iii）主辦方保留在任何時候出於任何原因以等值或更高價值的獎品替換大獎的權利。
                                <br><u>二獎</u>本次比賽設二獎（分稱為「二獎」，合稱為「二獎」）十（10）名，每份獎品為五十二（52）張優惠券，每張優惠券均可兌換一（1）打雞蛋，有效期至2019年12月。每份二等獎約值零售價（ARV）達 $169.00加元。各二獎必須按頒獎原樣接受，不得轉讓或讓與，也不得兌換為現金（除非經主辦方根據其唯一及絕對酌情權特別許可）。不允許更換，除非其為主辦方的選擇。
                                主辦方有權根據其唯一及絕對酌情權以相同或更高零售價值的獎品，包括，但不限於，現金獎勵等，代替任何二獎或其中一部分，完全依據主辦方的唯一及絕對酌情權。所有優惠券均須遵循發券者的條款及條件。
                                <br><u>晨鳥獎</u>根據本規則完成合格參賽作品的前五十（50）名合格參賽者（由主辦方根據其唯一及絕對酌情權確定）每人均有資格贏取一份晨鳥獎（根據與本規則的符合情況）（以下簡稱「晨鳥獎」），每份獎品為四（4）張優惠券， 每張優惠券均可兌換一（1）打雞蛋。每份晨鳥獎約值零售價
                                $13.00元。各晨鳥獎必須按頒獎原樣接受，不得轉讓或讓與，也不得兌換為現金（除非經主辦方根據其唯一及絕對酌情權特別許可）。 不允許更換，除非其為主辦方的選擇。主辦方有權根據其唯一及絕對酌情權以相同或更高零售價值的獎品，包括，但不限於，現金獎勵等，代替任何晨鳥獎或其中一部分，完全根據主辦方的唯一及絕對酌情權。所有優惠券均須遵循發券者的條款及條件。贏取晨鳥獎的機率取決於所提交合格參賽作品的數量及合格參賽者根據本規則完成有效參賽作品的速度。限制每人只能贏取一（1）份晨鳥獎。
                                <br>
                                大獎、二獎和晨鳥獎合稱為「獎品」，分稱為「獎品」。<br>
                                所有免責方均不對本次比賽所頒發的任何獎品的品質或適合性作任何聲明或提供任何明示或暗示的保證。在適用法律許可的最大程度，每名經確認的獲獎者均理解並承認，如果所得的獎品不適用於其用途或存在任何令人不滿意的地方，其不能向主辦方或任何其他免責方尋求補償或尋求任何法律或同等補償。為進一步明確，同時避免產生疑問，接受獎品即表示各經確認的獲獎者放棄在其獎品或其中的一部分全部或部分不令人滿意時向主辦方及所有其他免責方進行追索的各項權利。限制每人只能贏取一（1）份二獎或大獎以及一（1）份晨鳥獎。<br>


                            </li>
                            <li>合資格二獎及大獎優勝者遴選流程（主辦方評判）：<br>主辦方將委任評審小組（以下簡稱「比賽評委」）基於以下標準對各合格參賽作品進行評判：<br>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>
                                            標準
                                        </th>
                                        <th>
                                            評分比
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1. 整體外觀</td>
                                            <td>50%</td>
                                        </tr>
                                        <tr>
                                            <td>2. 創造性和原創性</td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>3. 手藝</td>
                                            <td>20%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <u>評判</u>:比賽評委將會為每一份參賽作品評分（簡稱「評分」）。被選為合資格獲獎者的機率取決於依據本規則提交和收到的合格參賽作品數目及參賽作品水準。主辦方將根據合格參賽作品的評分選出參賽作品排在前十一（11）位的十一（11）名合資格參賽者（由比賽評委根據其唯一及絕對酌情權決定）。得分最高的獲選參賽者將被評選為大獎的潛在優勝者，緊跟其後的十（10）名高分獲選參賽者將被評選為二獎的潛在優勝者（根據與本規則的符合情況）。如果有兩個或多個合格參賽作品出現平分的情況，則從所有平分的合格參賽作品中選擇標準1（如果仍然分數相同，則看標準2；依然相同，再看標準3）得分最高者會作為獎品的合格獲選參賽者。如果在依據標準1、標準2和標準3進行評判後出現確切的平分的情況，則主辦方將任命一個新的評審小組，由其依據之前的程式來打破這一僵局。評判將于2018年10月29日（以下簡稱「評選日期」）左右完成。合資格二獎獲選參賽者將于2018年10月30日公佈，合資格大獎獲選參賽者將于2018年11月2日公佈。
                            </li>
                            <li>合資格二獎及大獎優勝者公告流程：<br>
                                主辦方或其指定代表將在其評選日期後五（5）個工作日內嘗試去聯絡每一位獲選參賽者，至少三（3）次。如果主辦方根據上述資料無法與獲選參賽者取得聯絡，或者通知因無法投遞而被退回，則主辦方根據其唯一及絕對酌情權可能會取消該參賽者的資格（如果被取消資格，參賽者將喪失獲得適用獎品的擁有權利），且主辦方有權根據其唯一及絕對酌情權，在時間允許的情況下，根據第10條規則中概述的適用程序，從剩餘的合格參賽作品中選擇一名替代合資格獲選參賽者（在這種情況下，本節中之前的規定應適用於這名最新獲選參賽者）。
                            </li>
                            <li>合資格二獎及大獎優勝者確認流程：<br>
                                在主辦方根據比賽規則官方確認其為優勝者之前，即便參賽者已經被公告為優勝者或合資格優勝者，其仍然不能作為真正的優勝者。在被宣佈為確認優勝者之前，要求每名合資格獲選參賽者：（a）在不借助機械或其他輔助的情況下正確地回答一道數學技能測試題（由主辦方根據其唯一及絕對酌情權決定，通過網路管理，通過電郵或其他電子手段，通過電話，
                                或採用主辦方的聲明和免責表）；及（b）在通告後五（5）個工作日內簽署並交回主辦方的聲明和免責表，其中參賽者需要：（i）確認持續遵守本規則；（ii）確認接受適用獎品（按頒發原樣）；及（iii）免除免責方與本次比賽、 參賽者參與本次比賽和/或頒發及使用/濫用適用獎品或其中任何部分等相關的責任。如果獲選參賽者：（a）未能在規定的時間內交回正確簽署的比賽文件；（b）因任何原因無法接受（或不願意接受）適用獎品（按頒發原樣）；（c）未能充分地遵守本規則所涉及的各項要求（包括，但不限於，正確回答一道數學技能測試問題的要求）；和
                                /或（d）經認定違反了本規則（完全由主辦方根據其唯一及絕對酌情權確定）；則主辦方將取消該參賽者的資格（如果被取消資格，參賽者將喪失獲得適用獎品的擁有權利），且主辦方有權根據其唯一及絕對酌情權，在時間允許的情況下， 根據第10條規則中概述的適用程序，從剩餘的合格參賽作品中選擇一名替代合資格獲選參賽者（在這種情況下，本節中之前的規定應適用於這名最新獲選參賽者）。 
                            </li>
                            <li>
                                合資格晨鳥獎公告流程：<br>在被宣佈為確認晨鳥獎獲獎者之前，並且在其成為前五十（50）名有效參賽者之一後五（5）個工作日內，每一名合資格晨鳥獲選參賽者都將收到一封包含一道數學技能測試題的電郵。每一名合資格參賽者都必須在收到後三（3）個工作內回覆該電郵並在不借助機械或其他輔助的情況下正確地回答該數學技能測試題。如果獲選參賽者：（a）未能在規定的時間內回覆該電郵；或（b）未能正確地回答數學技能測試題；和/或（c）經認定違反了本規則（完全由主辦方根據其唯一及絕對酌情權確定）；則主辦方將取消該參賽者的資格（如果被取消資格，參賽者將喪失獲得適用晨鳥獎獎品的所有權利），且主辦方有權根據其唯一及絕對酌情權，在時間允許的情況下，根據第9條規則中概述的適用程序，從剩餘的合格參賽作品中選擇後一名合資格參賽者（在種情況下，本節中之前的規定應適用於這一最新獲選的參賽者）。
                            </li>
                            <li>
                                一般條件：<br>本次比賽遵守所有適用的聯邦、省/地區和市政法律。主辦方與本次比賽各方面相關的決定是終決性的，並對所有參賽者具有約束性，參賽者無申訴權利。主辦方將根據其唯一及絕對酌情權隨時取消經認定因任何原因而違反主辦方對本規則的字面和/或精神解讀的參賽者的參賽資格。<br>
                                免責方將不對以下情形承擔責任：（i）比賽期間本網站和/或任何其他網站或任何平台的故障；（ii）任何技術故障或其他任何性質的問題，包括，但不限於與，電話網絡或線路、電腦在線系統、伺服器、服務提供商、 電腦設備或軟件等相關的技術故障或問題；（iii）任何參賽作品、圖片和/或其他資訊無法被接收、採集、記錄或因任何原因無法正常運行，包括，但不限於，互聯網或任何網站上的技術問題或通訊擁堵；（iv）參賽者或任何其他人員的電腦或其他設備與本次比賽相關的或因參與此次比賽而導致的任何傷害或損壞；（v）任何人員被不正確和/或錯誤地認定為獲獎者或合資格獲獎者；和/或（vi）上述情形的任意組合。<br>
                                當任何超出主辦方合理控制的起因出現並對本規則所涉及的比賽的正當行為造成干擾時，包括，但不限於，任何失誤、問題、電腦病毒、漏洞、篡改、非法侵入、欺詐或任何形式的故障，主辦方有權根據魁北克酒類、娛樂管理局（Régie des alcools,
                                des courses et des jeux）（以下簡稱Régie ）的批准以任何方式取消、修訂或暫停本次比賽（或修訂比賽規則）。以任何方式破壞本次比賽的合法運作的任何企圖（由主辦方根據其唯一及絕對酌情權決定）均可能會違反刑事和民事法律，在出現此類企圖時，主辦方有權在法律許可的最大程度尋求補救措施和損害賠償。主辦方有權在出現任何事故、列印、管理或任何其他類型的失誤時，或出於任何其他理由，根據魁北克Régie的批准取消、修訂或暫停本次比賽，或者修訂比賽的規則，以任何方式，不需要事先通知，也不需要承擔義務。<br>
                                參與本次比賽即表示各參賽者明確同意主辦方及其代理和/或代表根據主辦方的隱私保護政策（網址：http：//www.eggfarmers.ca/privacy-policy/）出於對本次比賽進行管理之目的存儲、 共享和使用其所提交的個人資料。本節內容不限制個人就其個人資料的收集、使用和/或披露可能會向主辦方或其他人提供的任何其他許可。<br>
                                主辦方有權根據魁北克Régie的批准，在其認為必要的範圍內出於驗證各參賽者、參賽作品、圖片和/或其他資料是否符合本規則之目的，或出於任何技術或其他問題的原因， 或鑒於任何主辦方依據自己唯一及絕對酌情權認為會對本規則所涉及的比賽的妥善管理造成影響的任何其他情形，或出於任何其他原因，調整本規則中規定的任何日期、時限和/或其他比賽機制。<br>
                                針對魁北克居民：任何與宣傳比賽的舉行或籌辦相關的訴訟可提呈至酒類、娛樂管理局（Régie des alcools, des courses et des jeux）進行裁決。任何與頒發獎品相關的訴訟可提呈委員會裁決，且僅限於協助雙方達成和解的目的。<br>
                                如果本英文規則的條款及條件與任何比賽相關材料中包含的披露資料或其他聲明之間存在任何差異或不一致，包括，但不限於，本規則的法文版本和/或主辦方的任何代表所提供的對本規則的任何說明或解讀，在法律允許的最大程度上，以本英文規則的條款及條件為准，進行管理和控制。<br>
                                本規則任何條款的無效或無法執行均不影響任何其他條款的有效性或可執行性。如果任何條款被認定無效或無法執行或非法，本規則應繼續有效，並應按照條款進行解釋，視同本規則中不包含該無效或非法條款。<br>
                                在適用法律許可的最大程度上，有關本規則的構成、有效性、解釋和可行性或參賽者、主辦方或任何其他免責方涉及本次比賽的權利和義務的各項問題和疑問，均將受安大略省地方法律和加拿大適用于本規則的任何聯邦法律的管轄，並據其進行解釋，但不能形成任何法律選擇或法律規則或條款衝突，這可能會導致任何其他司法管轄區的法律適用。雙方在此同意本規則執行（或與此執行相關的）之訴訟或與本次大賽相關之訴訟，只依據安大略省境內法院管轄權並為專屬審判地。<br>

                            </li>
                        </ol>
                        <b style='font-size:16px'>簡要規則：</b><br>
                        <b style='font-size:16px'>無需進行任何購買。</b>比賽於2018年10月25日（東部時間晚上11:59:59）結束。開放給達到法定成年年齡的加拿大居民參加。比賽設大獎一名，獎品為 $ 3,000元的支票一張 。二獎10名，獎品為每人52張優惠券，每張均可兌換一打雞蛋，約值零售價 $169.00元；獲獎機率取決於合資格參賽作品的數量和質量。晨鳥獎50名，
                        獎品為每人4張優惠卷，每張均可兌換一打雞蛋，約值零售價 $13元；獲獎機率取決於合資格參賽作品的數量和合資格參賽者完成有效參賽作品的速度。獲選參賽者需要完成技能測試題。有關完整規則，包括參賽、評判和獎品的詳細資料，請瀏覽EggsAreGood.ca/contest。
                        
                        <hr>
                        {{-- english version --}}

                        <span style='font-size:16px; font-weight:bold; text-align:center !important'>THIS CONTEST IS OPEN TO RESIDENTS OF CANADA ONLY<br> NO PURCHASE OR PAYMENT NECESSARY. A PURCHASE OR PAYMENT OF ANY KIND WILL NOT INCREASE OR OTHERWISE IMPACT YOUR CHANCES OF
                        WINNING.<br> Standard data rates apply to participants who choose to participate in the Contest via a mobile device. Please contact your
                        service provider for pricing and service plan information and rates before mobile device participation.</span>
                        
                        <ol>
                            <li>KEY DATES:<br>Egg Transformation The Entry Period for the Egg Transformation Contest (the “Contest”) begins on September 25, 2018 at 12:00:01 a.m. Eastern
                            Time (“ET”) and ends on October 25, 2018 at 11:59:59 p.m. ET (the “Entry Period”).
                            </li>
                            <li>ELIGIBILITY:<br>Contest is open to residents of Canada who have reached the legal age of majority in their province/territory of residence
                            at the time of entry; except employees, representatives or agents (and those with whom such persons are living, whether related
                            or not) of Canadian Egg Marketing Agency (operating as Egg Farmers of Canada) (the “Sponsor”), its affiliated entities, prize
                            suppliers, advertising/promotion agencies, and any other individual or entity involved in the development, production, administration,
                            judging or fulfillment of the Contest (collectively with the Sponsor, the “Contest Parties”).
                            </li>
                            <li>AGREEMENT TO BE LEGALLY BOUND BY RULES:<br>By participating in this Contest, you are signifying your agreement that you have read and agree to be legally bound by these
                            Official Rules and Regulations (the “Rules”).</li>
                            <li>HOW TO ENTER:<br>To enter, go to EggsAreGood.ca/contest (the “Website”) during the Entry Period and follow the on-screen prompts to complete
                            the following steps:<br>
                                <ol type='a'>
                                    <li>Obtain the Official Contest Entry Form (the “Entry Form”);</li>
                                    <li>Fully complete the Entry Form with all required information, which includes (i) full name; (ii) email address; and (iii)
                                    telephone number including area code;</li>
                                    <li>Upload one unique (1) image (the “Image”) of egg food art you have created that either features (or otherwise demonstrates
                                    how you would feature) one or more eggs as one of the key ingredients (the “Theme”). IMPORTANT NOTE: There is no need to
                                    feature actual eggs in the Image and featuring eggs will not increase or otherwise impact your chances of winning in this
                                    Contest;<br><br>IMPORTANT NOTE: To be eligible, your Image must: (i) be in one of the following formats: JPG, TIF, BMP, PNG; (ii) be a file
                                    that is a minimum of 2 MB and a maximum of 12 MB in size; and (iii) otherwise comply with these Rules (including, but not
                                    limited to, the specific Submission Requirements listed below in Rule 7)</li>
                                    <li>Signify your agreement that you have read and agree to be legally bound by these Rules; and</li>
                                    <li>Click “SUBMIT”.</li>
                                </ol><br> To be eligible, your Image must: (i) reflect the Theme; and (ii) be in accordance with these Rules, including, but not limited
                                to, the specific Submission Requirements listed below in Rule 7 (all as determined by Sponsor in its sole and absolute discretion).
                                Any Image that does not comply with these Rules (including, but not limited to, the specific Submission Requirements listed
                                below in Rule 7) (all as determined by Sponsor in its sole and absolute discretion) will be disqualified and will not be
                                eligible for entry in this Contest.
                                <br> Upon clicking “SUBMIT”, you will be eligible to earn one (1) Entry (each, an “Entry” and collectively, the “Entries”) in
                                the Contest. To be eligible, your Entry must be submitted and received in accordance with these Rules during the Entry Period.
                            </li>
                            <li>ENTRY LIMIT:<br> <u>There is no limit to the number of Entries per person, but each Image used to enter must be original and unique.</u> If it is
                            discovered by the Sponsor (using any evidence or other information made available to or otherwise discovered by the Sponsor)
                            that any person has attempted to: (i) submit the same Image more than one (1) time and/or an Image that is not original to
                            them; and/or (ii) use multiple names, multiple identities, multiple email addresses, any automated, macro, script, robotic
                            or other system(s) or program(s) and/or any other means not in keeping with the Sponsor’s interpretation of the letter and
                            spirit of these Rules to enter or otherwise participate in or to disrupt this Contest; then he/she may be disqualified from
                            the Contest in the sole and absolute discretion of the Sponsor. The Contest Parties and each of their respective agents,
                            employees, directors, successors, and assigns (collectively, the “Released Parties”) are not responsible for late, lost,
                            misdirected, delayed, incomplete or incompatible Entries (all of which are void). An Entry may be rejected if, in the sole
                            and absolute discretion of the Sponsor: (i) the Entry is not submitted and received in accordance with these Rules during
                            the Entry Period; and/or (ii) the Image accompanying the Entry is not in compliance with these Rules (including, but not
                            limited to, the specific Submission Requirements listed below in Rule 7) (all as determined by Sponsor in its sole and absolute
                            discretion).
                            </li>
                            <li>VERIFICATION:<br>All Entries, Images and entrants are subject to verification at any time and for any reason. The Sponsor reserves the right,
                            in its sole and absolute discretion, to require proof of identity and/or eligibility (in a form acceptable to the Sponsor – including, without limitation,
                            government issued photo identification): (i) for the purposes of verifying an individual’s eligibility to participate in
                            this Contest; (ii) for the purposes of verifying the eligibility and/or legitimacy of any Entry, Image(s) and/or any other
                            information entered (or purportedly entered) for the purposes of this Contest; and/or (iii) for any other reason the Sponsor
                            deems necessary, in its sole and absolute discretion, for the purposes of administering this Contest in accordance with the
                            Sponsor’s interpretation of the letter and spirit of these Rules. Failure to provide such proof to the complete satisfaction
                            of the Sponsor within the timeline specified by the Sponsor may result in disqualification in the sole and absolute discretion
                            of the Sponsor. The sole determinant of the time for the purposes of this Contest will be the official time-keeping device(s)
                            used by the Sponsor.
                            </li>
                            <li>SUBMISSION REQUIREMENTS:<br> BY SUBMITTING AN ENTRY, YOU AGREE THAT THE ENTRY (AND THE IMAGE) COMPLIES WITH ALL CONDITIONS STATED IN THESE RULES. THE
                            RELEASED PARTIES WILL BEAR NO LIABILITY WHATSOEVER REGARDING: (I) THE USE OF YOUR ENTRY (OR ANY COMPONENT THEREOF – INCLUDING,
                            WITHOUT LIMITATION, THE IMAGE); (II) PARTICIPATION IN ANY CONTESTRELATED ACTIVITIES; (III) ANY USE, COLLECTION, STORAGE AND
                            DISCLOSURE OF ANY PERSONAL INFORMATION; AND/OR (IV) IF DECLARED A WINNER, ANY PRIZES (INCLUDING ANY USE OR MISUSE OF ANY
                            PRIZES). THE RELEASED PARTIES SHALL BE HELD HARMLESS BY YOU IN THE EVENT IT IS DISCOVERED THAT YOU HAVE DEPARTED FROM OR
                            NOT OTHERWISE FULLY COMPLIED WITH ANY OF THESE RULES. THIS RELEASE AND INDEMNITY SHALL CONTINUE IN FORCE FOLLOWING THE TERMINATION
                            OF THE CONTEST AND/OR AWARDING OF ANY PRIZES.
                                <br> By participating in the Contest, each entrant hereby warrants and represents that any Image he/she submits:
                                <br>
                                <ol type="i">
                                    <li>is/are original to him/her and that the entrant has obtained all necessary rights in and to the Image for the purposes of
                                    entering such Image in the Contest;</li>
                                    <li>does not violate any law, statute, ordinance or regulation;</li>
                                    <li>does not contain any reference to or likeness of any identifiable third parties, unless consent has been obtained from all
                                    such individuals and their parent/legal guardian if they are under the age of majority in their jurisdiction of residence;</li>
                                    <li>will not give rise to any claims whatsoever, including, without limitation, claims of infringement, invasion of privacy or
                                    publicity, or infringe on any rights and/or interests of any third party; and</li>
                                    <li>is/are not defamatory, trade libelous, pornographic or obscene, and further that it will not contain, depict, include, discuss
                                    or involve, without limitation, any of the following: nudity; alcohol/drug consumption or smoking; explicit or graphic sexual
                                    activity, or sexual innuendo; crude, vulgar or offensive language and/or symbols; derogatory characterizations of any ethnic,
                                    racial, sexual, religious or other groups (including, without limitation, any competitors of Sponsor); content that endorses,
                                    condones and/or discusses any illegal, inappropriate, risky or dangerous behaviour or conduct; personal information of individuals,
                                    including, without limitation, names, telephone numbers and addresses (physical or electronic); commercial messages, comparisons
                                    or solicitations for products or services other than products of Sponsor; any identifiable third party products, trade-marks,
                                    brands and/or logos, other than those of Sponsor (e.g. any clothing worn and/or products appearing in your Image must not
                                    contain any visible logos, trade-marks or other third party materials unless the appropriate consents have been obtained
                                    --- note: all identifiable third party products, trade-marks, brands and/or logos for which consent has not been obtained
                                    by the entrant must be blurred out so as to be unrecognizable); conduct or other activities in violation of these Rules;
                                    and/or any other materials that are or could be considered inappropriate, unsuitable or offensive, all as determined by the
                                    Sponsor in its sole and absolute discretion.
                                    </li><br> The Sponsor and/or its promotional agency or designated content moderator (the “Reviewer”) reserves the right to screen all
                                    Images. Any Image that the Reviewer deems, in its sole and absolute discretion, to violate the terms and conditions set forth
                                    in these Rules is subject to disqualification. The Reviewer reserves the right, in its sole and absolute discretion at any
                                    time and for any reason, to request an entrant to modify, edit and/or resubmit his or her Image (or any part thereof) in
                                    order to ensure that the Image complies with these Rules, or for any other reason.<br>If such an action is necessary at any point during or after the Contest, then the Sponsor reserves the right, in its sole
                                    discretion, to take whatever action it deems necessary based on the circumstances to ensure that the Contest is being conducted
                                    in accordance with the Sponsor’s interpretation of the letter and spirit of these Rules.
                                </ol>
                            </li>
                            <li>LICENSE:<br> By entering the Contest and submitting an Entry, each entrant: (i) grants to the Sponsor, in perpetuity, a non-exclusive,
                            royalty-free license to publish, display, reproduce, modify, edit or otherwise use his/her Image (and each component thereof),
                            in whole or in part, for advertising or promoting the Contest or in connection with the advertising or promotion of eggs
                            or egg-related products; (ii) waives all moral rights in and to his/her Image in favour of the Sponsor (and anyone authorized
                            by the Sponsor to use such Image); and (iii) agrees to release and hold harmless the Released Parties from and against any
                            and all claims, damages, liabilities, costs, and expenses arising from use of his/her Image (or any component thereof), including,
                            without limitation, any claim based on publicity rights, defamation, invasion of privacy, copyright infringement, trade-mark
                            infringement or any other intellectual property related or other cause of action whatsoever.
                                
                            </li>
                            <li>THE PRIZES:<br>
                                <u>Grand Prize:</u>There is one (1) Grand Prize (the “Grand Prize”) available to be won consisting of one (1) cheque for three thousand dollars
                                ($3,000 CAD) payable in the name of the confirmed winner.<br>Without limiting the generality of the foregoing, the following general conditions apply to the Grand Prize: (i) Grand Prize
                                must be accepted as awarded and is not transferable or assignable (except as may be specifically permitted by Sponsor in
                                its sole and absolute discretion); (ii) no substitutions are permitted, except at Sponsor’s option; (iii) Sponsor reserves the right at any time to substitute the Grand
                                Prize for any reason with a prize of equal or greater value.
                                <br><u>Secondary Prizes:</u>There are ten (10) Secondary Prizes (each a “Secondary Prize”, collectively “Secondary Prizes”) available to be won, each
                                consisting fifty two (52) coupons, each redeemable for one (1) dozen eggs, valid until December 2019. Each Secondary Prize
                                has an approximate retail value (“ARV”) of up to $169.00 CAD. . Each Secondary Prize must be accepted as awarded and is not
                                transferable, assignable or convertible to cash (except as may be specifically permitted by Sponsor in its sole and absolute
                                discretion). No substitutions are permitted, except at Sponsor’s option. Sponsor reserves the right, in its sole and absolute
                                discretion, to substitute any Secondary Prize or a component thereof with a prize of equal or greater retail value, including,
                                without limitation, but at Sponsor’s sole and absolute discretion, a cash award. All coupons are subject to the terms and
                                conditions of the issuer.
                                <br><u>Early Bird Prizes:</u>The first fifty (50) eligible participants to complete an eligible Entry in accordance with these Rules (as determined by
                                the Sponsor in its sole and absolute discretion) will each be eligible to win an Early Bird Prize (subject to compliance
                                with these Rules) (“Early Bird Prize”), each consisting of four (4) coupons, each redeemable for one (1) dozen eggs. Each
                                Early Bird Prize has an ARV of $13.00. Each Early Bird Prize must be accepted as awarded and is not transferable, assignable
                                or convertible to cash (except as may be specifically permitted by Sponsor in its sole and absolute discretion). No substitutions
                                are permitted, except at Sponsor’s option. Sponsor reserves the right, in its sole and absolute discretion, to substitute
                                any Early Bird Prize or a component thereof with a prize of equal or greater retail value, including, without limitation,
                                but at Sponsor’s sole and absolute discretion, a cash award. All coupons are subject to the terms and conditions of the issuer.
                                The odds of winning an Early Bird Prize depend on the number of eligible entries submitted and the speed with which eligible
                                participants complete a valid Entry in accordance with these Rules. There is a limit of one (1) Early Bird Prize per person.
                                <br> The Grand Prize, Secondary Prizes and Early Bird Prizes will be referred to collectively as “Prizes” and are each a “Prize.”
                                <br> None of the Released Parties makes any representation or offers any warranty, express or implied, as to the quality or fitness
                                of any Prize awarded in connection with the Contest. To the fullest extent permitted by applicable law, each confirmed winner
                                understands and acknowledges that he or she may not seek reimbursement or pursue any legal or equitable remedy from either
                                the Sponsor or any of the other Released Parties should his/her Prize fail to be fit for its purpose or is in any way unsatisfactory.
                                For greater certainty and the avoidance of any doubt, by accepting a Prize, each confirmed winner agrees to waive all recourse
                                against the Sponsor and all of the other Released Parties if his/her Prize or a component thereof does not prove satisfactory,
                                either in whole or in part. There is a limit of one (1) Secondary or Grand Prize per person and one (1) Early Bird Prize
                                per person.
                                <br>
                        
                        
                            </li>
                            <li>ELIGIBLE SECONDARY AND GRAND PRIZE WINNER SELECTION PROCESS (SPONSOR JUDGING):<br>A panel of judges (the “Contest Judges”) appointed by the Sponsor will judge each eligible Entry on the basis of the following
                            criteria:<br>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>
                                            Criteria
                                        </th>
                                        <th>
                                            Scoring
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1. Overall appearance</td>
                                            <td>50%</td>
                                        </tr>
                                        <tr>
                                            <td>2. Creativity and originality</td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>3. Craftsmanship</td>
                                            <td>20%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <u>Judging:</u>Each Entry will be given a score (the “Score”) by the Contest Judges. Odds of being selected as the eligible selected entrant
                                of a Prize depend on the number and calibre of eligible Entries submitted and received in accordance with these Rules. There
                                will be eleven (11) eligible selected entrants associated with the top eleven (11) eligible Entries based on Score (as determined
                                by the Contest Judges, in their sole and absolute discretion). The highest scoring selected entrant will be selected as the
                                potential winner of the Grand Prize and the next ten (10) highest scoring selected entrants will be potential winners of
                                a Secondary Prize (subject to compliance with these Rules). In the event of a tie between two or more eligible Entries based
                                on Score, the eligible selected entrant associated with the eligible Entry – from amongst all such eligible Entries that
                                are tied – with the highest score on Criteria 1 (followed in the event of a further tie by Criteria 2, then Criteria 3) will
                                be selected as the eligible selected entrant of a Prize. In the event of an exact tie based on criteria 1, 2 and 3, a new
                                panel of judges will be appointed by the Sponsor to break the tie in accordance with the preceding procedure. Judging is
                                scheduled to be completed on or about October 29, 2018 (the “Selection Date”). Eligible Secondary Prize selected entrants
                                will be announced on October 30, 2018 and the eligible Grand Prize selected entrant will be announced on November 2, 2018.
                            </li>
                            <li>ELIGIBLE SECONDARY AND GRAND PRIZE WINNER NOTIFICATION PROCESS:<br> The Sponsor or its designated representative will make a minimum of three (3) attempts to contact each selected entrant within
                            five (5) business days of their Selection Date. If selected entrant cannot be contacted as outlined above, or if there is
                            a return of any notification as undeliverable; then he/she may, in the sole and absolute discretion of the Sponsor, be disqualified
                            (and, if disqualified, will forfeit all rights to the applicable Prize) and the Sponsor reserves the right, in its sole and
                            absolute discretion and time permitting, to select an alternate eligible selected entrant from among the remaining eligible
                            Entries in accordance with the applicable procedures outlined in Rule 10 (in which case the foregoing provisions of this
                            section shall apply to such newly selected entrant).
                            </li>
                            <li>ELIGIBLE SECONDARY AND GRAND PRIZE WINNER CONFIRMATION PROCESS:<br> NO ONE IS A WINNER UNLESS AND UNTIL THE SPONSOR OFFICIALLY CONFIRMS HIM/HER AS A WINNER IN ACCORDANCE WITH THESE RULES, EVEN
                            IF SUCH PERSON IS ANNOUNCED AS A WINNER OR AN ELIGIBLE WINNER. BEFORE BEING DECLARED AS A CONFIRMED PRIZE WINNER, each eligible
                            selected entrant will be required to: (a) correctly answer a mathematical skilltesting question without mechanical or other
                            aid (which may, in the sole and absolute discretion of the Sponsor, be administered online, by email or other electronic
                            means, by telephone, or in the Sponsor’s form of declaration and release); and (b) sign and return within five (5) business
                            days of notification the Sponsor’s declaration and release form, which (among other things): (i) confirms continuing compliance
                            with these Rules; (ii) acknowledges acceptance of the applicable Prize (as awarded); and (iii) releases the Released Parties
                            from any and all liability in connection with this Contest, his/her participation therein and/or the awarding and use/misuse of the applicable Prize or any portion thereof.
                            If a selected entrant: (a) fails to return the properly executed Contest documents within the specified time; (b) cannot
                            accept (or is unwilling to accept) the applicable Prize (as awarded) for any reason; (c) fails to fully comply with all requirements
                            contemplated in these Rules (including, but not limited, the requirement to correctly answer a mathematical skill-testing
                            question); and/or (d) is determined to be in violation of these Rules (all as determined by the Sponsor in its sole and absolute
                            discretion); then he/she will be disqualified (and will forfeit all rights to the applicable Prize) and the Sponsor reserves
                            the right, in its sole and absolute discretion and time permitting, to select an alternate eligible entrant from among the
                            remaining eligible Entries in accordance with the applicable procedures outlined in Rule 10 (in which case the foregoing
                            provisions of this section shall apply to such newly selected entrant).
                                
                            </li>
                            <li>
                                ELIGIBLE EARLY BIRD PRIZE NOTIFICATION AND CONFIRMATION PROCESS<br>BEFORE BEING DECLARED AS A CONFIRMED EARLY BIRD PRIZE WINNER, and within five (5) business days of being one of the first
                                fifty (50) valid Contest entrants, each eligible Early Bird selected entrant will be sent an email containing a mathematical
                                skill testing question. Each eligible entrant will be required to reply to the email and correctly answer the mathematical
                                skill-testing question without mechanical or other aid within three (3) business days of receipt. If a selected entrant:
                                (a) fails to reply to the email within the specified time; or (b) does not correctly answer a mathematical skill-testing
                                question; and/or (c) is determined to be in violation of these Rules (all as determined by the Sponsor in its sole and absolute
                                discretion); then he/she will be disqualified (and will forfeit all rights to the applicable Early Bird Prize) and the Sponsor
                                reserves the right, in its sole and absolute discretion and time permitting, to select the next eligible entrant from among
                                the remaining eligible Entries in accordance with the applicable procedures outlined in Rule 9 (in which case the foregoing
                                provisions of this section shall apply to such newly selected entrant).
                            </li>
                            <li>
                                GENERAL CONDITIONS:<br>This Contest is subject to all applicable federal, provincial/territorial and municipal laws. 
                                The decisions of the Sponsor
                                with respect to all aspects of this Contest are final and binding on all entrants without right of appeal. ANYONE DEEMED
                                BY THE SPONSOR TO BE IN VIOLATION OF THE SPONSOR’S INTERPRETATION OF THE LETTER AND/OR SPIRIT OF THESE RULES FOR ANY REASON
                                IS SUBJECT TO DISQUALIFICATION IN THE SOLE AND ABSOLUTE DISCRETION OF THE SPONSOR AT ANY TIME.
                                <br> The Released Parties will not be liable for: (i) any failure of the Website and/or any other website or any platform during
                                the Contest; (ii) any technical malfunction or other problems of any nature whatsoever, including, without limitation, those
                                relating to the telephone network or lines, computer on-line systems, servers, access providers, computer equipment or software;
                                (iii) the failure of any Entry, Image, and/or other information to be received, captured, recorded or otherwise work properly
                                for any reason whatsoever, including, but not limited to, technical problems or traffic congestion on the internet or at
                                any website; (iv) any injury or damage to an entrant’s or any other person’s computer or other device related to or resulting
                                from participating in the Contest; (v) anyone being incorrectly and/or mistakenly identified as a winner or eligible winner;
                                and/or (vi) any combination of the above.
                                <br>
                                The Sponsor reserves the right, subject only to the approval of the Régie des alcools, des courses et des jeux (the “Régie”)
                                in Quebec, to withdraw, amend or suspend this Contest (or to amend these Rules) in any way, in the event of any cause beyond
                                the reasonable control of the Sponsor that interferes with the proper conduct of this Contest as contemplated by these Rules,
                                including, without limitation, any error, problem, computer virus, bugs, tampering, unauthorized intervention, fraud or failure
                                of any kind whatsoever. Any attempt to undermine the legitimate operation of this Contest in any way (as determined by Sponsor
                                in its sole and absolute discretion) may be a violation of criminal and civil laws and should such an attempt be made, the
                                Sponsor reserves the right to seek remedies and damages to the fullest extent permitted by law. The Sponsor reserves the
                                right, subject only to the approval of the Régie in Quebec, to cancel, amend or suspend this Contest, or to amend these Rules,
                                in any way without prior notice or obligation, in the event of any accident, printing, administrative, or other error of
                                any kind, or for any other reason whatsoever.
                                <br>
                                By entering this Contest, each entrant expressly consents to the Sponsor, its agents and/or representatives, storing, sharing
                                and using the personal information submitted for the purpose of administering the Contest and in accordance with Sponsor’s
                                privacy policy (available at: http://www.eggfarmers.ca/privacy-policy/). This section does not limit any other consent(s)
                                that an individual may provide the Sponsor or others in relation to the collection, use and/or disclosure of their personal
                                information.
                                <br>
                                The Sponsor reserves the right, subject only to the approval of the Régie in Quebec, to adjust any of the dates, timeframes
                                and/or other Contest mechanics stipulated in these Rules, to the extent deemed necessary by the Sponsor, for purposes of
                                verifying compliance by any entrant, Entry, Image(s) and/or other information with these Rules, or as a result of any technical
                                or other problems, or in light of any other circumstances which, in the opinion of the Sponsor, in its sole and absolute
                                discretion, affect the proper administration of the Contest as contemplated in these Rules, or for any other reason.
                                <br>
                                For Quebec Residents: Any litigation respecting the conduct or organization of a publicity contest may be submitted to the
                                Régie des alcools, des courses et des jeux for a ruling. Any litigation respecting the awarding of a prize may be submitted
                                to the board only for the purpose of helping the parties reach a settlement.
                                <br>
                                In the event of any discrepancy or inconsistency between the terms and conditions of these English Rules and disclosures
                                or other statements contained in any Contest-related materials, including, but not limited to, the French version of these
                                Rules and/or any instructions or interpretations of these Rules given by any representative of the Sponsor, the terms and
                                conditions of these English Rules shall prevail, govern and control to the fullest extent permitted by law.
                                <br>
                                The invalidity or unenforceability of any provision of these Rules shall not affect the validity or enforceability of any
                                other provision. In the event that any provision is determined to be invalid or otherwise unenforceable or illegal, these
                                Rules shall otherwise remain in effect and shall be construed in accordance with the terms as if the invalid or illegal provision
                                were not contained herein.
                                <br>
                                To the fullest extent permitted by applicable law, all issues and questions concerning the construction, validity, interpretation
                                and enforceability of these Rules or the rights and obligations of participants, Sponsor or any of the other the Released
                                Parties in connection with the Contest will be governed by and construed in accordance with the domestic laws of the Province of Ontario and the federal laws of Canada
                                applicable therein, without giving effect to any choice of law or conflict of law rules or provisions that would cause the
                                application of any other jurisdiction’s laws. The parties hereby consent to the exclusive jurisdiction and venue of the courts
                                located in Ontario in any action to enforce (or otherwise relating to) these Rules or relating to this Contest.

                            </li>
                        </ol>
                        <b style='font-size:16px; color:red'>Mini Rules:</b><br>
                        <b style='font-size:16px; color:red'>NO PURCHASE NECESSARY.</b>Contest closes October 25, 2018 (11:59:59 p.m. ET). Open to residents of Canada who are legal age of majority. One grand
                        prize consisting of a cheque for $3,000; 10 secondary prizes each consisting of 52 coupons redeemable for a dozen eggs, ARV
                        $169.00; odds depend on number and quality of eligible entries. 50 early bird prizes each consisting of 4 coupons redeemable
                        for a dozen eggs, ARV $13.00; odds depend on number of eligible entries and the speed with which eligible entrants complete
                        a valid entry. Skill-testing question required. Full rules including entry, judging and prize information at EggsAreGood.ca/contest.
                    
                        <hr> {{-- french version --}}
                        
                        <span style='font-size:16px; font-weight:bold; text-align:center !important'>LE PRÉSENT CONCOURS S’ADRESSE UNIQUEMENT AUX RÉSIDENTS DU CANADA<br>AUCUN ACHAT REQUIS NI AUCUN PAIEMENT. UN ACHAT OU UN PAIEMENT, 
                            DE QUELQUE NATURE QU’IL SOIT, N’AUGMENTERA PAS VOS CHANCES
                        DE GAGNER ET N’AURA PAS NON PLUS D’INCIDENCE SUR CELLES-CI.<br> Des frais d’utilisation de données standard s’appliquent aux participants qui choisissent de prendre part au concours au
                        moyen d’un appareil mobile. Veuillez vous renseigner auprès de votre fournisseur de services afin de connaître les prix,
                        les conditions de service et les tarifs avant de participer au moyen de votre appareil mobile.</span>
                        
                        <ol>
                            <li>DATES IMPORTANTES<br>La période de participation au concours Exposez vos chef-d’oeufs (le « concours ») commence le 25 septembre 2018 à 12 h 01
                            min 00 s heure de l’Est (« HE ») et se termine le 25 octobre 2018 à 23 h 59 min 59 s HE (la « période de participation »).
                            </li>
                            <li>ADMISSIBILITÉ:<br>Le concours s’adresse aux résidents du Canada qui ont atteint l’âge de la majorité dans leur province ou territoire de résidence
                            au moment de l’inscription; à l’exception des employés, représentants ou mandataires (et des personnes domiciliées avec eux,
                            qu’elles aient ou non un lien de parenté avec eux) de l’Office canadien de commercialisation des oeufs (exerçant ses activités
                            sous l’appellation Les producteurs d’oeufs du Canada) (le « commanditaire »), ses filiales, fournisseurs de prix, agences
                            de publicité ou de promotion et toute entité ou tout individu ayant participé à la conception, à la production, à l’administration,
                            au jugement ou à l’exécution du concours (collectivement avec le commanditaire, les « parties au concours »).
                            </li>
                            <li>ACCEPTATION D’ÊTRE LIÉ PAR LE RÈGLEMENT:<br>En participant au présent concours, vous confirmez que vous avez lu les modalités du présent règlement officiel (le « règlement
                            ») et que vous acceptez d’être lié par celui-ci.</li>
                            <li>PARTICIPATION<br>Pour participer, rendez-vous à EggsAreGood.ca/contest (le « site Web ») durant la période de participation et suivez les
                            instructions à l’écran qui vous guideront dans les étapes suivantes :<br>
                                <ol type='a'>
                                    <li>Obtenir le bulletin officiel de participation au concours (le « bulletin de participation »).</li>
                                    <li>Remplir le bulletin de participation en y inscrivant tous les renseignements requis, ce qui comprend : i) votre nom complet;
                                    ii) votre adresse de courriel; iii) et votre numéro de téléphone, y compris l’indicatif régional.</li>
                                    <li>Téléverser une (1) image (l’« image ») unique d’une oeuvre de votre création qui met en vedette (ou autrement démontre comment
                                    vous mettriez en vedette) au moins un oeuf comme étant un de ses ingrédients clés (le « thème ») REMARQUE IMPORTANTE : Il
                                    n'est pas nécessaire de présenter de vrais oeufs dans l'image et le fait de présenter de vrais oeufs n'augmentera pas vos
                                    chances de gagner dans le cadre du présent concours, ni n'aura d'incidence sur celles-ci.
                                        <br><br>REMARQUE IMPORTANTE : Pour être admissible, votre image doit être : (i) dans un des formats suivants : JPG, TIF, BMP, PNG;
                                        (ii) un fichier dont la taille fait un minimum de 2 Mb et un maximum de 12 Mb; et (iii) conforme au présent règlement (y
                                        compris, notamment, aux exigences relatives à la soumission énumérées ci-dessous à la règle 7)</li>
                                    <li>Confirmer que vous avez lu le présent règlement et que vous acceptez d’être légalement lié par celui-ci.</li>
                                    <li>Cliquer sur « SOUMETTRE ».</li>
                                </ol><br> Pour être admissible, votre image doit : (i) respecter le thème; et (ii) être conforme au présent règlement, y compris, notamment,
                                aux exigences relatives à la soumission énumérées ci-dessous à la règle 7 (le tout, comme le détermine le commanditaire à
                                son entière et absolue discrétion). Une image qui ne respecte pas le présent règlement (y compris, notamment, les exigences
                                relatives à la soumission énumérées ci-dessous à la règle 7) (le tout, comme le détermine le commanditaire à son entière
                                et absolue discrétion) sera disqualifiée et vous ne serez pas admissible à recevoir une participation au présent concours.
                                <br> En cliquant sur « SOUMETTRE », vous serez admissible à recevoir une (1) participation (chacune, une « participation » et,
                                collectivement, les « participations ») au concours. Pour être admissible, votre participation doit être soumise et reçue
                                conformément au présent règlement pendant la période de participation.
                            </li>
                            <li>NOMBRE DE PARTICIPATIONS<br> <u>Il n’y a pas de limite de participation par personne, mais chaque image utilisée pour participer au concours doit être originale
                            et unique.</u> 
                                commanditaire découvre (à l’aide d’une preuve ou d’un autre renseignement mis à la disposition du commanditaire ou autrement
                                découvert par le commanditaire) qu’une personne a tenté i) de soumettre la même image plus d’une (1) fois ou une image dont
                                elle n’est pas l’auteur, ou ii) de s’inscrire ou autrement participer au présent concours ou de nuire à son bon fonctionnement
                                en utilisant plusieurs noms, identités, adresses de courrier électronique, ou un moyen automatisé, une macro, un script,
                                une aide robotique, un autre système ou programme, ou une autre façon de déroger de l’interprétation par le commanditaire
                                de la lettre et de l’esprit du présent règlement, elle pourrait se voir exclue du concours à l’entière et absolue discrétion
                                du commanditaire. Les parties au concours et chacun de leurs mandataires, employés, dirigeants, successeurs et ayants droit
                                respectifs (collectivement, les « parties exonérées ») ne sont pas responsables des participations reçues en retard, perdues,
                                mal acheminées, retardées, incomplètes ou incompatibles (lesquelles seront toutes déclarées nulles). Toute participation pourrait être rejetée à l’entière
                                et absolue discrétion du commanditaire si : i) le bulletin de participation n’est pas soumis et reçu conformément au présent
                                règlement pendant la période du concours; ou ii) si l’image qui accompagne la participation n’est pas conforme au présent
                                règlement (y compris, notamment, aux exigences relatives à la soumission énumérées ci-dessous à la règle 7) (le tout, comme
                                le détermine le commanditaire à son entière et absolue discrétion).
                            </li>
                            <li>VÉRIFICATION:<br>Le commanditaire se réserve le droit, à son entière et absolue discrétion, d’exiger une preuve d’identité ou d’admissibilité
                            (sous une forme jugée acceptable par le commanditaire, y compris, notamment, une pièce d’identité avec photo émise par le
                            gouvernement) : i) pour vérifier l’admissibilité d’une personne au présent concours ; ii) pour vérifier l’admissibilité ou
                            la légitimité d’une participation, d’une image ou de toute autre information inscrites (ou prétendument inscrites) aux fins
                            du présent concours; et iii) pour tout autre motif lorsque le commanditaire le juge nécessaire, à son entière et absolue
                            discrétion, et ce, aux fins de l’administration du présent concours conformément à l’interprétation par le commanditaire
                            de la lettre et de l’esprit du présent règlement. À défaut de fournir une telle preuve à l’entière satisfaction du commanditaire
                            dans les délais impartis par le commanditaire, le participant pourrait être exclu du concours à l’entière et absolue discrétion
                            du commanditaire. Les dispositifs de chronométrage officiels du commanditaire constitueront le seul moyen permettant d’attester
                            l’heure dans le cadre de ce concours.
                            </li>
                            <li>EXIGENCES RELATIVES À LA SOUMISSION<br> EN SOUMETTANT UNE PARTICIPATION, VOUS CONFIRMEZ QUE LA PARTICIPATION (ET L’IMAGE) RESPECTE TOUTES LES MODALITÉS DÉFINIES
                            DANS LE PRÉSENT RÈGLEMENT. LES PARTIES EXONÉRÉES N’ASSUMENT AUCUNE RESPONSABILITÉ QUELLE QU’ELLE SOIT À L’ÉGARD : (I) DE
                            L’UTILISATION DE VOTRE PARTICIPATION (OU D’UN DE SES ÉLÉMENTS – Y COMPRIS, NOTAMMENT, L’IMAGE); (II) DE TOUTE PARTICIPATION
                            À TOUTE ACTIVITÉ LIÉE AU CONCOURS; (III) DE L’UTILISATION, LA COLLECTE, LA CONSERVATION ET LA DIVULGATION DE TOUT RENSEIGNEMENT
                            PERSONNEL; ET (IV) SI VOUS ÊTES DÉCLARÉ GAGNANT, DE TOUT PRIX (Y COMPRIS DE L’UTILISATION OU DU MAUVAIS USAGE D’UN PRIX).
                            VOUS ACCEPTEZ DE TENIR INDEMNES LES PARTIES EXONÉRÉES SI L’ON DÉCOUVRE ULTÉRIEUREMENT QUE VOUS AVEZ DÉROGÉ AU PRÉSENT RÈGLEMENT
                            OU QUE VOUS NE VOUS ÊTES PAS ENTIÈREMENT CONFORMÉ À CHAQUE DISPOSITION DU RÈGLEMENT. LA PRÉSENTE EXONÉRATION DE RESPONSABILITÉ
                            ET INDEMNISATION DEMEURERA EN VIGUEUR APRÈS LA FIN DU CONCOURS ET L’ATTRIBUTION DE TOUT PRIX.
                             <br> En prenant part au concours, chaque participant déclare et garantit, par les présentes, que chaque image soumise :
                                <br>
                                <ol type="i">
                                    <li>est de son cru et que le participant a obtenu tous les droits requis relativement à l’image l'autorisant à la soumettre dans
                                    le cadre du concours;</li>
                                    <li>n’enfreint aucune loi, législation, ordonnance et réglementation;</li>
                                    <li>ne contient aucune référence ou ressemblance à des tiers identifiables, à moins d’avoir obtenu leur consentement écrit ou
                                    celui de leur père, leur mère ou leur tuteur légal s’ils sont mineurs dans leur territoire de résidence;</li>
                                    <li>ne donnera pas lieu à aucune réclamation, y compris, notamment, pour entrave ou atteinte à la vie privée ou aux droits de
                                    publicité, ne violera aucun droit ou intérêt d’un tiers;</li>
                                    <li>n’est nullement diffamatoire, commercialement diffamatoire, pornographique ou obscène et, en outre, ne contient, ne décrit,
                                    n’aborde et ne comprend, sans aucune restriction, rien de ce qui suit : nudité; consommation d’alcool, de drogue ou de tabac;
                                    activité sexuelle explicite ou graphique, ou insinuation à caractère sexuel; langage grossier, vulgaire ou choquant; représentations
                                    choquantes de tout groupe ethnique, racial, sexuel, religieux ou autre (notamment tout compétiteur du commanditaire); contenu
                                    qui approuve, tolère, évoque ou aborde un comportement illégal, inapproprié ou hasardeux; renseignements personnels de quiconque,
                                    notamment des noms, numéros de téléphone et adresses (physiques et électroniques); messages commerciaux; comparaisons ou
                                    sollicitations concernant des produits ou services autres que ceux du commanditaire; produit ou marque, marque de commerce
                                    ou logo d’un tiers (autres que ceux du commanditaire); (p. ex., les vêtements portés par des personnes ou les produits apparaissant
                                    dans votre image ne doivent pas contenir de logo, marque de commerce ou autre matériel visible appartenant à un tiers, à
                                    moins d'avoir obtenu le consentement approprié --- remarque : tous les produits, marques de commerce, marques et logos identifiables
                                    appartenant à un tiers pour lesquels le participant n'a obtenu aucun consentement doivent être brouillés afin qu'ils soient
                                    méconnaissables); comportement ou activités contrevenant au présent règlement, et tout autre contenu jugé ou pouvant être
                                    jugé inapproprié, incorrect ou choquant, tel que le détermine le commanditaire à son entière discrétion.
                                    </li><br> Le commanditaire, son agence de promotion ou son modérateur de contenu désigné (le « vérificateur ») se réserve le droit
                                    d’examiner toutes les images. Toute image qui selon le vérificateur, et à son entière et absolue discrétion, enfreint les
                                    modalités décrites dans le présent règlement, peut faire l’objet d’une disqualification. Le vérificateur se réserve le droit,
                                    à son entière et absolue discrétion, à tout moment et pour quelque motif que ce soit, de demander à un participant de modifier,
                                    d’adapter ou de soumettre à nouveau son image (ou un de ses éléments) afin de s’assurer que l’image respecte le présent règlement,
                                    ou pour tout autre motif.<br>Si une telle mesure s’avère nécessaire, à tout moment pendant ou après le concours, le commanditaire se réserve le droit,
                                    à son entière et absolue discrétion, de prendre toutes les mesures qu’il juge opportunes, selon les circonstances, pour s’assurer
                                    que le concours se déroule conformément à l’interprétation par le commanditaire de la lettre et de l’esprit du présent règlement.
                                </ol>
                            </li>
                            <li>LICENCE:<br> En participant au concours et en soumettant une participation, chaque participant se trouve à : i) attribuer au commanditaire
                            et à perpétuité, une licence non exclusive, libre de redevances, lui permettant de publier, d’afficher, de reproduire, de
                            modifier, d’éditer ou d’utiliser autrement son image (et chacun de ses éléments), en totalité ou en partie, aux fins de promouvoir le concours ou à d’autres fins publicitaires
                            ou pour tout autre motif; ii) renoncer à tous droits moraux rattachés à son image, et ce, au profit du commanditaire (et
                            toute personne que le commanditaire autorise à utiliser une telle image); et à iii) consentir à tenir quittes et indemnes
                            les parties au concours à l’égard de toute réclamation, tout dommage, toute responsabilité, tout frais et toute dépense découlant
                            de l’utilisation de son image (ou de chacun de ses éléments), y compris, notamment, toute réclamation fondée sur une cause
                            d’action liée aux droits publicitaires, à la diffamation, à la violation de la vie privée ou du droit d’auteur, à une contrefaçon
                            de marque de commerce ou à tout autre droit de propriété intellectuelle liée de quelque façon que ce soit à la participation.
                        
                            </li>
                            <li>LES PRIX<br>
                                <u>Grand prix :</u>Il y a un (1) grand prix (le « grand prix ») à gagner qui consiste en un (1) chèque de trois-mille dollars (3 000 $CA) payable
                                au nom du gagnant confirmé.<br>Sans restreindre la portée générale de ce qui précède, les conditions générales suivantes s’appliquent au grand prix : (i)
                                le grand prix doit être accepté tel quel et n’est ni transférable ni cessible (sauf en cas de permission expresse du commanditaire,
                                à son entière et absolue discrétion); (ii) aucune substitution n’est permise, sauf si le commanditaire opte pour cette possibilité;
                                (iii) le commanditaire se réserve le droit en tout temps de remplacer le grand prix pour quelque motif que ce soit par un
                                prix de valeur égale ou supérieure.
                                <br><u>Prix secondaires:</u>Il y a dix (10) prix secondaires (chacun, un « prix secondaire », collectivement, des « prix secondaires ») à gagner : chacun
                                consiste en cinquante-deux (52) coupons, chacun échangeable contre une (1) douzaine d’oeufs jusqu’en décembre 2019. Chaque
                                prix secondaire est d'une valeur au détail approximative (« VDA ») pouvant atteindre 169 $CA. Chaque prix secondaire doit
                                être accepté tel quel et n’est ni transférable ni cessible et ni convertible en espèces (sauf en cas de permission expresse
                                du commanditaire, à son entière et absolue discrétion). Aucune substitution n’est permise, sauf si le commanditaire opte
                                pour cette possibilité. Le commanditaire se réserve le droit, à son entière et absolue discrétion, de remplacer un prix secondaire
                                ou un de ses éléments, par un prix de valeur égale ou supérieure, y compris, notamment, mais à l’entière et absolue discrétion
                                du commanditaire, par un prix en espèces. Tous les coupons sont assujettis aux modalités de l’émetteur.
                                <br><u>Prix aux participants hâtifs :</u>Les cinquante (50) premiers participants admissibles ayant soumis une participation admissible qui respecte le présent règlement
                                (comme le détermine le commanditaire à son entière et absolue discrétion) pourront chacun gagner un prix aux participants
                                hâtifs (sous réserve du respect du présent règlement) (« prix aux participants hâtifs ») : chaque prix consiste en quatre
                                (4) coupons, chacun échangeable contre une (1) douzaine d’oeufs. Chaque prix aux participants hâtifs a une VDA de 13 $CA.
                                Chaque prix aux participants hâtifs doit être accepté tel quel et n’est ni transférable, ni cessible, ni monnayable (sauf
                                en cas de permission expresse du commanditaire, à son entière et absolue discrétion). Aucune substitution n’est permise,
                                sauf si le commanditaire opte pour cette possibilité. Le commanditaire se réserve le droit, à son entière et absolue discrétion,
                                de remplacer tout prix aux participants hâtifs, ou un de ses éléments, par un prix de valeur au détail égale ou supérieure,
                                y compris, notamment, mais à l’entière et absolue discrétion du commanditaire, par un prix en espèces. Tous les coupons sont
                                assujettis aux modalités de l’émetteur. Les chances de gagner un prix aux participants hâtifs dépendent du nombre de participations
                                admissibles soumises et de la vitesse à laquelle les participants admissibles soumettent une participation valide conformément
                                au présent règlement. Il y a une limite d’un (1) prix aux participants hâtifs par personne.
                                <br> Le grand prix, les prix secondaires et les prix aux participants hâtifs seront appelés « prix ».
                                <br> Aucune des parties exonérées ne fait de déclaration ni n’offre de garantie, expresse ou implicite, quant à la qualité ou
                                à la pertinence d’un prix remis dans le cadre du concours. Dans la mesure où la loi applicable le permet, chaque gagnant
                                confirmé comprend et accepte qu’il ne peut pas demander un remboursement ni présenter de recours juridique ou en equity au
                                commanditaire ou à l’une des autres parties exonérées si son prix n’est pas adapté à sa fonction ou est insatisfaisant de
                                quelque façon que ce soit. Pour éviter toute ambiguïté, il est entendu qu’en acceptant un prix, chaque gagnant confirmé convient
                                de renoncer à tout recours contre le commanditaire et contre toutes les autres parties exonérées si son prix ou une partie
                                du prix n’est pas satisfaisant en totalité ou en partie. Il y a une limite d’un (1) prix secondaire ou grand prix par personne
                                et d’un (1) prix aux participants hâtifs par personne.
                                <br>
                        
                        
                            </li>
                            <li>PROCESSUS DE SÉLECTION DES GAGNANTS ADMISSIBLES D’UN PRIX SECONDAIRE ET DU GRAND PRIX (ÉVALUATION PAR LE COMMANDITAIRE)<br>Un jury (les « juges du concours ») nommé par le commanditaire évaluera chaque participation admissible en fonction des critères
                            suivants :
                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <th>
                                            Critères
                                        </th>
                                        <th>
                                            Note
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1. Apparence générale</td>
                                            <td>50%</td>
                                        </tr>
                                        <tr>
                                            <td>2. Créativité et originalité</td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>3. Savoir-faire</td>
                                            <td>20%</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <u>Évaluation:</u>Les juges du concours attribueront une note (la « note ») à chaque participation. Les chances d’être retenu comme participant
                                sélectionné admissible à un prix dépendent du nombre et de la qualité des participations admissibles soumises et reçues conformément
                                au présent règlement. Il y aura onze (11) participants sélectionnés admissibles associés aux onze (11) meilleures participations
                                admissibles retenues en fonction de leur note (tel qu’établi par les juges du concours à leur entière et absolue discrétion).
                                Le participant sélectionné ayant obtenu la meilleure note sera retenu comme le gagnant potentiel du grand prix et les dix
                                (10) autres participants sélectionnés ayant obtenu les meilleures notes seront les gagnants potentiels d’un prix secondaire
                                (sous réserve du respect du présent règlement). En cas d’égalité des notes entre deux ou plusieurs participations admissibles,
                                le participant sélectionné admissible dont la participation admissible — parmi toutes les participations admissibles qui
                                sont à égalité — aura obtenu la meilleure note au critère 1 (puis, s’il y a égalité au critère 1, au critère 2 et au critère
                                3) sera retenu comme participant sélectionné admissible à un prix. S’il y a égalité aux critères 1, 2 et 3, un nouveau jury
                                sera nommé par le commanditaire afin de briser l’égalité, en conformité avec le processus précédent. L’évaluation devrait
                                prendre fin le 29 octobre 2018 ou autour de cette date (la « date de sélection »). Les participants sélectionnés admissibles
                                à un prix secondaire seront annoncés le 30 octobre 2018 tandis que le participant sélectionné admissible au grand prix sera
                                annoncé le 2 novembre 2018.
                            </li>
                            <li>PROCESSUS D’AVIS AUX GAGNANTS ADMISSIBLES D’UN PRIX SECONDAIRE ET DU GRAND PRIX<br> Le commanditaire ou son représentant désigné fera au moins trois (3) tentatives pour joindre chaque participant sélectionné
                            dans les cinq (5) jours ouvrables suivant la date de sélection. Si le participant sélectionné ne peut être joint tel que
                            décrit ci-dessus ou si un avis est retourné en tant que courrier non distribuable, le participant pourrait, à l’entière et
                            absolue discrétion du commanditaire, être disqualifié (et, s’il est disqualifié, perdra son droit au prix applicable), et
                            le commanditaire se réserve le droit, si le temps le permet et à son entière et absolue discrétion, de sélectionner un autre
                            participant admissible parmi toutes les participations admissibles restantes conformément aux procédures applicables décrites
                            à la règle 10 (auquel cas les dispositions qui précèdent s’appliqueront au participant nouvellement sélectionné).
                            </li>
                            <li>PROCESSUS DE CONFIRMATION DES GAGNANTS ADMISSIBLES D’UN PRIX SECONDAIRE ET DU GRAND PRIX<br> PERSONNE N’EST UN GAGNANT TANT QUE LE COMMANDITAIRE N’A PAS OFFICIELLEMENT CONFIRMÉ CE FAIT CONFORMÉMENT AU PRÉSENT RÈGLEMENT,
                            MÊME SI ON ANNONCE QUE CETTE PERSONNE EST UN GAGNANT OU UN GAGNANT ADMISSIBLE. AVANT D’ÊTRE DÉCLARÉ GAGNANT CONFIRMÉ DU PRIX,
                            chaque participant sélectionné devra : a) répondre correctement, dans un délai limité et sans aide mécanique ou autre, à
                            une question réglementaire d’arithmétique (laquelle peut, à l’entière et absolue discrétion du commanditaire, lui être posée
                            en ligne, par courriel ou un autre moyen électronique, par téléphone ou dans la formule d’exonération de responsabilité du
                            commanditaire); et b) signer et retourner, dans les cinq (5) jours ouvrables suivant l’avis, la formule d’exonération de
                            responsabilité du commanditaire, qui (entre autres choses) : i) confirme la conformité au présent règlement; ii) reconnaît
                            l’acceptation du prix applicable (tel qu’attribué); et iii) exonère les parties au concours et les parties exonérées de toute
                            responsabilité à l’égard du présent concours, de sa participation à ce concours ou de l’attribution et de l’utilisation ou
                            du mauvais usage du prix applicable ou d’une partie dudit prix. Si un participant sélectionné : a) ne retourne pas les documents
                            du concours dûment signés dans le délai précisé; b) ne peut pas (ou ne veut pas) accepter le prix applicable (tel quel) pour
                            une raison quelconque; (c) ne satisfait pas entièrement à toutes les exigences prévues par le présent règlement (y compris,
                            notamment, celle de répondre correctement à une question d’aptitude mathématique); ou (d) est considéré comme contrevenant
                            au présent règlement (comme le détermine le commanditaire à son entière et absolue discrétion); il pourrait, à l’entière
                            et absolue discrétion du commanditaire, être disqualifié (et, s’il est disqualifié, perdra son droit au prix applicable),
                            et le commanditaire se réserve le droit, si le temps le permet et à son entière et absolue discrétion, de sélectionner un
                            autre participant admissible parmi toutes les participations admissibles restantes conformément aux procédures applicables
                            décrites à la règle 10 (auquel cas les dispositions qui précèdent s’appliqueront au participant nouvellement sélectionné).
                        
                            </li>
                            <li>
                                PROCESSUS D’AVIS ET DE CONFIRMATION DES GAGNANTS ADMISSIBLES D’UN PRIX AUX PARTICIPANTS HÂTIFS<br>AVANT D’ÊTRE DÉCLARÉ GAGNANT CONFIRMÉ D’UN PRIX AUX PARTICIPANTS HÂTIFS, et dans les cinq (5) jours ouvrables suivant la
                                confirmation qu’il est un des cinquante (50) premiers participants valides au concours, chaque participant hâtif sélectionné
                                admissible recevra un courriel contenant une question d’aptitude mathématique. Chaque participant admissible devra répondre
                                au courriel et répondre correctement sans aide mécanique ou autre à la question réglementaire d’arithmétique dans les trois
                                (3) jours ouvrables suivant la réception du courriel. Si un participant sélectionné : a) ne répond pas au courriel dans le
                                délai précisé; ou b) ne répond pas correctement à une question d’aptitude mathématique); ou (c) est considéré comme contrevenant
                                au présent règlement (comme le détermine le commanditaire à son entière et absolue discrétion); il sera disqualifié, à l’entière
                                et absolue discrétion du commanditaire (et perdra son droit au prix aux participants hâtifs applicable), et le commanditaire
                                se réserve le droit, si le temps le permet et à son entière et absolue discrétion, de sélectionner un autre participant admissible
                                parmi toutes les participations admissibles restantes conformément aux procédures applicables décrites à la règle 9 (auquel
                                cas les dispositions qui précèdent s’appliqueront au participant nouvellement sélectionné).
                            </li>
                            <li>
                                CONDITIONS GÉNÉRALES<br>Le concours est assujetti à l’ensemble des lois fédérales, provinciales, territoriales et municipales en vigueur. Les décisions
                                du commanditaire pour toute question liée au présent concours sont définitives, sans appel et lient tous les participants.
                                QUICONQUE A, DE L’AVIS DU COMMANDITAIRE, ENFREINT LA LETTRE OU L’ESPRIT DU PRÉSENT RÈGLEMENT, POUR QUELQUE RAISON QUE CE
                                SOIT, POURRA ÊTRE DISQUALIFIÉ, ET CE, À L’ENTIÈRE ET ABSOLUE DISCRÉTION DU COMMANDITAIRE, ET EN TOUT TEMPS.
                                <br> Les parties exonérées ne sauraient être tenues responsables : i) de toute défaillance du site Web, ou de tout autre site
                                Web et plateforme durant le concours ; ii) de tout problème technique ou autre problème de quelque nature que ce soit, incluant
                                sans s’y restreindre, ceux touchant le réseau ou les lignes téléphoniques, les systèmes informatiques en ligne, les serveurs,
                                les fournisseurs d’accès, le matériel ou le logiciel; iii) de l’impossibilité de recevoir, de saisir, d’enregistrer ou d’utiliser
                                adéquatement une participation, une image ou une autre information pour un motif quelconque, y compris, mais sans s’y limiter,
                                en raison de problèmes techniques ou d’un encombrement sur Internet ou sur un site Web; (iv) de toute panne ou tout dommage
                                subi par l’ordinateur ou un autre appareil du participant ou de toute autre personne en lien avec la participation au concours,
                                ou qui en découle; (v) du fait qu’une personne soit nommée par erreur à titre de gagnant ou de gagnant admissible; vi) de
                                toute combinaison de ce qui précède.
                                <br> Le commanditaire se réserve le droit, sous réserve uniquement de l’approbation de la Régie des alcools, des courses et des
                                jeux (la « Régie ») au Québec, d’annuler, de modifier ou de suspendre le présent concours (ou d’en modifier le règlement)
                                de quelque façon que ce soit, en cas d’événement échappant au contrôle du commanditaire qui nuit au bon déroulement du concours
                                comme le prévoit le présent règlement, y compris mais sans s’y limiter, en cas d’erreur, de problème, de virus informatique,
                                de bogue, de sabotage, d’intervention non autorisée, de fraude ou de défectuosité de quelque nature que ce soit. Toute tentative
                                de nuire au bon déroulement du concours de quelque façon que ce soit (de l’avis du commanditaire et à son entière et absolue
                                discrétion) peut constituer une infraction aux lois criminelles et civiles et, advenant une telle tentative, le commanditaire
                                se réserve le droit d’exercer des recours et de réclamer des dommages-intérêts dans toute la mesure permise par la loi. Le
                                commanditaire, sous réserve uniquement de l’approbation de la Régie au Québec, se réserve le droit d’annuler, de modifier
                                ou de suspendre le présent concours, ou d’en modifier le présent règlement, de quelque façon que ce soit, sans préavis ni
                                obligation, en cas d’accident, d’erreur d’impression, administrative ou autre, ou pour tout autre motif.
                                <br> En participant au présent concours, chaque participant consent expressément à ce que le commanditaire, ses mandataires ou
                                ses représentants stockent, partagent et utilisent les renseignements personnels fournis aux seules fins d’administration
                                du concours et conformément à la politique de protection des renseignements personnels du commanditaire (http://www.eggfarmers.ca/privacy-policy/).
                                La présente section ne limite aucun autre consentement qu’une personne peut donner au commanditaire ou à d’autres relativement
                                à la collecte, à l’utilisation et à la divulgation de ses renseignements personnels.
                                <br> Le commanditaire se réserve le droit, sous réserve uniquement de l’approbation de la Régie au Québec, de modifier les dates,
                                les durées ou d’autres paramètres du concours stipulés dans le présent règlement, dans la mesure jugée nécessaire par le
                                commanditaire, et ce, dans le but de vérifier la conformité de tout participant, de toute participation, de toute image ou
                                de toute autre information au présent règlement, ou à la suite de problèmes techniques ou autres, ou à la lumière de toute
                                autre circonstance qui, de l’avis du commanditaire et à son entière et absolue discrétion, nuit à la bonne administration
                                du concours comme le prévoit le présent règlement ou pour tout autre motif.
                                <br>Pour les résidents du Québec : Un différend quant à l’organisation ou à la conduite d’un concours publicitaire peut être
                                soumis à la Régie des alcools, des courses et des jeux afin qu’il soit tranché. Tout différend quant à l’attribution d’un
                                prix peut être soumis au conseil uniquement pour aider les parties à parvenir à une entente.
                                <br>En cas de divergence ou d’incompatibilité entre les modalités de la version anglaise du règlement et les déclarations ou
                                autres énoncés contenus dans tout autre matériel associé au concours, y compris, notamment, la version française du présent
                                règlement ou toute directive ou interprétation du présent règlement donné par un représentant du commanditaire, les modalités
                                de la version anglaise prévaudront dans toute la mesure permise par la loi.
                                <br>L’invalidité ou l’inexigibilité de toute disposition du présent règlement n’a pas d’effet sur la validité ou la force exécutoire
                                de toute autre disposition. Si une disposition du présent règlement est déclarée invalide, inapplicable ou illégale, le présent
                                règlement demeurera en vigueur et devra être interprété conformément aux conditions qui y sont énoncées, comme si la disposition
                                jugée invalide ou illégale n’en faisait pas partie.
                                <br> Dans la mesure permise par la loi applicable, tous les problèmes et toutes les questions au sujet de l’élaboration, de la
                                validité, de l’interprétation et de l’applicabilité du présent règlement, ou des droits et obligations des participants,
                                du commanditaire ou de toute partie exonérée dans le cadre du concours, seront régis par les lois de la province de l’Ontario
                                et les lois fédérales canadiennes qui y sont applicables, et seront interprétés conformément à ces lois, sans égard aux règles
                                ou aux dispositions liées aux principes de compétence législative ou de conflit des lois qui entraîneraient l’application
                                des lois de tout autre territoire. Les parties acceptent par la présente la compétence exclusive des tribunaux de l’Ontario
                                et consentent à ce que s’y déroule toute action visant à faire appliquer le présent règlement (ou relative au présent règlement)
                                ou toute action relative au présent concours.
                        
                            </li>
                        </ol>
                        <b style='font-size:16px; color:red'>Mini règlement:</b><br>
                        <b style='font-size:16px; color:red'>NO PURCHASE NECESSARY.</b>AUCUN ACHAT REQUIS. Le concours prend fin le 25 octobre 2018 (à 23 h 59 min 59 s HE). Le concours s’adresse aux résidents
                        du Canada qui ont atteint l’âge de la majorité. Un grand prix consistant en un chèque de 3 000 $; 10 prix secondaires consistant
                        chacun en 52 coupons échangeables contre une douzaine d’oeufs, VDA de 169 $; les chances de gagner dépendent du nombre et
                        de la qualité des participations admissibles. 50 prix aux participants hâtifs consistant chacun en 4 coupons échangeables
                        contre une douzaine d’oeufs, VDA de 13 $; les chances de gagner dépendent du nombre de participations admissibles et de la
                        vitesse à laquelle les participants admissibles soumettent une participation valide. Question réglementaire d’arithmétique
                        obligatoire. Règlement complet, y compris de l’information sur la participation, l’évaluation et les prix, à EggsAreGood.ca/contest.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
        

        
        
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