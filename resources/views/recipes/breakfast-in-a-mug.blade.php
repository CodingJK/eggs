@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
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
			
				
			
			<span class='recipe_title'>杯子早餐</span>
			<p class='title_body'>
					只需少少準備工夫，朝早便可2分鐘極速自製窩心美味的醒神早餐。
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FdevilledEggs&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/breakfast-in-a-mug-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 1位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 5分鐘</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 2分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span> 1片 </span>
	                	<span> 2湯匙(30毫升) </span>
	                	<span> 2湯匙(30毫升) </span>
	                	<span> 2湯匙(30毫升) </span>
	                	<span> 1湯匙(15毫升)</span>
	                	<span> 1隻 </span>
	                	<span> 2湯匙(30毫升)</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>全麥麵包 (切小塊)</span>
						<span>火腿(切碎)</span>
						<span>番茄(去籽切粒)</span>
						<span>車打芝士碎</span>
						<span>蔥花</span>
						<span>雞蛋(打散)</span>
						<span>牛奶</span>

	                	


	                </div>
                </div>

                


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">
將火腿、番茄、芝士和蔥花拌勻，放入微波爐適用的杯子中。混合牛奶和蛋攪拌成蛋液，淋入已拌好的材料。
</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">放入微波爐高溫加熱60秒(100%微波火力)，放涼10秒後，再高溫加熱60秒或直至凝固即成。

						</div>
							<hr class='hr1'>
					</div>

					
					
					<hr>


					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小貼士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">不妨配搭其他肉類、蔬菜和芝士，每朝炮製不同口味，製造驚喜。
</div>
						
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/spicy-avocado-eggs-on-toast">
									<img class='recipes_img' src='/images/recipes/Spicy-Avocado-Eggs-on-Toast-Small_r.jpg' />
									<div class='name'>辣牛油果多士</div>
							</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/banana-oat-pancakes">
									<img class='recipes_img' src='/images/recipes/Banana-Oat-Pancakes-small_r.jpg' />
									<div class='name'>香蕉燕麥班戟</div>
							</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Make-ahead breakfast bowls">
									<img class='recipes_img' src='/images/recipes/Make-Ahead-Breakfast-Bowls-small.jpg' />
									<div class='name'>懶人早餐</div>
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
        		<td class='text-right'>259
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>11克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>412毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>5克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>18克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>3.5克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>19克</td>
        	</tr>
        	<tr>
        		<td><b>膽固醇</b></td>
        		<td class='text-right'>0毫克</td>
        	</tr>
        	
        </table>
        <i>每食用份量</i>
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