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

        @media (max-width:800px) {
            .secondLine{
                
            }

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
            <div class="col-sm-6 left">
                <div class="eggHeader">
                    「雞蛋大變身」<br>
                    <span class='secondLine'>有獎遊戲</span>
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
            <div class="col-sm-6 right">
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
                
                

                <div class="col-xs-12">
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
                <div class="col-xs-12 form-group">
                    <div class='container' id="reading">
                        
                        <a data-toggle="modal" data-target="#myModal" id='checkRead' style="font-size:1.6em">
                           閱讀條文及條款
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 form-group">
                    <input type="checkbox" name="check" id="read" value="checked"><span style="font-size:1.6em">
                        同意條文及條款
                        </span>
                </div>
                <script>
                </script>
                <div class="container">
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
                            <div><a href="./english.pdf" download>Download English Version</a>
                            <a href="./french.pdf" download style='padding-left:50px;'>Download French Version</a></div>
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
                            <li>7. 提交要求：<br>
                            提交參賽作品即表示您同意該參賽作品（及圖片）遵循本規則中規定的所有條件。免責方將不承擔與以下情形相關的任何責任：（I）您的參賽作品（或其任何部分——包括，但不限於，圖片）的使用；（II）任何比賽相關活動的參與；（III）任何個人資料的使用、收集、存儲和披露；和/或（IV）被宣佈為獲獎者時的任何獎品（包括任何獎品的任何使用或濫用）。
                            如果經查明您未遵守或未完全遵守任何比賽規則，您須保護免責方免受傷害。在比賽結束和/或任何獎品發放後，這一免責和補償應繼續有效。<br>
                            參與此次比賽即意味著各參賽者在此聲明並保證其所提交的圖片：<br>
                            <ol type="i">
                                <li>是其原創作品，且參賽者擁有圖片的全部必要權利，有權使用該圖片參與本比賽；</li>
                                <li>不違反任何法律、法規、法令或條例；</li>
                                <li>不得提及任何可辨識的第三方或包含其肖像，但已取得這些個體許可的情形除外，且如果他們不滿所在轄區的法定成年年齡，則必須取得其父母/法定監護人的許可；</li>
                                <li>不會導致任何形式的索賠，包括，但不限於，侵權、侵犯隱私或宣傳或侵犯任何第三方的任何權利和/或利益的索賠；</li>
                                <li>v. 不包含誹謗、商業誹謗、色情或淫穢內容，同時也不包含、描繪、包括、討論或涉及任何以下內容，包括，但不限於：裸體；酒精/毒品消費或吸煙；露骨或生動的性行為或性暗示；粗魯、庸俗或冒犯性的語言和/或符號；對任何民族、種族、性別、 宗教或其他團體的貶損性描述（包括，但不限於，主辦方的任何競爭對手）；認可、寬容和/或討論任何非法、不恰當、有風險或危險行為或行事的內容；某些人的私人資料，包括，但不限於，姓名、電話號碼和地址（無論是實體的還是電子形式）；
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