<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you for participating</title>
    <style>
        body{
            margin:auto;
            text-align: center;
            font-weight: 700;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .body{
            margin: auto;
            background-color: rgb(251, 188, 39);
            text-align: center;
            width: 600px;
        }

        .header1{
            padding-top:30px; 
            font-size: 20px;
        }
        .header2{ 
            font-size: 24px; 
            padding-top: 20px;
            color: white;
            font-weight: 700;
        }
        
        .header3{  font-size: 16px; padding: 30px 30px 0 30px;}
        .seeyou{
            padding-top:30px;
            padding-bottom:30px; color: white;
            
        }

        .name{
            font-size: 20px !important;
        }
        
    </style>
</head>


<body>

    <table class="body">
        <tr>
            <td class="header3 name">
                Dear {{$candidate->firstname}} {{$candidate->lastname}}
            </td>
        </tr>

        <tr>
            <td class="header1">
                Thank you for participating
            </td>
        </tr>
        <tr>
            <td class="header2">
                Egg Transformation Contest
            </td>
        </tr>
        <tr>
            <td>
                <img src="https://www.eggsaregood.ca/images/banner/EFC-contest-img-3.png" alt="" width="200px">
            </td>
        </tr>
        

        <tr>
            <td class="header3">
                This email is to confirm that we have received your submission on <span style='color:white'>{{$candidate->created_at}}</span>
            </td>
        </tr>

        <tr>
            <td class="header3">
                We wish you good luck on the contest and please stay tuned on our winner announcement.
            </td>
        </tr>

        <tr>
            <td class="seeyou">
                See you soon!
            </td>
        </tr>
    </table>
   
        
</body>
</html>