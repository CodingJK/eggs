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
			
				
			
			<span class='recipe_title'>金絲木須肉夾餅 </span>
			<p class='title_body'>
				Hard-cooked eggs immersed in a delicious South Indian-style coconut milk curry sauce scented with curry leaves.
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2Fkerela&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-15-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量 4</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 20 min</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 30 min</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1½ tbsp. (22.5 ml) </span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>8-10</span>
	                	<span>1</span>
	                	<span>1</span>
	                	<span>¼ cup (60 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>½ tsp. (2.5 ml)</span>
	                	<span>1 tsp. (5 ml)</span>
	                	<span>1½ cup (375 ml)</span>
	                	<span>½ cup (125 ml)</span>
	                	<span>¼ cup (60 ml)</span>
	                	<span>4 </span>
	                	<span>2 tbsp. (30 ml)</span>
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>coconut oil</span>
	                	<span>mustard seeds</span>
	                	<span>curry leaves</span>
	                	<span>large onion, finely chopped</span>
	                	<span>medium tomato, finely chopped</span>
	                	<span>canned crushed tomatoes</span>
	                	<span>garlic paste</span>
	                	<span>ginger paste</span>
	                	<span>coriander powder</span>
	                	<span>cumin powder</span>
	                	<span>chili powder</span>
	                	<span>turmeric powder</span>
	                	<span>salt (or to taste)</span>
	                	<span>coconut milk</span>
	                	<span>water, plus extra to thin out sauce</span>
	                	<span>shredded, dried, unsweetened coconut</span>
	                	<span>hard-cooked eggs, peeled, cut in half lengthwiser</span>
	                	<span>cilantro, finely chopped</span>
	                </div>
                </div>

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a medium pot, heat coconut oil on medium-high. Add mustard seeds and fry for one minute, until they pop. Add curry leaves and fry for a minute. Reduce heat to medium-low. Add onion and caramelize until golden brown in colour, approximately 10-15 minutes.</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Mix in tomato and cook for a minute. Add crushed tomatoes and stir. Add garlic paste, ginger paste, coriander, cumin, chili, turmeric and salt. Mix and cook for a couple of minutes.
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Add coconut milk and water and simmer for a few minutes. Stir in shredded dried coconut.

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Thin out sauce with a little extra water to get desired sauce consistency and add extra salt to taste, if required. Gently add eggs and coat with curry sauce. Garnish with cilantro. Serve with boiled rice.
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>Tip</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">Caramelize onions well until golden brown to bring out the sweetness of onions, otherwise curry will taste bitter. For this recipe you can use fresh or dried curry leaves, available in Indian grocery stores or specialty retailers.</div>
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
		     				<a href="/TikkaMasala">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-17-Final-web.jpg' />
			     				<div class='name'>Tikka Masala Baked Eggs on Curried Garlic	Quinoa with Crumbled Paneer</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Foie-gras-roulade-with-egg-sheet-and-nori">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
			     				<div class='name'>
			     					紫菜鵝肝蛋皮卷
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
        		<td class='text-right'>398 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>33 g</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>26 g</td>
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
        		<td class='text-right'>737 mg  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白質/b>  </td>
        		<td class='text-right'>13 g</td>
        	</tr>
        	<tr>
        		<td><b>纖維/b>  </td>
        		<td class='text-right'>3 g</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>7 g</td>
        	</tr>
        	<tr>
        		<td><b>Protein</b>  </td>
        		<td class='text-right'>10 g</td>
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