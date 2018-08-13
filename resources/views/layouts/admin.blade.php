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

        body {}

        .header {
            position: absolute;
            top: 0;
            width: 100%;
            height: 60px;
            /* Set the fixed height of the footer here */
            line-height: 60px;
            /* Vertically center the text there */
            background-color: #f5f5f5;
            padding: 0 50px; display: flex; justify-content: space-between;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            margin-bottom: 60px;
            padding: 50px;
            
        }

        .login_form {
            width: 30%;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            /* Set the fixed height of the footer here */
            line-height: 60px;
            /* Vertically center the text there */
            background-color: #f5f5f5;
        }
        .mypanel{
            width: 60%;
            display: flex;
            justify-content: space-around;
        }
        .mybtn{
            width: 200px;
            height: 200px;
            background-color: lightgray;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
        }
        .mybtn:hover{
            background-color: gray;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class=" text-center header">
        <div class="logo">
            This is Logo
        </div>
        <div class="logout">
            @if (AUth::user()) 
                Hello, {{Auth::user()->name}}
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                                                            Logout
                                                                                        </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @else
                Hello, Guest
            @endif

            
        </div>
        
        
    </div>

    @if (count($errors)>0)
    <div class="alert alert-danger container" style='margin-top:100px;'>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class='main'>
        @yield('admin_content')
    </div>



    <div class=" text-center footer">
        &copy; 2018. All rights reserved.
    </div>



    <script>
        $().ready(function(){
            var height = $(window).height() + "px";
            $('.login_main').css('height', height);
        });
    </script>

</body>

</html>