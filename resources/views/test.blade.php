@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{url('/css/upload.css')}}">  
  
    <style>
        
        body{
           
        }
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 80px;
            margin-bottom: 80px;
            
        }
        
    </style> 

    <script>
		 $(window).ready(function(){
                $('.links a').css('visibility','hidden');  
                $("#nav").css('background-color','#fbbc27');
                $("#nav").css('border-color','transparent');
                $('.lang').css('display','none');  
                $('.links a').hover(function(){
                    $(this).css('visibility','hidden');
                    $(this).css('color','#fbbc27');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    
                });
                $('#page1').css('visibility','visible'); 
                $('#page1').text("主頁")
                $("#page1").attr("href",'http://eggsaregood.ca/');
                $('#page1').css('margin-left',450+'px');
                
                $('#page2').css('visibility','visible'); 
                
                $("#page2").text("简体中文")
                $("#page2").attr("href",'http://testsc.eggsaregood.ca/');
                $("#page2").css('font-family','Noto Sans SC');
                $('#page2').css('margin-left',5+'px');
                $('#page1').hover(function(){
                    $(this).css('visibility','visible');
                    $(this).css('border','2px solid white');
                    $(this).css('color','white');
                    },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    
                }); 
                $('#page2').hover(function(){
                    $(this).css('visibility','visible');
                    $(this).css('border','2px solid white');
                    $(this).css('color','white');
                    },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    
                });  

                
                
            });
	</script> 
     <script>
            $(window).on('scroll', function () {
            var pixs = $(document).scrollTop();
            if(pixs>50){
                $("#nav").css('background-color','white');
                $("#nav").css('border-color','#f3f5f6');
                $('.links a').css('border','2px solid white');  
                $('.links a').hover(function(){
                    $(this).css('border','2px solid #fbbb27');
                    $(this).css('color','black');
                },function(){
                    $(this).css('border','2px solid white'); 
                    $(this).css('color','black');
                    
                });   
               
                  
            }else{
              $("#nav").css('background-color','#fbbb27');
              $("#nav").css('border-color','transparent');
                $('.links a').css('border','2px solid #fbbb27');  
                $('.links a').hover(function(){
                    $(this).css('border','2px solid white');
                    $(this).css('color','black');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                     
                });   
                
                   
            } 
    });

    </script>


<body>
    <div id='big_screen'>
        <div class='row compaign_header1'>
            
              <!-- 插入轮播的图片们 -->
              <div class="left">
                <div class='header_title' style="font-family: Noto Sans TC;margin-left: -25px;">「雞蛋大變身」</div>
                <div class='header_title' style="font-family: Noto Sans TC; margin-left: 25px;">有獎遊戲</div>
                <div class='header_sub_title' style=" font-family: Noto Sans TC;">
                    烹調雞蛋並做成特別造型，
                </div>
                <div class='header_sub_title' style=" font-family: Noto Sans TC;">
                    例如動物、人物、物件或風景等，
                </div>
                <div class='header_sub_title' style=" font-family: Noto Sans TC;">
                    拍下照片，填妥下列表格
                </div>
                <div class='header_sub_title' style=" font-family: Noto Sans TC;">
                    並上載作品照片，即有機會贏取:
                </div>
                <div class='header_b' style=" font-family: Noto Sans TC;">
                    ‧頭獎(1名) : $3,000現金
                </div>
                <div class='header_b' style=" font-family: Noto Sans TC;">
                    ‧入圍獎(10名) : 一年免費享用雞蛋
                </div>
                <div class='header_b' style=" font-family: Noto Sans TC;margin-left: 10px;">
                   (52張一打雞蛋換領券)
                </div>
                <div class='header_b' style=" font-family: Noto Sans TC;">
                   ‧首50名參加者: 一個月免費享用雞蛋
                </div>
                <div class='header_b' style=" font-family: Noto Sans TC;margin-left: 10px;">
                   (4 張一打雞蛋換領券)
                </div>

            </div>
             <div class='right'>
                <div id="slideshow">
                <img class="active"src="/images/banner/EFC-contest-img-1.jpg" />
                <img src="/images/banner/EFC-contest-img-2.jpg" />
                <img src="/images/banner/EFC-contest-img-3.jpg" />
            </div>

            </div>
    </div>
</div>
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
   
    <div class="main container" style="margin-top: 200px;">
        <div class='col-xs-12'>
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{session()->get('status')}}
                </div>
            @endif
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li> 
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="title">
               參加「雞蛋大變身」有獎遊戲
            </div>
            <div class='subtitle'>
                請以英文填妥下列表格，然後上載作品照片。作品必須以雞蛋為主要材料之一，
                並由您所製作。參加者必須為加拿大居民。
            </div>
            <label>表格:</label>
            <form id="personal_info" method="POST" action="/newCandidate" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    
                    <div class="col-xs-4 form-detail">
                        <div class='fixl'>
                            <label for="firstname" class="col-xs-6 col-form-label">姓</label>
                        </div>
                        <div class='fixw'>
                            <input type="text" class="form-control" id="firstname" name='firstname' value="{{old('firstname')}}" required>
                        </div>
                    </div>

                    
                    <div class="col-xs-4 form-detail">
                        <div class='fixl'>
                            <label for="lastname" class="col-xs-6 col-form-label">名</label>
                        </div>
                        <div class='fixw'>
                            <input type="text" class="form-control form-control-sm" id="lastname" name='lastname' value="{{old('lastname')}}" 
                        required>
                        </div>
                    </div>
                
                    
                    <div class="col-xs-4 form-detail">
                        <div class='fixl'>
                            <label for="email" class="col-xs-6 col-form-label">電郵地址</label>
                        </div>
                        <div class='fixw'>
                        <input type="email" class="form-control form-control-sm" id="email" name='email' value="{{old('email')}}"
                            required>
                        </div>
                    </div>
                
                   
                    <div class="col-xs-4 form-detail">
                        <div class='fixl'>
                        <label for="phone" class="col-xs-6 col-form-label">電話號碼</label>
                    </div>
                        <div class='fixw'>
                        <input type="number" class="form-control form-control-sm" id="phone" name='phone' value="{{old('phone')}}"
                            required>
                        </div>
                    </div>
                </div>
            </form>
        
                    <div class="img-subtitle">
                        上載照片於此(照片檔案最小為2MB，最大為12MB。檔案格式必須為JPG、TIF、BMP
                        或PNG。直或橫的照片均可。)：
                    </div>
                     {{-- <label>上傳圖片</label> --}}
                        <form  action='/savePic' class="dropzone" id="myDropzone" style="margin-top:20px;border:2px solid rgba(0,0,0,0.3);border-radius:25px;-moz-border-radius:25px;">
                            {{csrf_field()}}
                                    <div class="dz-message">

                                    </div>

                                    

                                    <div class="dropzone-previews" id="dropzonePreview"></div>

                                    <h4 style="text-align: center;color:#428bca;">拖入圖片 <span class="glyphicon glyphicon-hand-down"></span></h4>

                        
                            </form>
                
                     <div id="reading">
                        <a  data-toggle="modal" data-target="#myModal">
                            閱讀條文及條款
                        </a>
                        <!-- 模态框（Modal） -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" 
                                                aria-hidden="true">×
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            閱讀條文及條款
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        1111111
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" 
                                                data-dismiss="modal">關閉
                                        </button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                   

                            <input type="checkbox" name="check" id="read"value="checked" />我已經閱讀條款
                 
                    {{-- <div class="form-group row" style="margin-top: 20px;">
                        
                        <div class='col-xs-3'>
                            <button class="btn btn-success btn-block" type='submit'>
                              提交
                            </button>
                        </div>
                    </div> --}}
                    
            
            <form action="/post" method="post" id="captcha">
                {{ csrf_field() }}
                <button id="submit-bn" type="submit"
                        class="g-recaptcha"
                        data-sitekey=6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI
                        {{-- data-sitekey="6LfjF3EUAAAAAHK1IbaE-A1akVobtyiThDS-A07U" --}}
                        data-callback="OnSubmitFunction">
                    遞 交
                </button>
            </form>



        </div>
    </div>
</body>
@section('footer')
<footer class='clear-top'>
    <div class='col-lg-8'>
        <div class=' footer_link'>
          <li >
            <a href='http://www.eggs.ca/resources' id="footer1"style='font-weight:bold;font-family: Noto Sans TC;'>其他資源(英文)</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/community'id="footer2" style='font-weight:bold;font-family: Noto Sans TC;'>社區消息(英文)</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/about-us' id="footer3"style='font-weight:bold;font-family: Noto Sans TC;'>關於我們(英文)</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/contactus' id="footer4"style='font-weight:bold;font-family: Noto Sans TC;'>聯絡我們(英文)</a>
          </li>
          
        </div>
      </div>
        
        <div class="col-lg-6 copydiv" >
          
          <span id='copyright'>© 2018 Egg Farmers of Canada. All rights reserved </span>
          
        </div>
    
</footer>
 @endsection

    
   
    <!-- <input type="file" name="file" /> -->





    <script>
       Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#myDropzone", {
        url: "/savePic",
        addRemoveLinks: true,
        method: 'post',
        paramName:'image',
        filesizeBase: 1024,
        maxFiles:1,//一次性上传的文件数量上限
        maxFilesize: 12, //MB
        acceptedFiles: ".jpg,.gif,.png", //上传的类型
        dictMaxFilesExceeded: "您最多只能上传1个文件！",
        dictResponseError: '文件上传失败!',
        dictInvalidFileType: "你不能上传该类型文件,文件类型只能是*.jpg,*.gif,*.png。",
        dictFallbackMessage:"浏览器不受支持",
        autoProcessQueue:false,
        dictFileTooBig:"文件过大上传文件最大支持.",
        init: function() {
            this.on('error', function(file, errorMessage) {
                alert("here!");
                var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
                errorDisplay[errorDisplay.length - 1].innerHTML = 'Error 404: The upload page was not found on the server';
            
            });
                $("#submit-bn").click(function (e) {
               
                e.preventDefault();
                myDropzone.processQueue();
                
            });

            // if (file.accepted) {
            //     alert("send!");
            // };
        },
        sending: function(file, xhr, formData) {
            formData.append("filesize", file.size);
            formData.append("email",jquery('#name').val());
            
        },
        success: function (file, response, e) {
            alert("success!");
            alert("response");
            var res = JSON.parse(response);
            if (res.error) {
                $(file.previewTemplate).children('.dz-error-mark').css('opacity', '0.1')
            }
        }
        });
    
        function OnSubmitFunction(token) {
            
            //document.getElementById('personal_info').submit();
            //check();
            //document.getElementById('captcha').submit();
            //alert('personal_info submit!')
           
        }
        
        
        function Check(){  
            var cbs = document.getElementsById("captcha");  
            var b = false;  
            if(cbs.checked){  
                b = true;  

            }  
             
            if(!b){  
                alert("請先閱讀條款");  
                return false;  
            }
            
        }

        
        
           
        

    
    </script>


@stop