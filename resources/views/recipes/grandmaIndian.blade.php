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
			<span class='recipe_title'>Grandma’s Indian-style Omelette</span>
			<p class='title_body'>
				This typical Indian-style omelette is a classic combination of fresh tomatoes, red onion, cilantro and green chilies with a hint of garam masala – perfect for breakfast, brunch or lunch.
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				 
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FgrandmaIndian&amp;src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-02-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>Serves: 4</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 10 min</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 15 min</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">

				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
                <div class="ingredients">
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>4</span>
	                	<span>¼ tsp. (1.25 ml)</span>
	                	<span>1 tsp. (5 ml)	</span>
	                	<span>4 tsp. (20 ml)</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>large eggs</span>
	                	<span>salt (or to taste)</span>
	                	<span>garam masala</span>
	                	<span>ghee or butter</span>
	                </div>
                </div>
				
				<div class='recipes_subtitle_1'>Omelette Filling:</div>
                <div class="ingredients">
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1 tbsp. (15 ml)</span>
	                	<span>1 cup (250 ml)</span>
	                	<span>¾ cup (175 ml)</span>
	                	<span>¾ cup (175 ml)</span>
	                	<span>1-2</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>ghee or butter</span>
	                	<span>tomato, finely cubed</span>
	                	<span>red onion, finely chopped</span>
	                	<span>cilantro, finely chopped</span>
	                	<span>small green chilies, finely chopped (optional)</span>
	                </div>
                </div>
				
				<div class='recipes_subtitle_1'>Garam Masala Ketchup:</div>
                <div class="ingredients">
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>½ cup (125 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>¼ tsp. (1.25 ml)</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>tomato ketchup</span>
	                	<span>garam masala</span>
	                	<span>chili powder (optional)</span>
	                	
	                </div>
                </div>
				<div class="container-fuild step">
					<div class='recipes_subtitle'>步驟:</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body"><b>Garam masala ketchup: </b> In a small bowl, add tomato ketchep and mix in garam masala (and chili powder). Set aside. </div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body"><b>Omelette Filling: </b>Heat a medium non-stick skillet on medium-high. Melt ghee or butter and add tomato, red onion, cilantro and green chilies. Gently fry for a couple of minutes until onion is softened. Remove mixture from skillet and set aside.
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a small bowl, beat one egg with fork and mix in ¼ tsp. salt and ¼ tsp. garam masala. </div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a skillet, melt 1 tsp. of ghee or butter. Add egg mixture and spread evenly in skillet to create a thin egg crepe-like omelette. Cook for a few minutes until golden brown and omelette is cooked. Sprinkle on a ¼ amount of cooked tomato and onion mixture. Roll omelette into a log. Continue with remaining eggs. 

Serve with Garam Masala Ketchup.
</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>Tip</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">When possible, use ghee for this recipe as it lends a rich buttery taste to this Indian-style omelette.</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Scrambled-Eggs">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-04-Final-web.jpg' />
			     				<div class='name'>粟米煙肉炒蛋</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/bittaraAppa">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-05-Final-web.jpg' />
			     				<div class='name'>Bittara Appa – Sri Lankan Egg Hoppers</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-01-Final-web.jpg' />
			     				<div class='name'>
			     					番茄煙肉煎蛋早餐三文治
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
        		<td class='text-right'>200 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>14 g</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>7 g</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0 g</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>216 mg</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>597 mg  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白質/b>  </td>
        		<td class='text-right'>14 g</td>
        	</tr>
        	<tr>
        		<td><b>纖維/b>  </td>
        		<td class='text-right'>1 g</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>10 g</td>
        	</tr>
        	<tr>
        		<td><b>Protein</b>  </td>
        		<td class='text-right'>7 g</td>
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