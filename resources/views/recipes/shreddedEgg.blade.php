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
			
				
			
			<span class='recipe_title'>Shredded Egg Rasam – Spicy Tomato Soup</span>
			<p class='title_body'>
				Shredded eggs topping a South Indian spicy tomato soup scented with mustard seeds and curry leaves.
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FshreddedEgg&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-12-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量 2</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 20 min</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 20 min</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1 tbsp. (15 ml) </span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>8-10</span>
	                	<span>1</span>
	                	<span>½ cup (125 ml)</span>
	                	<span>1½ tsp. (7.5 ml)</span>
	                	<span>1 tsp. (5 ml))</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>2½ cup (625 ml)</span>
	                	<span>¼ cup (60 ml)</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>oil</span>
	                	<span>brown mustard seeds</span>
	                	<span>curry leaves</span>
	                	<span>large tomato, finely cubed</span>
	                	<span>canned crush tomatoes</span>
	                	<span>salt (or to taste)</span>
	                	<span>jaggery or sugar</span>
	                	<span>garlic paste</span>
	                	<span>turmeric</span>
	                	<span>water (add extra to make a thinner soup)</span>
	                	<span>cilantro, finely chopped</span>
	                	
	                </div>
                </div>

                <div class='recipes_subtitle_1'>Rasam Masala:</div>
				
				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1 tsp. (5 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>¼ tsp. (1.25 ml)</span>
	                	<span>1-2</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>coriander seeds</span>
	                	<span>black peppercorns</span>
	                	<span>cumin seeds</span>
	                	<span>fenugreek seeds</span>
	                	<span>dried red chilies</span>
	                </div>
                </div>

                <div class='recipes_subtitle_1'>Shredded Egg:</div>
				
				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2</span>
	                	<span>pinch </span>
	                	<span>1 tsp. (5 ml)</span>
	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>eggs</span>
	                	<span>salt</span>
	                	<span>oil</span>
	                </div>
                </div>

              


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body"><b>Rasam Masala: </b>Heat a skillet on medium-high. Add coriander seeds, black peppercorns, cumin seeds, fenugreek seeds and dried red chilies and toast spices for a couple of minutes. Set spices aside to cool.</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a mortar and pestle or spice grinder, finely grind rasam masala. Set aside.
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a medium pot heat oil on medium-high. Add mustard seeds and fry until they pop. Add curry leaves and fry for a minute. 

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Stir in tomato and cook for a minute. Add crushed tomatoes, salt, jaggery, garlic paste, turmeric and rasam masala. Cook for a couple of minutes. Add water to thin out into a soup. Simmer for 10 minutes.

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a small bowl, whisk one egg with salt. In a medium skillet, heat oil on medium-high. Add egg and form a thin crepe. Cook for a couple of minutes until bottom is cooked. Flip and cook the other side. Remove egg to cutting board. When egg crepe is cool, roll into a log and cut into shreds using a sharp knife. Repeat with second egg.
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Spoon rasam into a bowl and arrange shredded egg on top of soup. Garnish with cilantro.

</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>Tip</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">This soup is recognized as a wonderful remedy during cold and flu season.</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/mushroom-truffle-and-egg">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
			     				<div class='name'>蘑菇蛋花松露清湯</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Birds-Nest-Egg-Peral">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-08-Final-web.jpg' />
			     				<div class='name'>紅燒燕液盞</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/eggSamosa">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-11-Final-web.jpg' />
			     				<div class='name'>
			     					Egg Samosa Puffs with Tangy-sweet tamarind chutney
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
        		<td class='text-right'>229 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>16 g</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>2.5 g</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0 g</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>193 mg</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>2030 mg  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白質/b>  </td>
        		<td class='text-right'>15 g</td>
        	</tr>
        	<tr>
        		<td><b>纖維/b>  </td>
        		<td class='text-right'>4 g</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>7 g</td>
        	</tr>
        	<tr>
        		<td><b>Protein</b>  </td>
        		<td class='text-right'>9 g</td>
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