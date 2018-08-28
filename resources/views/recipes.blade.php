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
						瀏覽我們的多款雞蛋食譜，用雞蛋烹調出多姿多彩的菜式！無論是平日的美味早餐，週末的悠閒午餐，
						還是款待客人的精緻美食，甚至是為孩子製作點心，您都能在這裏找到心儀食譜，為每一餐找到美味「煮」意！
		      		</div>
		      	</div>	
		    </div>
	    	<div class='container-fluid Picnic_parent'>

				<div class='complete_parent'>
					
					<div class='complete'> 
						
						<div id='title_com'>早餐</div>
						
						<div class='row'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/English-Muffin-Bacon-Tomato-Fried-Egg">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
									<div class='name'>番茄煙肉煎蛋早餐三文治</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Scrambled-Eggs">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-04-Final-web.jpg' />
									<div class='name'>粟米煙肉炒蛋</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/breakfast-in-a-mug">
									<img class='recipes_img' src='/images/recipes/breakfast-in-a-mug-small_r.jpg' />
									<div class='name'>杯子早餐</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/spicy-avocado-eggs-on-toast">
									<img class='recipes_img' src='/images/recipes/Spicy-Avocado-Eggs-on-Toast-Small_r.jpg' />
									<div class='name'>辣牛油果多士</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/ham-and-cheese-omelette-roll-ups">
									<img class='recipes_img' src='/images/recipes/Ham-and-Cheese-Omelette-Roll-Ups-small_r.jpg' />
									<div class='name'>芝士火腿奄列蛋卷</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/banana-oat-pancakes">
									<img class='recipes_img' src='/images/recipes/Banana-Oat-Pancakes-small_r.jpg' />
									<div class='name'>香蕉燕麥班戟</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Make-ahead breakfast bowls">
									<img class='recipes_img' src='/images/recipes/Make-Ahead-Breakfast-Bowls-small.jpg' />
									<div class='name'>懶人早餐</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								
							</div>

							

							
						</div>

						
						<hr>

						<div id='title_com'>湯</div>
						<div class='row'>
							<div class=' col-sm-6 col-lg-4'>
								<a href="/fish-bisque-egg-white">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-06-Final-web.jpg' />
									<div class='name'>芙蓉斑片羮</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/mushroom-truffle-and-egg">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
									<div class='name'>蘑菇蛋花松露清湯</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Birds-Nest-Egg-Peral">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-08-Final-web.jpg' />
									<div class='name'>
										紅燒燕液盞 	
									</div>
								</a>
							</div>
							
						</div>

						<hr>
						<div id='title_com'>小食/前菜</div>
						
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
						<hr>
						<div id='title_com'>主菜</div>
						
						<div class='row text-center'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Steamed-crab-claw-with-egg-whites">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-19-Final-web.jpg' />
									<div class='name ' >白玉蒸蟹鉗</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/St-Egg-Wht-Sea-Treasure">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-20-Final-web.jpg' />
									<div class='name ' >海皇扒蒸蛋白</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/St-Egg-Mncd-Pork">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-15-Final-web.jpg' />
									<div class='name ' >瑤柱肉末蒸滑蛋</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Scrmbld-Egg-Fish-Maw">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-21-Final-web.jpg' />
									<div class='name ' >桂花雲腿炒魚肚</div>
								</a>
							</div>
							{{-- 1 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Wk-Frd-Lbstr-Egg-Rainbow">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-007-Final-web.jpg' />
									<div class='name ' >鴛鴦芙蓉龍蝦球</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Chiu-Chow-Omeletd">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
									<div class='name ' >潮式煎蠔餅</div>
								</a>
							</div>

							{{-- 2 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Blck-Bn-Shrmp-Egg-White">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-008-Final-web.jpg' />
									<div class='name ' >廣東蛋花蝦龍糊</div>
								</a>
							</div>
							{{-- 3 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Duo-Egg-Pearl">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-009-Final-web.jpg' />
									<div class='name ' >豬骨濃湯菜苗伴鴛鴦蛋</div>
								</a>
							</div>
							{{-- 4 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Billnr-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-010-Final-web.jpg' />
									<div class='name ' >闊佬炒飯</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Gldn-Omlet">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
									<div class='name ' >黃金蝦仁蛋包飯</div>
								</a>
							</div>

							{{-- 5 --}}
							<div class='col-sm-6 col-lg-4'>
								<a href="/Sclp-Egg-Wht-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-012-Final-web.jpg' />
									<div class='name ' >薑蓉帶子蛋白炒飯</div>
								</a>
							</div>

							<div class='col-sm-6 col-lg-4'>
								<a href="/Basic-Souffle">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-013-Final-web.jpg' />
									<div class='name ' >基本梳乎厘</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/chinese-crepes">
									<img class='recipes_img' src='/images/recipes/chinese-crepes-small_r.jpg' />
									<div class='name ' >中式薄餅</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/shrimp-and-egg-fried-rice">
									<img class='recipes_img' src='/images/recipes/Shrimp-and-Egg-Fried-Rice-small_r.jpg' />
									<div class='name ' >蝦仁滑蛋炒飯</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/classic-pad-thai">
									<img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
									<div class='name ' >泰式炒河</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/spinach-and-mushroom-soba-noodle-soup">
									<img class='recipes_img' src='/images/recipes/Spinach-and-Mushroom-Soba-Noodle-Soup-small_r.jpg' />
									<div class='name ' >菠菜蘑菇蕎麥湯麵</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/okonomiyaki">
									<img class='recipes_img' src='/images/recipes/Okonomiyaki-small_r.jpg' />
									<div class='name ' >大阪燒</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/mushroom-fried-rice-with-crispy-egg">
									<img class='recipes_img' src='/images/recipes/Mushroom-Fried-Rice-with-Crispy-Egg-small_r.jpg' />
									<div class='name ' >蘑菇脆香煎蛋炒飯</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/spaghetti-carbonara">
									<img class='recipes_img' src='/images/recipes/Spaghetti-Carbonara-small_r.jpg' />
									<div class='name ' >卡邦尼意粉</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/cedar-plank-salmon-with-nicoise-relish">
									<img class='recipes_img' src='/images/recipes/Cedar-Plank-Salmon-small_r.jpg' />
									<div class='name ' >雪松木板三文魚配尼斯醬</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/poached-egg-over-roasted-asparagus">
									<img class='recipes_img' src='/images/recipes/Poached-Egg-over-Roasted-Asparagus-small_r.jpg' />
									<div class='name ' >烤蘆筍流心蛋</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/grilled-eggs-in-portobello-mushrooms">
									<img class='recipes_img' src='/images/recipes/Grilled-Eggs-in-Portobello-Mushrooms-small_r.jpg' />
									<div class='name ' >芝士雞蛋焗大蘑菇</div>
								</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/baked-eggs-extraordinaire">
									<img class='recipes_img' src='/images/recipes/Baked-Eggs-Extraordinaire-small_r.jpg' />
									<div class='name ' >香草芝士焗蛋</div>
									
								</a>
							</div>
							
							
							
							
						</div>

						<hr>
						
						<div id='title_com'>甜品</div>
						
						<div class='row text-center'>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Bld-Swtnd-Milk">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
														<div class='name ' >鳳凰奶露</div>
													</a>
							</div>
						
							<div class='col-sm-6 col-lg-4'>
								<a href="/Syrup-Lts-Seed">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-23-Final-web.jpg' />
														<div class='name ' >蓮子蛋茶</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/Egg-Tart">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-24-Final-web.jpg' />
														<div class='name ' >酥皮蛋撻</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/maple-walnut-tarts">
														<img class='recipes_img' src='/images/recipes/Maple-Walnut-Tarts-small_r.jpg' />
														<div class='name ' >楓糖核桃撻</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/creme-caramel">
														<img class='recipes_img' src='/images/recipes/Creme-Caramel-small_r.jpg' />
														<div class='name ' >法式焦糖燉蛋</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/blueberry-cake">
														<img class='recipes_img' src='/images/recipes/Blueberry-Cake-small_r.jpg' />
														<div class='name ' >藍莓蛋糕</div>
													</a>
							</div>
							<div class='col-sm-6 col-lg-4'>
								<a href="/tiramisu-crepe-cake">
														<img class='recipes_img' src='/images/recipes/Tiramisu-Crepe-Cake-small_r.jpg' />
														<div class='name ' >提拉米蘇千層蛋糕</div>
													</a>
							</div>
							

							
						</div>
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href="http://www.eggs.ca/recipes" id='ViewAll'> 瀏覽食譜 </a>
						</div>
						<br /><br /><br />
					</div>
				<hr />
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop