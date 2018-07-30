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
			
				
			
			<span class='recipe_title'>Anday Ki Mithai</span>
			<p class='title_body'>
				Baked Indian sweet made from eggs, semolina and ghee, scented with cardamom and saffron. 
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FandayKi&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-20-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>Yield : 36 pieces</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 25 min</li>
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
	                	<span>½ cup (125 ml)</span>
	                	<span>¼ cup (125 ml) </span>
	                	<span>4</span>
	                	<span>1 cup (250 ml)</span>
	                	<span>10-12 </span>
	                	<span>½ cup (125 ml)</span>
	                	<span>1 tsp. (10 ml)</span>
	                	<span>½ cup (125 ml)</span>
	                	<span>¼ cup (60 ml)</span>
	                	<span>1/8 tsp. (.625 ml) </span>
	                	<span>¼ cup (60 ml)</span>
	                	<span>1 tbsp. (15 ml)</span>
	                	<span>1 tbsp. (15 ml)</span>
	                	
	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>half-and-half cream</span>
	                	<span>skim milk powder</span>
	                	<span>eggs</span>
	                	<span>sugar</span>
	                	<span>saffron strands</span>
	                	<span>ghee, melted (or melted butter)</span>
	                	<span>cardamom seeds, crushed</span>
	                	<span>semolina (sooji)</span>
	                	<span>all-purpose flour</span>
	                	<span>baking soda</span>
	                	<span>raw cashews, halved</span>
	                	<span>pistachios, coarsely chopped, to garnish</span>
	                	<span>raw almonds, coarsely chopped, to garnish</span>
	                	
	                </div>
                </div>


                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Line a rectangular baking pan (11” x 7” x 2”) with parchment paper. Set aside. Preheat oven to 350°F.</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a small non-stick saucepan, add half-and-half cream and skim milk powder. Heat to simmer on medium-high heat, stirring constantly for 15-20 minutes to reduce until mixture solidifies (like khoya). Take care not to burn cream. Set aside.
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">In a large bowl, whisk eggs with sugar, saffron, ghee and cardamom seeds. Add semolina, all-purpose flour and baking soda and mix well. Fold in reduced cream (khoya) and whisk or stir well until smooth.

</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">Step 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">Pour mixture into baking pan. Sprinkle on cashews, pistachios and almonds. Bake in the centre of oven for 25 minutes, until the top is golden brown and a knife runs clean through middle of mithai. Cool and remove to cutting board. Cut mithai on a diagonal line to create diamond shape pieces. 
</div>
						<hr class='hr1'>
					</div>
					<hr>

			

					

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>Tip</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">This is a perfect “tea-time” cake for yourself or your guests, served with a steamy cup of Masala Chai.

 
</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Steamed-crab-claw-with-egg-whites">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
			     				<div class='name'>白玉蒸蟹鉗</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/TikkaMasala">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-17-Final-web.jpg' />
			     				<div class='name'>Tikka Masala Baked Eggs on Curried Garlic	Quinoa with Crumbled Paneer</div>
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
        		<td class='text-right'>85  </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>5 g</td>
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
        		<td class='text-right'>31 mg</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>26 mg  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白質/b>  </td>
        		<td class='text-right'>9 g</td>
        	</tr>
        	<tr>
        		<td><b>纖維/b>  </td>
        		<td class='text-right'>0 g</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>6 g</td>
        	</tr>
        	<tr>
        		<td><b>Protein</b>  </td>
        		<td class='text-right'>2 g</td>
        	</tr>
        </table>
        <i>Per piece</i>
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