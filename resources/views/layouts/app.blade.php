<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->

   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106914447-1"></script>
   <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());
  gtag('config', 'UA-106914447-1');
</script>
    <title>Home | egghisuperstar.com</title>

    <link rel="manifest" href="%PUBLIC_URL%/manifest.json">

    <link rel="shortcut icon" href="{{url('/favicon.ico')}}">

    <link rel="stylesheet" href="{{url('/css/nav.css')}}">

    <link rel="stylesheet" href="{{url('/css/recipe.css')}}">

    <link rel="stylesheet" href="{{url('/css/babys.css')}}">

    <link rel="stylesheet" href="{{url('/css/footer.css')}}">

    <link rel="stylesheet" href="{{url('/css/nutrition.css')}}">

    <link rel="stylesheet" href="{{url('/css/eggs101.css')}}">

    <link rel="stylesheet" href="{{url('/css/style.css')}}">

    <link rel="stylesheet" href="{{url('/css/recipes.css')}}">

    <link rel="stylesheet" href="{{url('/css/baby.css')}}">

    <link rel="stylesheet" href="{{url('/css/errors.css')}}">

    <link rel="stylesheet" href="{{url('/css/apps.css')}}">

    <link rel="stylesheet" href="{{url('/css/homepage.css')}}">

    <link rel="stylesheet" href="{{url('/css/Kaleko/stylesheet.css')}}">

    <link rel="stylesheet" href="{{url('/css/navigation/navigation.css')}}">

    <link rel="stylesheet" href="{{url('/css/eggs101/eggs101.css')}}">

    <link rel="stylesheet" href="{{url('/css/nutrition/nutrition.css')}}">

    
    <style>
      @import url('https://fonts.googleapis.com/earlyaccess/notosanstc.css');
      * {
      font-family: 'Noto Sans TC', sans-serif !important; }
    </style>
  
    {{-- jquery --}}
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   
	
  </head>
  <body>

    <nav class="navbar-fixed-top " id='nav'>
      {{-- desk top nav large --}}
        <div class='large_nav container'>
            <a href="/" >
              <div id='logo'>
              </div>
            </a>
            <div class='navigation_body links'>
                <a href='/Recipes' class='reciptes_link' style='font-weight:bold;'>食譜</a>
                <a href='/Eggs101'  class='eggs101_link' style='font-weight:bold;'>雞蛋小知識</a>
                <a href='/Nutrition'  class='nutrition_link' style='font-weight:bold;'>營養價值</a>
                <a href='/Eggforbabies' class='eggforbabies_link' style='font-weight:bold;'>寶寶與雞蛋</a>
                <a href='/Apps' class='apps_link' style='font-weight:bold;'>推廣</a>
                <a href='http://www.lesoeufs.ca/' class='lang'><b> Fr </b></a>
                <a href='https://www.eggs.ca/' class='lang'><b> En </b></a>
                <a href='http://www.eggsaregood.ca/SC/' class='lang'><b> 简 </b></a>
            </div>
        </div>
        {{-- middle nav --}}
        <div class='middle_nav container-fluid'>
          <a href="/">
            <div id='mid_logo'>
            </div>
          </a>
          <div class='navigation_body links'>
            <a href='/Recipes' class='reciptes_link' style='font-weight:bold;'>食譜</a>
            <a href='/Eggs101' class='eggs101_link' style='font-weight:bold;'>雞蛋小知識</a>
            <a href='/Nutrition' class='nutrition_link' style='font-weight:bold;'>營養價值</a>
            <a href='/Eggforbabies' class='eggforbabies_link' style='font-weight:bold;'>寶寶與雞蛋</a>
            <a href='/Apps' class='apps_link' style='font-weight:bold;'>推廣</a>
            <a href='http://www.lesoeufs.ca/' class='lang'><b> Fr </b></a>
            <a href='https://www.eggs.ca/' class='lang'><b> En </b></a>
            <a href='http://www.eggsaregood.ca/SC/' class='lang'><b> 简 </b></a>
          </div>
        </div>
        {{-- mobile navigation --}}


        <div class='mobile_nav navbar-fixed-top'>
          <div class="col-xs-4">
            <button class='btn btn-default ' id='call_alert'>三</button>
          </div>

          
          <div class='navbar-fixed-top' id='alert_layer'>
            <div class="text-center col-xs-2"><button class="btn btn-clear" id='close-alert'>X</button></div>
            <div class="col-xs-8">
              <div class="col-xs-12 text-center alert-link"><a href="/Recipes" style='font-weight:bold;'>食譜</a></div>
              <div class="col-xs-12 text-center alert-link"><a href="/Eggs101" style='font-weight:bold;'>雞蛋小知識</a></div>
              <div class="col-xs-12 text-center alert-link"><a href="/Nutrition" style='font-weight:bold;'>營養價值</a></div>
              <div class="col-xs-12 text-center alert-link"><a href="/Eggforbabies" style='font-weight:bold;'>寶寶與雞蛋</a></div>
              
              <div class="col-xs-12 text-center alert-link"><a href="/Apps" style='font-weight:bold;'>推廣</a></div>
              <div class="col-xs-12 text-center "></div>
            </div>
            <script>
              $("#call_alert").click(function(){ $("#alert_layer").show(); }); 
                        $("#close-alert").click(function(){ $("#alert_layer").hide();
                        });
            </script>
          </div>

          <a href='/' class=' col-xs-4 mobile-logo'>
            
          </a>
          <div class='col-xs-4'>
            
          </div>
      </div>
  </nav>
    
  
  
  
  
  <div>       @yield('content') </div>
<footer class='clear-top'>
  <div class='container-fluid' id='mobile-footer-sm'>
    <div class='col-xs-12'>
        <h2>每月透過電郵收到新鮮食譜！(英文)</h2>
       
      <h2>關注社交媒體專頁(英文)</h2>
      <div>
        <ul class="col-xs-12">
          <li class='col-xs-2 col-xs-offset-1 '>
            <a href='/'><img src='./images/social/egg_socialMediaIconSet_facebook.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://twitter.com/eggsoeufs'><img src='./images/social/egg_socialMediaIconSet_twitter.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://www.instagram.com/challenge/'><img src='./images/social/egg_socialMediaIconSet_instagram.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://www.youtube.com/channel/UCq6p--GVSjdVKp_B4zQbqgQ'><img src='./images/social/egg_socialMediaIconSet_youtube.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://www.pinterest.ca/eggs/'><img src='./images/social/egg_socialMediaIconSet_pinterest.png' /></a>
          </li>
        </ul>
      </div>
      
      
      <div class=' footer_link'>
        <li class='first_link'>
          <a href='http://www.eggfarmers.ca/'>Eggfarmers.ca</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/resources'>資料數據(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/community'>社區消息(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/about-us'>關於我們(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/contactus'>聯絡我們(英文)</a>
        </li>
        
      </div>
      <div id='copyright'>© 2017 Egg Farmers of Canada. All rights reserved</div>
    </div>
    
    
    <ul class='privacy' >
      <li class='left'>
        <a href='http://www.eggs.ca/privacypolicy/'>Privacy Policy</a>
      </li>
      <li class='right'>
        <a href='http://www.eggs.ca/termsandconditions/'>Terms & Conditions</a>
      </li>
      
    </ul>
    
    
    
  </div>
  
  <div class='container-fluid' id='mobile-footer-big'>
    <div class='col-xs-12'>
      <h2>每月透過電郵收到新鮮食譜！(英文)</h2>
       
      <h2>關注社交媒體專頁(英文)</h2>
      <div>
        <ul class="col-xs-8 col-xs-offset-2">
          <li class='col-xs-2 col-xs-offset-1 '>
            <a href='https://www.facebook.com/eggs'><img src='./images/social/egg_socialMediaIconSet_facebook.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://twitter.com/eggsoeufs'><img src='./images/social/egg_socialMediaIconSet_twitter.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://www.instagram.com/challenge/'><img src='./images/social/egg_socialMediaIconSet_instagram.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://www.youtube.com/channel/UCq6p--GVSjdVKp_B4zQbqgQ'><img src='./images/social/egg_socialMediaIconSet_youtube.png' /></a>
          </li>
          <li  class='col-xs-2'>
            <a href='https://www.pinterest.ca/eggs/'><img src='./images/social/egg_socialMediaIconSet_pinterest.png' /></a>
          </li>
        </ul>
      </div>
      
      <div class=' footer_link'>
        <li class='first_link'>
          <a href='http://www.eggfarmers.ca/'>Eggfarmers.ca</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/resources'>資料數據(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/community'>社區消息(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/about-us'>關於我們(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/contactus'>聯絡我們(英文)</a>
        </li>
        
      </div>
      <div id='copyright'>
        <span>© 2017 Egg Farmers of Canada. All rights reserved </span>
        <a href='http://www.eggs.ca/privacypolicy/'>Privacy Policy</a>
        <a href='http://www.eggs.ca/termsandconditions/'>Terms & Conditions</a>
      </div>
      
      
      
      
    </div>
    
    
  </div>
  <div class='container-fluid' id='desktop-footer-sm'>
    
    <div class='col-sm-12 '>
      <div class='col-sm-7 left'>
        <span>每月透過電郵收到新鮮食譜！(英文)</span>
      </div>
       
      <div class='col-sm-5  right'>
        <span>關注社交媒體專頁(英文)</span>
      </div>
    </div>
    <div class='col-sm-12'>
      <div class='col-sm-8 left'>
        
      </div>
      <div class='col-sm-4  right'>
        <ul class="Social_media ">
          <li class=''>
            <a href='https://www.facebook.com/eggs'><img src='./images/social/egg_socialMediaIconSet_facebook.png' class='fb' /></a>
          </li>
          <li  class=''>
            <a href='https://twitter.com/eggsoeufs' ><img src='./images/social/egg_socialMediaIconSet_twitter.png' class='twitter' /></a>
          </li>
          <li  class=''>
            <a href='https://www.instagram.com/challenge/'><img src='./images/social/egg_socialMediaIconSet_instagram.png' class='instagram' /></a>
          </li>
          <li  class=''>
            <a href='https://www.youtube.com/channel/UCq6p--GVSjdVKp_B4zQbqgQ'><img src='./images/social/egg_socialMediaIconSet_youtube.png' class='youtube' /></a>
          </li>
          <li  class=''>
            <a href='https://www.pinterest.ca/eggs/'><img src='./images/social/egg_socialMediaIconSet_pinterest.png' class='pinterest' /></a>
          </li>
        </ul>
      </div>
    </div>
    <div class='col-sm-8'>
      <div class=' footer_link'>
        <li class='first_link'>
          <a href='http://www.eggfarmers.ca/'>Eggfarmers.ca</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/resources'>資料數據(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/community'>社區消息(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/about-us'>關於我們(英文)</a>
        </li>
        <li >
          <a href='http://www.eggs.ca/contactus'>聯絡我們(英文)</a>
        </li>
        
      </div>
    </div>
    <div class='col-sm-12'>
      
      
      
      <div class="col-sm-6">
        
        <span id='copyright'>© 2017 Egg Farmers of Canada. All rights reserved </span>
        
      </div>
      <div class='col-sm-6' id='policy'>
        <a href='http://www.eggs.ca/privacypolicy/'>Privacy Policy</a>
        <a href='http://www.eggs.ca/termsandconditions/'>Terms & Conditions</a>
      </div>
    </div>
    
    
  </div>

  
  <div class='footer_parent'>
    <div class='container-fluid' id='desktop-footer-big'>
      <div class='col-lg-12'>
        <div class='col-lg-7 left'>
          <span>每月透過電郵收到新鮮食譜！(英文)</span>
        </div>
        <!-- button -->
        <!-- <div class='col-lg-7 left'>
          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsletter">Subscribe to the eggs.ca newsletter</button>
          <div class="modal fade" id="newsletter" tabindex="-1" role="dialog" aria-labelledby="newsletterLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       <h4 class="modal-title" id="newsletterLabel"> Subscribe</h4>
                  </div>
                  <div class="modal-body">
                    <div class='container-fuild text-center'>
                      <div class="field">
                        <label>Email</label>
                        <input type="text" name="NewEmail" class="text full" id="SubscribeForm_SubscribeForm_NewEmail" required="required" aria-required="true" placeholder="Your Email Address">
                      </div>
                      <div class="field">
                        <select name="Province" class="text full ui-dropdown" id="SubscribeForm_SubscribeForm_Province" required="required" aria-required="true" data-trigger-label="Where do you live?">
                            <option value="" selected="selected">Where do you live?</option>
        
                            <option value="BC">British Columbia</option>
                          
                            <option value="AB">Alberta</option>
                          
                            <option value="SK">Saskatchewan</option>
                          
                            <option value="MB">Manitoba</option>
                          
                            <option value="ON">Ontario</option>
                          
                            <option value="QC">Quebec</option>
                          
                            <option value="NB">New Brunswick</option>
                          
                            <option value="NS">Nova Scotia</option>
                          
                            <option value="PE">Prince Edward Island</option>
                          
                            <option value="NL">Newfoundland and Labrador</option>
                          
                            <option value="YT">Yukon Territory</option>
                          
                            <option value="NT">Northwest Territories</option>
                          
                            <option value="NU">Nunavut</option>
                          
                            <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer" >
                    <div class='container-fuild text-center'>
                      <button type="button" class="btn btn-default" data-dismiss="modal">
                        close
                      </button>
                      <button type="button" class="btn btn-primary">
                        submit
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        </div> -->
        <div class='col-lg-5  right'>
          <span>關注社交媒體專頁(英文)</span>
        </div>
      </div>
      <div class='col-lg-12'>
        <div class='col-lg-6 left'>
          
        </div>
        <div class='col-lg-4 col-lg-offset-2 right'>
          <ul class="Social_media">
            <li class=''>
              <a href='https://www.facebook.com/eggs'><img class='fb' src='./images/social/egg_socialMediaIconSet_facebook.png' /></a>
            </li>
            <li  class=''>
              <a href='https://twitter.com/eggsoeufs'><img class='twitter' src='./images/social/egg_socialMediaIconSet_twitter.png' /></a>
            </li>
            <li  class=''>
              <a href='https://www.instagram.com/challenge/'><img class='instagram' src='./images/social/egg_socialMediaIconSet_instagram.png' /></a>
            </li>
            <li  class=''>
              <a href='https://www.youtube.com/channel/UCq6p--GVSjdVKp_B4zQbqgQ'><img class='youtube' src='./images/social/egg_socialMediaIconSet_youtube.png' /></a>
            </li>
            <li  class=''>
              <a href='https://www.pinterest.ca/eggs/'><img class='pinterest' src='./images/social/egg_socialMediaIconSet_pinterest.png' /></a>
            </li>
          </ul>
        </div>
      </div>
      <div class='col-lg-8'>
        <div class=' footer_link'>
          <li class='first_link'>
            <a href='http://www.eggfarmers.ca/'>Eggfarmers.ca</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/resources'>資料數據(英文)</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/community'>社區消息(英文)</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/about-us'>關於我們(英文)</a>
          </li>
          <li >
            <a href='http://www.eggs.ca/contactus'>聯絡我們(英文)</a>
          </li>
          
        </div>
      </div>
      <div class='col-lg-12'>
        
        
        
        <div class="col-lg-6">
          
          <span id='copyright'>© 2017 Egg Farmers of Canada. All rights reserved </span>
          
        </div>
        <div class='col-lg-6' id='policy'>
          <a href='http://www.eggs.ca/privacypolicy/'>Privacy Policy</a>
          <a href='http://www.eggs.ca/termsandconditions/'>Terms & Conditions</a>
        </div>
      </div>
    </div>
    
  </div>
</footer>
     
  </body>
  <script>
    $(window).on('scroll', function () {
      
        var pixs = $(document).scrollTop();
        if(pixs>50){
          $(".links").css('height','120px');
          $("#logo").css('height','120px');
          $("#mid_logo").css('height','120px');
        }else{
          $(".links").css('height','150px');
          $("#logo").css('height','150px');
          $("#mid_logo").css('height','150px');
        } 


       
        
    });



    $(".fb").mouseover(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_facebook-over.png');
    });

    $(".fb").mouseleave(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_facebook.png');
    });

    $(".instagram").mouseover(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_instagram-over.png');
    });

    $(".instagram").mouseleave(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_instagram.png');
    });

    $(".youtube").mouseover(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_youtube-over.png');
    });

    $(".youtube").mouseleave(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_youtube.png');
    });

    $(".pinterest").mouseover(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_pinterest-over.png');
    });

    $(".pinterest").mouseleave(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_pinterest.png');
    });

    $(".twitter").mouseover(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_twitter-over .png');
    });

    $(".twitter").mouseleave(function(){
      $(this).attr('src','./images/social/egg_socialMediaIconSet_twitter.png');
    });

    $(function () { $('#newsletter').modal('hide')});


</script>
</html>
