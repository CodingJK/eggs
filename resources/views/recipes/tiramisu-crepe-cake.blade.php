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
			
				
			
			<span class='recipe_title'>提拉米蘇千層蛋糕</span>
			<p class='title_body'>
					這款提拉米蘇由一層層薄身班戟堆疊而成，在班戟上逐層塗上特濃咖啡馬斯卡彭芝士，口口煙韌，柔軟淡雅，帶來甜甜滋味。
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
				<img src="/images/recipes/Tiramisu-Crepe-Cake-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 12位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 15分鐘</li>
					<li><img src="/images/icons/icon-recipe-waittime.svg" alt=""></li>
					<li class='recipe_worlds'>等候時間: 3小時</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 25分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>班戟</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
					<span>3杯（750毫升）</span>
					<span>2 1/4杯（565毫升）</span>
					<span>6隻</span>
					<span>1/4杯（60毫升）</span>
					<span>1/4茶匙（1.25毫升）</span>
					<span>2湯匙（30毫升）</span>

	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>牛奶(室溫)</span>
	                	<span>多用途麵粉</span>
	                	<span>雞蛋(室溫)</span>
	                	<span>加熱融化牛油</span>
	                	<span>鹽</span>
	                	<span>芥花籽油</span>

	                	
	                </div>
                </div>

                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>餡料</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>3隻</span>
						<span>2湯匙（30毫升）</span>
						<span>2湯匙（30毫升）</span>
						<span>1/4杯（60毫升）</span>
						<span>1/4杯（60毫升）</span>
						<span>1/4茶匙（1.25毫升）</span>
						<span>1桶（450克）</span>


	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>蛋黃</span>
	                	<span>砂糖</span>
	                	<span>特濃咖啡</span>
	                	<span>淡忌廉(35%脂肪)</span>
	                	<span>糖霜</span>
	                	<span>肉桂粉</span>
	                	<span>馬斯卡彭芝士</span>

	                </div>
                </div>
                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>裝飾</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
						<span>1/4杯（60毫升）</span>
						<span>2湯匙（30毫升）</span>
						<span>1湯匙（15毫升）</span>

	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>特濃咖啡(凍)</span>
	                	<span>咖啡甜酒</span>
	                	<span>可可粉</span>

	                </div>
                </div>


                


				<div class="step">

					<div class='recipes_subtitle'>班戟步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在攪拌機中，將牛奶、麵粉、雞蛋、已煮融的牛油和鹽混合，攪拌至順滑。靜置至少30分鐘（麵糊應該呈厚忌廉狀；可加少量水稀釋）。
							<hr class='hr1'>
</div>
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">中火加熱10吋（25厘米）防黏平底鍋，掃上一層薄油。將1/3杯（75毫升）麵糊倒入鍋中，旋轉覆蓋鍋底。煎60-90秒或至薄邊微微捲曲。翻轉再煎30秒或至熟透。用剩餘麵糊重複，按需掃上油。移至焗爐紙，徹底放涼。
</div>
						<hr class='hr1'>
					</div>

					<div class='recipes_subtitle'>餡料步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將耐熱碗放入裝有微沸水的平底鍋中，加入蛋黃、砂糖和特濃咖啡攪拌約5分鐘，或直至熱度、厚度和柔軟度適中。拿起攪拌器具時，麵糊應呈絲帶狀（避免過度烹煮，令麵糊凝固）。熄火，徹底放涼。
</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用電動攪拌機攪打忌廉至企身，拌入糖霜和肉桂粉打勻。在大碗中打拌馬斯卡彭芝士至輕盈蓬鬆，拌入蛋黃糊。加入一半忌廉糊打勻，再加入其餘忌廉糊打勻。蓋上並冷藏30-60分鐘。

						</div>
							<hr class='hr1'>
					</div>
					<div class='recipes_subtitle'>製作步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">混合咖啡甜酒和特濃咖啡，拌勻。將一塊班戟平放在碟上，塗抹2湯匙（30毫升）餡料。薄薄掃上一層特濃咖啡水。用剩餘的班戟重複，逐層堆疊。冷藏至少2小時。灑上可可粉後切成厚件即可上碟。</div>
						<hr class='hr1'>
					</div>

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小貼士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">可選用特濃咖啡和1湯匙（15毫升）糖代替咖啡甜酒。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可選用朱古力特濃咖啡豆做裝飾。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">班戟可提前2至3日製作備用。</div>

						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/mushroom-truffle-and-egg">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-07-Final-web.jpg' />
			     				<div class='name'>蘑菇蛋花松露清湯</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Birds-Nest-Egg-Peral">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-08-Final-web.jpg' />
			     				<div class='name'>紅燒燕液盞</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/masalaEggKachumber">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-10-Final-web.jpg' />
			     				<div class='name'>
			     					Masala Egg Kachumber Salad
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
        		<td class='text-right'>430
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>31克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>15克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.4克
</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>160毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>9克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>11克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>27克</td>
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