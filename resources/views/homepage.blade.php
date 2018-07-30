@extends('layouts.app')
@section('content')
        <script>
            $(window).ready(function(){
                $(".nav-link a").css('border-color','#fbbb27');
                $(".nav-link a").css('color','black');
                $(".france").css('border-color','black');
                $(".punjabi").css('border-color','black');
                $("#nav").css('background-color','#fbbb27');
                $("#nav").css('border-color','#fbbb27');
                $(".nav-link a").mouseenter( function(){
                    $(this).css('border-color','white');
                    $(this).css('color','white');
                } ).mouseleave(  function(){
                    $(this).css('border-color','#fbbb27');
                    $(this).css('color','black');
                } );

                $(".france").mouseenter( function(){
                    $(this).css('border-color','white');
                    $(this).css('color','white');
                } ).mouseleave(  function(){
                    $(this).css('border-color','black');
                    $(this).css('color','black');
                } );

                $(".punjabi").mouseenter( function(){
                    $(this).css('border-color','white');
                    $(this).css('color','white');
                } ).mouseleave(  function(){
                    $(this).css('border-color','black');
                    $(this).css('color','black');
                } );
            });

            
             
        </script>

        <script>
            $(window).on('scroll', function () {
            var pixs = $(document).scrollTop();
            if(pixs>50){
                $("#nav").css('background-color','white');
                $("#nav").css('border-color','#D3D3D3');

                $(".nav-link a").css('border-color','white');
                $(".nav-link a").css('color','black');

                $(".france").css('border-color','black');
                $(".punjabi").css('border-color','black');
                $(".nav-link a").mouseenter( function(){
                    $(this).css('border-color','#fbbb27');
                    $(this).css('color','#fbbb27');
                } ).mouseleave(  function(){
                    $(this).css('border-color','white');
                    $(this).css('color','black');
                } );

            }else{
              
            } 

            if(pixs<=50){
                $("#nav").css('background-color','#fbbb27');
                $("#nav").css('border-color','#fbbb27');
                $(".nav-link a").css('border-color','#fbbb27');
                $(".nav-link a").css('color','black');

                $(".france").css('border-color','black');
                $(".punjabi").css('border-color','black');
                $(".nav-link a").mouseenter( function(){
                    $(this).css('border-color','white');
                    $(this).css('color','white');
                } ).mouseleave(  function(){
                    $(this).css('border-color','#fbbb27');
                    $(this).css('color','black');
                } );
            }else{
              
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
                        <div class='header_nutrition_sub_title'>
                            
                        </div>
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
                        <a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
                            <img src='/images/recipes/Eggs-SA-01-Final-web.jpg' />
                        </a>
                    </div>
                    <div class='col-sm-6 right_des'>
                        <a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
                            <div class='sub_title'>番茄煙肉煎蛋早餐三文治</div>
                            <div class='right_body'>
                                全麥英式鬆餅為這道美味充實的早餐添加了健康元素。用牛油紙包起三文治您就可在路上享用早餐了！
                            </div>
                        </a>
                        <div class='col-sm-12 getTheRecipe'>
                            <a href="/English-Muffin-Bacon-Tomato-Fried-Egg" id='getTheRecipe'> 瀏覽食譜 </a>
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
                        <a href="/grandmaIndian">
                            <img src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                            
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
            <a href="/Recipes" id='getTheRecipe_1'> View All </a>
        </div>

    </div> 


    <div id='mobile_only'>
        <div class='row Header'>
            <div class='container'>
                <span class='home_left_header'> </span>
                <span class='home_left_body'>With 14 important vitamins and nutrients and no added hormones and steroids, egg is our numberone superstar!</span>
                <a href="/Recipes" id='seeTheRecipes'> See the recipes </a>
            </div>
            <div class='container home_right_img col-xs-6 col-xs-offset-3'>
                <img src='/images/banner/logo.png' />
            </div>
            <div class="col-xs-3"></div>
        </div>


        
        <div class='container-fluid FeaturedRecipe_parent'>
            <div class='FeaturedRecipe'>
                <div class='title'>Featured Recipe<br><br></div>
                <div class='row'>
                    <div class='col-sm-6 left_img'>
                        <a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
                            <img src='/images/recipes/Eggs-SA-01-Final-web.jpg' />
                        </a>
                    </div>
                    <div class=''>
                        <a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
                            <div class='sub_title'>Anda Burger – Masala Fried Egg Burger</div>
                            <div class='right_body'>A Pakistani roadside favourite of a masala fried egg with a hint of chilies and garam masala on a toasted soft bun with lettuce, tomato, onion with a delicious cilantro-mint mayo. Great as a breakfast sandwich, lunch, or a snack.
                            </div>
                        </a>
                        <div class='getTheRecipe'>
                            <a href="/English-Muffin-Bacon-Tomato-Fried-Egg" id='getTheRecipe'> Get the Recipe </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='BBQ_parent'>
            <div class="row summerBBQ">
                
                <div class='title'>Breakfast, Brunch and Lunch</div>
                
                <div class=''>
                    <div class='container'>
                        <a href="/grandmaIndian">
                            <img src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                            
                            <div class='left_sub_title'>Grandma’s Indian-style Omelette   </div>
                            
                        </a>
                    </div>
                    <div class='container'>
                        <a href="/Scrambled-Eggs">
                            <img src='/images/recipes/Eggs-SA-17-Final-web.jpg' />
                            
                            <div class='left_sub_title'>粟米煙肉炒蛋</div>
                        </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <div class='col-xs-12 getTheRecipe_2 text-center'>
            <a href="/Recipes" id='getTheRecipe_2'> View All </a>
        </div>
        
    </div>   
</div>
@endsection
