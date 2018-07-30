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
				// $(".reciptes_link").css('color','#ffcd32');
			});
		</script>

	<div class="recipes">
		
		<div class="col-xs-12 header text-center">
			<a href="/Recipes" id='back_to_recipes'>
				<ul>
					<li><img src="/images/icons/back.png" alt="" id='back_to_recipes_img'></li>
					<li class='recipes_back'>食譜</li>
				</ul>
			</a>
			
				
			
			<span class='recipe_title'>Tikka Masala Baked Eggs on Curried Garlic	Quinoa with Crumbled Paneer </span>
			<p class='title_body'>
				Baked egg casserole with curried garlic quinoa in a delicious tangy Tikka Masala sauce garnished with crumbled paneer.
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FTikkaMasala&src=sdkpreparse' style='padding-right:15px'>
					<img id='fb' src='./images/social/eggs101/egg_socialMediaIconSet_facebook.png' />
				</a>
				<a target="_blank" href='https://twitter.com/intent/tweet?text={{url()->current()}}' >
					<img id='twitter' src='./images/social/eggs101/egg_socialMediaIconSet_twitter.png' />
				</a>
				<a target='_blank' href='http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.eggs.ca%2Frecipes%2Fquick-morning-pizza&media=http%3A%2F%2Fwww.eggs.ca%2Fassets%2FRecipeThumbs%2FQuick-Morning-Pizza-updated-CMS.jpg&description=Quick+Morning+Pizza' style='padding-left:15px'>
					<img id='pinterest'  src='./images/social/eggs101/egg_socialMediaIconSet_pinterest.png' />
				</a>
			</div>
			<div class="col-xs-2"></div>
		</div>

		{{-- images --}}
		<div class="container-fuild recipes_images">
			
		
			<div class="col-xs-12 ">
				<img src="/images/recipes/Eggs-SA-17-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量 4</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 60 min</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 25 min</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>2 cup (500 ml)</span>
	                	<span>1 cup (250 ml)</span>
	                	<span>1 tbsp. (30 ml)</span>
	                	<span>1</span>
	                	<span>1 tsp. (5 ml)</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>oil</span>
	                	<span>vegetable broth</span>
	                	<span>quinoa</span>
	                	<span>olive oil</span>
	                	<span>garlic clove, minced</span>
	                	<span>curry powder</span>
	                </div>
                </div>


                <div class='recipes_subtitle_1'>Tikka Masala Sauce:</div>

                <div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2 tbsp. (30 ml)</span>
	                	<span>1</span>
	                	<span>½ cup (125 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1 tsp. (5 ml) </span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>¼ tsp. (1.25 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>¾ tsp. (7.5 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>½ cup (125 ml)</span>
	                	<span>¼ cup (60 ml)</span>
	                	<span>¼ tsp. (1.25 ml)</span>
	                	<span>6</span>
	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>oil</span>
	                	<span>large onion, finely chopped</span>
	                	<span>canned crushed tomatoes</span>
	                	<span>garlic paste</span>
	                	<span>ginger paste</span>
	                	<span>coriander powder</span>
	                	<span>cumin powder</span>
	                	<span>chili powder</span>
	                	<span>turmeric powder</span>
	                	<span>sugar</span>
	                	<span>salt (or to taste)</span>
	                	<span>garam masala</span>
	                	<span>half-and-half cream</span>
	                	<span>water</span>
	                	<span>lemon juice</span>
	                	<span>eggs</span>
	                </div>
                </div>

                <div class='recipes_subtitle_1'>Garnish:</div>

                <div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>¼ cup (60 ml)</span>
	                	<span>2 tbsp. (30 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	
	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>paneer, crumbled</span>
	                	<span>cilantro, finely chopped</span>
	                	<span>garam masala, to garnish</span>
	                	
	                </div>
                </div>
           

              


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Lightly oil a medium-sized ovenproof casserole dish. Set aside. Preheat oven to 375°F.</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a medium pot, add vegetable broth with quinoa and bring to a boil. Cover pot with lid, reduce heat to medium and simmer until liquid is absorbed, approximately 15-20 minutes. Remove quinoa to a bowl. 
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In the same pot, gently heat olive oil on medium heat. Add garlic and fry for one minute. Add curry powder and blend into oil. Fold in quinoa and coat well. Place curried quinoa in greased casserole dish to create a base layer for the tikka masala baked eggs.

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body"><b>Tikka Masala Sauce: </b>In a medium pot, heat oil on medium-high heat. Add onion and caramelize until golden brown, approximately 10-15 minutes. Add crushed tomatoes and stir. Mix in garlic paste, ginger paste, coriander, cumin, chili and turmeric and simmer for a couple of minutes. Stir in sugar, salt and garam masala. Add cream and mix. Thin out sauce with water. Add lemon juice.
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Using the handle of a wooden spoon, create six equally spaced holes in curried quinoa base to nest each egg into. Crack an egg into each hole. Spoon in tikka masala sauce around eggs, covering quinoa layer. Sprinkle on crumbled paneer.
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Bake in pre-heated oven for 20-25 minutes or until eggs are tender and yolks are cooked. Garnish with cilantro and a sprinkling of garam masala.
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>Tip</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">Paneer is Indian pressed cheese available in specialty grocery stores, sold in a block form.</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Funny-Egg-Fish">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-13-Final-web.jpg' />
			     				<div class='name'>趣味小蛋魚</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/EggsMakhani">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-18-Final-web.jpg' />
			     				<div class='name'>Eggs Makhani</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Boiled-Egg-Oolong-Tea">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-14-Final-web.jpg' />
			     				<div class='name'>
			     					烏龍茶葉蛋
								</div>
			     			</a>
		     			</div>
				</div>		
			</div>

			
				
			</div>
		</div>

	</div>
		
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content nutrition_facts">
      
        <button type="button"  class="close close_X" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">營養成分</h1>
      
      <div class="modal-body">
        <table class='table'>
        	<tr>
        		<td><b>卡路里</b></td>
        		<td class='text-right'>484 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>28 g</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>7 g</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.3 g</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>309 mg</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>1109 mg  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白質/b>  </td>
        		<td class='text-right'>41 g</td>
        	</tr>
        	<tr>
        		<td><b>纖維/b>  </td>
        		<td class='text-right'>5 g</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>7 g</td>
        	</tr>
        	<tr>
        		<td><b>Protein</b>  </td>
        		<td class='text-right'>19 g</td>
        	</tr>
        </table>
      </div>
     
    </div>

  </div>
</div>






		
	
	
	
<script>
	$("#fb").mouseover(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_facebook-over.png');
	});
	$("#fb").mouseleave(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_facebook.png');
	});
	$("#pinterest").mouseover(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_pinterest-over.png');
	});
	$("#pinterest").mouseleave(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_pinterest.png');
	});
	$("#twitter").mouseover(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_twitter-over.png');
	});
	$("#twitter").mouseleave(function(){
		$(this).attr('src','./images/social/eggs101/egg_socialMediaIconSet_twitter.png');
	});
	$("#back_to_recipes").mouseover(function(){
		$("#back_to_recipes_img").attr('src','./images/icons/back_over.png');
	});
	$("#back_to_recipes").mouseleave(function(){
		$("#back_to_recipes_img").attr('src','./images/icons/back.png');
	});
</script>	
@stop