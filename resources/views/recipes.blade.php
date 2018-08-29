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
						
						<div id='title_com' style="margin-top:60px;margin-bottom: 60px;">全部中文食譜</div>
						
						<div class='row'>
                   <div class='col-sm-6 col-lg-4'>
                                <a href="/breakfast">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-02-Final-web.jpg' />
                                    <div class='name'>早餐</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/soup">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
                                    <div class='name'>湯</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/appetizers">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-16-Final-web.jpg' />
                                    <div class='name'>小食/前菜 </div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/main">
                                    <img class='recipes_img' src='/images/recipes/Eggs-SA-26-Final-web.jpg' />
                                    <div class='name'>主菜</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                               <a href="/dessert">
                                <img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
                                    <div class='name'>甜品</div>
                                </a>
                    </div>
                    <div class='col-sm-6 col-lg-4'>
                                <a href="/newest">
                                    <img class='recipes_img' src='/images/recipes/Classic-Pad-Thai-small_r.jpg' />
                                    <div class='name'>最新食譜 </div>
                                </a>
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