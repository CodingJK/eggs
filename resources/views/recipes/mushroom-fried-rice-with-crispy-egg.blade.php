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
			
				
			
			<span class='recipe_title'>蘑菇脆香煎蛋炒飯</span>
			<p class='title_body'>
					如果炒飯是你的摯愛，你一定會喜歡Chef Lynn Crawford大廚的泰國茉莉香米脆香薑蛋炒飯。用來做二人晚餐一流！

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
				<img src="/images/recipes/Mushroom-Fried-Rice-with-Crispy-Egg-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<div>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 2位用</li>
					</div>
					<div>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 25分鐘</li>
				</div>
				<div>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 12分鐘</li>
				</div>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>炒飯</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					<span>2湯匙(30毫升)</span>
					<span>3-4個</span>
					<span>1杯(250毫升)</span>
					<span>1湯匙(15毫升)</span>
					<span>2粒</span>
					<span>1茶匙(5毫升)</span>
					<span>2杯(500毫升)</span>
					<span>2湯匙(30毫升)</span>
					<span>2條</span>

	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>橄欖油</span>
	                	<span>杏鮑菇，打直切成1/4吋厚片</span>
	                	<span>韭菜(切碎)</span>
	                	<span>無鹽牛油</span>
	                	<span>蒜頭(切碎)</span>
	                	<span>薑蓉</span>
	                	<span>泰國茉莉香米(煮熟)</span>
	                	<span>豉油</span>
	                	<span>香蔥(打斜切片)</span>

	                </div>
                </div>
                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>脆香煎蛋</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					
						
					<span>2湯匙(30毫升)</span>
					<span>6湯匙(90毫升)</span>
					<span>2隻</span>







	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>無鹽牛油(分成兩份)</span>
	                	<span>Panko麵包糠混合2茶匙薑蓉(分成兩份)</span>
	                	<span>大雞蛋</span>
	                </div>
                </div>

			

				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在平底鍋用中高火燒熱油，加入蘑菇拌炒3分鐘或至金黃色。盛起備用。





</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在鍋中加入韭菜、牛油、蒜頭、薑蓉、飯和豉油，炒2分鐘。加入蔥花再炒1分鐘。煎蛋期間，蓋起保溫。
						</div>
							<hr class='hr1'>
					</div>

					<div class='recipes_subtitle'>脆香煎蛋步驟:</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在平底鍋用中火燒熱1湯匙牛油。將3湯匙Panko麵包糠糊倒入防黏鍋中間，用匙羹後面壓平。煎至底部金黃酥脆，然後將雞蛋打在上面再煎2分鐘或至蛋白凝固。用剩餘雞蛋重複以上步驟。

						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將炒飯上碟分成兩份，放上脆香煎蛋，立即食用。


						</div>
							<hr class='hr1'>
					</div>
					
					<hr>
					
					
				

				</div>

	
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Gldn-Omlet">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-011-Final-web.jpg' />
									<div class='name ' >黃金蝦仁蛋包飯</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Billnr-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-010-Final-web.jpg' />
									<div class='name ' >闊佬炒飯</div>
								</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Sclp-Egg-Wht-Frd-Rice">
									<img class='recipes_img' src='/images/recipes/Eggs-SA-012-Final-web.jpg' />
									<div class='name ' >薑蓉帶子蛋白炒飯</div>
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
        		<td class='text-right'>740
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>39克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>15克</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.5克</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>1063毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>6克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>24克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>9克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>82克</td>
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