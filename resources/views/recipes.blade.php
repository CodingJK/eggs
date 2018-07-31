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
									<img class='recipes_img' src='/images/recipes/Eggs-SA-15-Final-web.jpg' />
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
								
							</div>

							<div class='col-sm-6 col-lg-4'>
							</div>

						
						</div>

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
						</div>

						
						
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
						</div>
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href="http://www.eggs.ca/recipes" id='ViewAll'> View All </a>
						</div>
						<br /><br /><br />
					</div>
				<hr />
				</div>
	    	</div>
		</div>

	

	   



	     	

			
	      
    </div>
	
	
@stop