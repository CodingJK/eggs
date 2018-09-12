@extends('layouts.app')

@section('content')
	<script>
		$(window).ready(function(){
			$(".nav_parent").css('background-color','white');
			$("#nav").css('background-color','white');
			// $(".nav-justified a").css('border-color','white');
			// $(".nav-justified a").css('color','black');
			// $(".nav-justified a").mouseenter( function(){
			// 	$(this).css('border-color','#ffcd32');
			// } ).mouseleave(  function(){
			// 	$(this).css('border-color','white');
			// } );
			$(".apps_link").css('color','#ffcd32');


		});
	</script> 

<body>
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
            <form method="POST" action="/newCandidate" enctype="multipart/form-data" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group row">
                    <label for="firstname" class="col-xs-2 col-form-label">First Name</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="firstname" name='firstname' value="{{old('firstname')}}" required>
                    </div>

                    <label for="lastname" class="col-xs-2 col-form-label">Last Name</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control form-control-sm" id="lastname" name='lastname' value="{{old('lastname')}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-xs-2 col-form-label">Email</label>
                    <div class="col-xs-4">
                        <input type="email" class="form-control form-control-sm" id="email" name='email' value="{{old('email')}}"
                            required>
                    </div>
                
                    <label for="phone" class="col-xs-2 col-form-label">Phone</label>
                    <div class="col-xs-4">
                        <input type="number" class="form-control form-control-sm" id="phone" name='phone' value="{{old('phone')}}"
                            required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-xs-2 col-form-label">Address</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control form-control-sm" id="address" name='address' value="{{old('address')}}" required>
                    </div>
                </div>
            
                <div class="form-group row ">
                    <label for="city" class="col-xs-2 col-form-label">City</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control form-control-sm" id="city" name='city' value="{{old('city')}}" required>
                    </div>
                    <label for="province" class="col-xs-2 col-form-label">Province</label>
                    <div class="col-xs-4">
                        <select class="form-control" id='province' name='province' value="{{old('province')}}">
                            <option value="AB">Alberta</option>
                            <option value="BC">British Columbia</option>
                            <option value="MB">Manitoba</option>
                            <option value="NB">New Brunswick</option>
                            <option value="NL">Newfoundland</option>
                            <option value="NT">Northwest Territories</option>
                            <option value="NS">Nova Scotia</option>
                            <option value="NU">Nunavut</option>
                            <option value="ON">Ontario</option>
                            <option value="PE">Prince Edward Island</option>
                            <option value="QC">Quebec</option>
                            <option value="SK">Saskatchewan</option>
                            <option value="TY">Yukon Territory</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="postalcode" class="col-xs-2 col-form-label">Postal Code</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control form-control-sm" id="postalcode" name='postalcode' value="{{old('postalcode')}}" required>
                    </div>
                    <label for="country" class="col-xs-2 col-form-label">Country</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control form-control-sm" id="country" name='country' value="{{old('country')}}" required>
                    </div>
                </div>

                <div class="form-group row" style='padding:0 15px;'>
                    <img src="" id='myPic'>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-xs-2 col-form-label">Work Title</label>
                    <div class="col-xs-10">
                        <input type="text" class="form-control form-control-sm" id="title" name='title' value="{{old('title')}}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-xs-2 col-form-label">Description</label>
                    <div class="col-xs-10">
                        <textarea name="description" id="description" cols="30" rows="10"class="form-control form-control-sm"></textarea>
                        
                    </div>
                </div>
                
            </form>
            <label>Upload Image</label>
                    <form action="/file-upload" class="dropzone" id="myDropzone" style="margin-top:20px;height: 300px;">
                        <input type="file" name="file" />
                    </form>
             <div class="form-group row" style="margin-top: 20px;">
                    <div class='col-xs-3 col-xs-offset-6'>
                        <button class="btn btn-primary btn-block" type='reset'>
                            <a href='/test' style="color:white;text-decoration: none;">Reset</a>
                        </button>
                    </div>
                    <div class='col-xs-3'>
                        <button class="btn btn-success btn-block" type='submit'>
                            <a href='/testsaved' style="color:white;text-decoration: none;">Create</a>
                        </button>
                    </div>
            </div>
        </div>
    </div>
</body>




    
   
    <!-- <input type="file" name="file" /> -->





    <script>
       
           
            Dropzone.autoDiscover = false;

            var myDropzone = new Dropzone("#myDropzone", {
            url: "/testsaved",
            addRemoveLinks: true,
            method: 'post',
            filesizeBase: 1024,
            maxFiles:1,//一次性上传的文件数量上限
            maxFilesize: 12, //MB
            acceptedFiles: ".jpg,.gif,.png", //上传的类型
            
            
            dictMaxFilesExceeded: "您最多只能上传1个文件！",
            dictResponseError: '文件上传失败!',
            dictInvalidFileType: "你不能上传该类型文件,文件类型只能是*.jpg,*.gif,*.png。",
            dictFallbackMessage:"浏览器不受支持",
            dictFileTooBig:"文件过大上传文件最大支持.",
            init: function() {
               
                this.on('error', function(file, errorMessage) {

                 
                    alert("here!");
                    var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
                    errorDisplay[errorDisplay.length - 1].innerHTML = 'Error 404: The upload page was not found on the server';
                  
                });
              
                if (file.accepted) {
                    alert("send!")
                }
            },
            sending: function(file, xhr, formData) {
                formData.append("filesize", file.size);
            },
            success: function (file, response, e) {
                alert("send!")
                var res = JSON.parse(response);
                if (res.error) {
                    $(file.previewTemplate).children('.dz-error-mark').css('opacity', '0.1')

                }
            }
        });
 
    
    </script>


@stop