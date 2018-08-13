<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eggs Campaign</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

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
        white; cursor: inherit; display: block; } #img-upload{ width: 100%; }
    </style> 

    <script>
        $().ready(function(){
            // var h = $(window).height() + "px"; 
            // $('.main').css('height',h);
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

</head>
<body>
    
    <div class="main container">
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
                    <label>Upload Image</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp" name='images'>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload' />
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

                
                
                <div class="form-group row">
                    <div class='col-xs-3 col-xs-offset-6'>
                        <button class="btn btn-primary btn-block" type='reset'>Reset</button>
                    </div>
                    <div class='col-xs-3'>
                        <button class="btn btn-success btn-block" type='submit'>Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>