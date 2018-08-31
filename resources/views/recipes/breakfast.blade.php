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
	      	<!-- <div class='container-fuild header'>
		      	<div class='header_artical'>
		      		<div class='title'>食譜</div>
		      		<div class='sub_title'>
						瀏覽我們的多款雞蛋食譜，用雞蛋烹調出多姿多彩的菜式！無論是平日的美味早餐，週末的悠閒午餐，還是款待客人的精緻美食，甚至是為孩子製作點心，您都能在這裏找到心儀食譜，為每一餐找到美味「煮」意！
		      		</div>
		      	</div>	
		    </div> -->
	    	<div class='container-fluid Picnic_parent'>

				<div class='complete_parent'>
					
					<div class='complete'> 
						
						<div id='title_com' style="margin-top: 200px; margin-bottom: 50px;">早餐</div>
						
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

						

						
						
						<br /><br /><br />
						<div class='row viewAll_center'>
							<a href="/Recipes" id='ViewAll'> 返回食譜 </a>
						</div>
						<br /><br /><br />
					</div>
			
				</div>
	    	</div>
		</div>
    </div>
	
	
@stop