@extends('layouts.app')
@section('content')
        <script>
            $(window).ready(function(){
                $('.links a').css('border','2px solid #fbbb27');  
                $("#nav").css('background-color','#fbbb27');
                $('.links a').hover(function(){
                    $(this).css('border','2px solid white');
                    $(this).css('color','white');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    $('.lang').css('border','2px solid black');
                });   
               
                $('.lang').css('border','2px solid black');
            });
        </script>

        <script>
            $(window).on('scroll', function () {
            var pixs = $(document).scrollTop();
            if(pixs>50){
                $("#nav").css('background-color','white');
                $('.links a').css('border','2px solid white');  
                $('.links a').hover(function(){
                    $(this).css('border','2px solid #fbbb27');
                    $(this).css('color','black');
                },function(){
                    $(this).css('border','2px solid white'); 
                    $(this).css('color','black');
                    $('.lang').css('border','2px solid black');
                });   
                $('.lang').css('border','2px solid black');
            }else{
              $("#nav").css('background-color','#fbbb27');
                $('.links a').css('border','2px solid #fbbb27');  
                $('.links a').hover(function(){
                    $(this).css('border','2px solid white');
                    $(this).css('color','black');
                },function(){
                    $(this).css('border','2px solid #fbbb27'); 
                    $(this).css('color','black');
                    $('.lang').css('border','2px solid black');
                });   
                $('.lang').css('border','2px solid black');
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
                <a href="/Nutrition">
                <div class='row Header1'>
                    <div class='header_nutrition_title'>營養價值</div>
                    <div class='header_nutrition_sub_title'>
                        雞蛋不單止美味，而且營養十分豐富，是蛋白質的極佳來源，
                        能提供人體所需的重要營養素。現在就來了解為甚麼您應把雞蛋作為日常飲食的一部分，
                        以及了解如何為您自己、小孩甚至家中長者保持健康的生活方式。
                    </div>
                </div>
            </a>
            </div>
            <div class="item">
                <a href="/Eggforbabies">
                    <div class='row Header2'>
                        <div class='header_nutrition_title'>寶寶與雞蛋</div>
                        <div class='header_nutrition_sub_title'>
                            由加拿大衛生部(Health Canada)、加拿大兒科學會(Canadian Pediatric Society)、
                            加拿大營養師協會(Dietitians of Canada)和加拿大母乳餵養委員會(Breastfeeding Committee
                            for Canada)聯合推出的最新嬰兒餵食指南指出，建議在寶寶滿6個月或剛開始進食固體食物時，
                            引入全蛋餵食。所以您可放心在寶寶吃的食物泥和粥裏加入雞蛋了！
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
                <div class='title'>Featured Recipe<br><br></div>
                <div class='row'>
                    <div class='col-sm-6 left_img'>
                        <a href="/Funny-Egg-Fish">
                            <img src='/images/recipes/Eggs-SA-13-Final_home.jpg' />
                        </a>
                    </div>
                    <div class='col-sm-6 right_des'>
                        <a href="/Funny-Egg-Fish">
                            <div class='sub_title'>趣味小蛋魚</div>
                            <div class='right_body'>
                                這款雞蛋小魚是小孩和大人都會喜歡的有趣小菜。煮熟的雞蛋作為小魚的身體，切成薄片的青瓜和白蘿蔔組成魚鱗，再點綴以紅椒做出魚尾，您就會迎來一片稱讚聲！
                            </div>
                        </a>
                        <div class='col-sm-12 getTheRecipe'>
                            <a href="/Funny-Egg-Fish" id='getTheRecipe'> 瀏覽食譜 </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='BBQ_parent'>
            <div class="row summerBBQ">
                
                <div class='title'>早餐</div>
                
                <div class='row'>
                    <div class='col-sm-6 left_img'>
                        <a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
                            <img src="/images/recipes/Eggs-SA-02-Final-web.jpg" />
                            
                            <div class='left_sub_title'>番茄煙肉煎蛋早餐三文治</div>
                            
                        </a>
                    </div>
                    <div class='col-sm-6 right_img'>
                        <a href="/Scrambled-Eggs">
                            <img src='/images/recipes/Eggs-SA-17-Final-web.jpg' />
                            
                            <div class='left_sub_title'>粟米煙肉炒蛋</div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class='col-xs-12 getTheRecipe_1 text-center'>
            <a href="/Recipes" id='getTheRecipe_1'> 瀏覽食譜 </a>
        </div>

    </div> 


    <div id='mobile_only'>
        <div class='mobile_header'>
            <div class='getTheRecipe_1 text-center'>
                <a href="/Recipes" id='getTheRecipe_1'> 瀏覽食譜 </a>
            </div>
        </div>
        <div class='FeaturedRecipe_parent clear-both'>
            <div class='FeaturedRecipe'>
                <div class='title'>Featured Recipe<br><br></div>
                
                <div class=' '>
                    <a href="/Funny-Egg-Fish">
                        <img src='/images/recipes/Eggs-SA-13-Final_home.jpg' />
                    </a>
                </div>
                
                <a href="/Funny-Egg-Fish">
                    <div class='sub_title'>趣味小蛋魚</div>
                    <div class='right_body'>
                        這款雞蛋小魚是小孩和大人都會喜歡的有趣小菜。煮熟的雞蛋作為小魚的身體，切成薄片的青瓜和白蘿蔔組成魚鱗，再點綴以紅椒做出魚尾，您就會迎來一片稱讚聲！
                    </div>
                </a>
                <div class='col-sm-12 getTheRecipe'>
                    <a href="/Funny-Egg-Fish" id='getTheRecipe'> 瀏覽食譜 </a>
                </div>
            </div>
        </div>
    
        
        <div class='BBQ_parent'>
            <div class=" summerBBQ">
        
                <div class='title'>早餐</div>
        
                <div class=''>
                    <div class=''>
                        <a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
                                    <img src="/images/recipes/Eggs-SA-02-Final-web.jpg" />
                                    
                                    <div class='left_sub_title'>番茄煙肉煎蛋早餐三文治</div>
                                    
                                </a>
                    </div>
                    <div class=''>
                        <a href="/Scrambled-Eggs">
                                    <img src='/images/recipes/Eggs-SA-17-Final-web.jpg' />
                                    
                                    <div class='left_sub_title'>粟米煙肉炒蛋</div>
                                </a>
                    </div>
        
                </div>
            </div>
        </div>
        
        <div class='col-xs-12 getTheRecipe_1 text-center'>
            <a href="/Recipes" id='getTheRecipe_1'> 瀏覽食譜 </a>
        </div>
        
    </div>   
</div>
@endsection
