@extends('layouts.app')
@section('content')
        <script>
            $(window).ready(function(){
                $('.links a').css('border','2px solid #ffbc27');  
                $("#nav").css('background-color','#fbbc27');
                $("#nav").css('border-color','transparent');
                
                $('.links a').hover(function(){
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
<div id='homepage'>
    <div id='big_screen'>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="/Recipes">
                    <div class='row Header11'>
                        <div class='header_nutrition_title'></div>
                        <div class='header_nutrition_sub_title'></div>
                    </div>
                </a>
            </div>
            
            <div class="item">
                <a href="/contest">
                    <div class='row Header12'>
                        <div class='header_nutrition_title'></div>
                        <div class='header_nutrition_sub_title'></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="/Nutrition">
                <div class='row Header1'>
                    <div class='header_nutrition_title'  style="font-family: Noto Sans TC;">營養價值</div>
                    <div class='header_nutrition_sub_title' style="margin:50px 300px; font-family: Noto Sans TC;">
                        雞蛋是營養最豐富的天然食品之一。一隻大號雞蛋僅含70卡路里，卻飽含大量營養。
                    </div>
                </div>
            </a>
            </div>
            <div class="item">
                <a href="/Eggforbabies">
                    <div class='row Header2'>
                        <div class='header_nutrition_title' style="font-family: Noto Sans TC;">寶寶與雞蛋</div>
                        <div class='header_nutrition_sub_title' style="margin:50px 300px; font-family: Noto Sans TC;">
                            現在您可從寶寶6個月大開始餵食全蛋，可有助預防雞蛋過敏。
                        </div>
                    </div>
                </a>
            </div>

            
          </div>
        </div>
        <script>
            $('.carousel').carousel({
              interval: 3000
            })
        </script>


        <div class='container-fluid FeaturedRecipe_parent clear-both'>
            <br><br>
            <div class='FeaturedRecipe'>
                <div class='title' style="font-family: Noto Sans TC;">精選食譜<br><br></div>
                <div class='row'>
                    <div class='col-sm-6 '>
                        <a href="/Steamed-crab-claw-with-egg-whites">
                            <img src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
                        </a>
                         <div class='sub_title' style="font-family: Noto Sans TC;">白玉蒸蟹鉗</div>
                         <div class='right_body' style="font-family: Noto Sans TC;">
                                這道菜結合了蒸蟹的鮮美和蛋白的嫩滑。一些人認為蛋白才是這道菜的精髓，若其烹調時間恰到好處，將帶來無「蟹」可擊的細膩口感。
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <a href="/Gldn-Omlet">
                            <img src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
                        </a>
                         <div class='sub_title' style="font-family: Noto Sans TC;">黃金蝦仁蛋包飯</div>
                         <div class='right_body' style="font-family: Noto Sans TC;">
                                我們提供了一個享用炒飯的獨特方式。您可將此做法用於任何炒飯，效果同樣出色。簡單的翻鑊使蛋餅翻轉可呈現金黃色的外觀。
                        </div>
                       <!--  <div class='col-sm-12 getTheRecipe'>
                            <a href="/Funny-Egg-Fish" id='getTheRecipe'> 瀏覽食譜 </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class='BBQ_parent'>
            <div class="row summerBBQ">
                
                <div class='title' style="font-family: Noto Sans TC;"><b>全部中文食譜</b> </div>
                
                <div class='row'>
                   <div class='col-sm-6 col-lg-4'>
                                <a href="/breakfast">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">早餐</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/soup">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">湯</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/appetizers">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">小食/前菜 </div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/main">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">主菜</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                               <a href="/dessert">
                                <img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">甜品</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/newest">
                                    <img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">最新食譜 </div>
                                </a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class='col-xs-12 getTheRecipe_1 text-center'>
            <a href="/Recipes" id='getTheRecipe_1' style="font-family: Noto Sans TC;"> 瀏覽食譜 </a>
        </div>

    </div> 


    <div id='mobile_only'>
        <a href="/Recipes"  style="font-family: Noto Sans TC;">
        <div class='mobile_header'>
            
        </div></a>
        <div class='FeaturedRecipe_parent clear-both'>
            <div class='FeaturedRecipe'>
                <div class='title' style="font-family: Noto Sans TC;">精選食譜<br><br></div>
                <div class='row'>
                    <div class='col-sm-6 '>
                        <a href="/Steamed-crab-claw-with-egg-whites">
                            <img src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
                        </a>
                         <div class='sub_title'  style="font-family: Noto Sans TC;" >白玉蒸蟹鉗</div>
                         <div class='right_body'  style="font-family: Noto Sans TC;">
                                這道菜結合了蒸蟹的鮮美和蛋白的嫩滑。一些人認為蛋白才是這道菜的精髓，若其烹調時間恰到好處，將帶來無「蟹」可擊的細膩口感。
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <a href="/Gldn-Omlet">
                            <img src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
                        </a>
                         <div class='sub_title'  style="font-family: Noto Sans TC;">黃金蝦仁蛋包飯</div>
                         <div class='right_body'  style="font-family: Noto Sans TC;">
                                我們提供了一個享用炒飯的獨特方式。您可將此做法用於任何炒飯，效果同樣出色。簡單的翻鑊使蛋餅翻轉可呈現金黃色的外觀。
                        </div>
                       <!--  <div class='col-sm-12 getTheRecipe'>
                            <a href="/Funny-Egg-Fish" id='getTheRecipe'> 瀏覽食譜 </a>
                        </div> -->
                    </div>
                </div>
                <div class='col-sm-12 getTheRecipe'>
                    <a href="/Funny-Egg-Fish" id='getTheRecipe' style="font-family: Noto Sans TC;"> 瀏覽食譜 </a>
                </div>
            </div>
        </div>
    
        
        <div class='BBQ_parent'>
            <div class=" summerBBQ">
        
                <div class='title'style="font-family: Noto Sans TC;"><b>全部中文食譜</b> </div>
                
                <div class='row'>
                   <div class='col-sm-6 col-lg-4'>
                                <a href="/breakfast">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">早餐</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/soup">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">湯</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/appetizers">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">小食/前菜 </div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/main">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">主菜</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                               <a href="/dessert">
                                <img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">甜品</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/newest">
                                    <img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
                                    <div class='name' style="font-family: Noto Sans TC;">最新食譜 </div>
                                </a>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class='col-xs-12 getTheRecipe_1 text-center'>
            <a href="/Recipes" id='getTheRecipe_1' style="font-family: Noto Sans TC;"> 瀏覽食譜 </a>
        </div>
        
    </div>   
</div>
@endsection
