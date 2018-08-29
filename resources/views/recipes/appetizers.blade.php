@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
				$(".reciptes_link").css('color','#ffcd32');

			});
		</script>
	</script>
	<div id='recipes'>
      	<div class='big_screen_only'>
	      	<div class='container-fuild header'>
		      	<div class='header_artical'>
		      		<div class='title'>食譜</div>
		      		<div class='sub_title'>
						瀏覽我們的多款雞蛋食譜，用雞蛋烹調出多姿多彩的菜式！無論是平日的美味早餐，週末的悠閒午餐，還是款待客人的精緻美食，甚至是為孩子製作點心，您都能在這裏找到心儀食譜，為每一餐找到美味「煮」意！
		      		</div>
		      	</div>	
		    </div>
	    	<div class='container-fluid Picnic_parent'>

				<div class='complete_parent'>
					
					<div class='complete'> 
						
						<div id='title_com' style="margin-top:60px;margin-bottom: 60px;">小食/前菜</div>
						
						<div class='row'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Funny-Egg-Fish">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-13-Final-web.jpg' />
									<div class='name'>趣味小蛋魚</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Boiled-Egg-Oolong-Tea">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-14-Final-web.jpg' />
									<div class='name'>烏龍茶葉蛋</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Moo-Shu-pork-wok-fried">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-27-Final-web.jpg' />
									<div class='name'>
										金絲木須肉夾餅
									</div>
								</a>
							</div>
						
							<div class='col-sm-6 col-lg-4'>
								<a href="/Foie-gras-roulade-with-egg-sheet-and-nori">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
									<div class='name'>紫菜鵝肝蛋皮卷</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/egg-and-veggie-salad-rolls-with-sweet-heat-dipping-sauce">
									<img class='recipes_img' src='/images/recipes/Egg-and-Veggie-Salad-Rolls-with-Sweet-Heat-Dipping-Sauce-small_r.jpg' />
									<div class='name'>越式雞蛋生菜沙律卷配甜辣醬</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/curried-egg-and-potato-salad">
									<img class='recipes_img' src='/images/recipes/Curry-Egg-and-Potato-Salad-small_r.jpg' />
									<div class='name'>咖哩薯仔蛋沙律</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/scallion-and-corn-pancake">
									<img class='recipes_img' src='/images/recipes/Scallion-and-Corn-Pancake-small_r.jpg' />
									<div class='name'>香蔥粟米薄餅</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/smoked-salmon-fritters-with-dill-cream-cheese">
									<img class='recipes_img' src='/images/recipes/Smoked-Salmon-Fritters-with-Dill-Cream-Cheese-small_r.jpg' />
									<div class='name'>刁草忌廉芝士三文魚脆脆餅</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/lobster-devilled-eggs">
									<img class='recipes_img' src='/images/recipes/Lobster-Devilled-Eggs-small_r.jpg' />
									<div class='name'>龍蝦魔鬼蛋</div>
								</a>
							</div>
							
							
							
							<div class='col-sm-6 col-lg-4'>
								
							</div>

							<div class='col-sm-6 col-lg-4'>
							</div>

						
						</div>

						

						
						
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href="http://www.eggs.ca/recipes" id='ViewAll'> 瀏覽食譜 </a>
						</div>
						<br /><br /><br />
					</div>
			
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop