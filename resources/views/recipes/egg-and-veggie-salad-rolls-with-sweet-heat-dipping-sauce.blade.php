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
			
				
			
			<span class='recipe_title'>越式雞蛋生菜沙律卷配甜辣醬</span>
			<p class='title_body'>
					沙律米紙卷是越南餐廳的馳名頭盤，加入雞蛋即可炮製出方便快捷的營養午餐。
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
				<img src="/images/recipes/Egg-and-Veggie-Salad-Rolls-with-Sweet-Heat-Dipping-Sauce.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 10分鐘</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 20分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>沙律卷</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	<span>8隻</span>
	                	<span>8張</span>
	                	<span>4片</span>
	                	<span>1杯（250毫升）</span>
	                	<span>1/4條</span>
	                	<span>1/2個</span>
	                	<span>16塊</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>雞蛋(全熟)</span>
	                	<span>圓米紙*</span>
	                	<span>西生菜(切一半) </span>
	                	<span>米粉(煮熟)</span>
	                	<span>青瓜(切絲)</span>
						<span>紅甜椒(切絲)</span>
						<span>羅勒葉和/或薄荷葉</span>
	                	
	                </div>
                </div>

                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>醬汁</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	<span>1/4杯（60毫升）</span>
	                	<span>3湯匙（45毫升）</span>
	                	<span>1/4杯（60毫升）</span>
	                	<span>少量</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>熱水</span>
						<span>糖</span>
						<span>米醋</span>
						<span>辣醬，如印尼辣椒醬或是拉差</span>
	                	
	                </div>
                </div>











				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">雞蛋剝殼切成四塊薯角狀。製作前預備好所有材料。鋪一條乾淨的茶巾在檯面上。將熱水倒入一個平底盤或餅盤中。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">米紙放入熱水浸泡至軟身，鋪在毛巾上待涼。將半片西生菜放在米紙中間，再放上米粉、青瓜、紅甜椒和2片羅勒葉和/或薄荷葉。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將四塊雞蛋鋪在上面排成一行（可能略微重疊）。將米紙捲緊餡料，收起米紙邊。秘訣：如果覺得鬆動，可以用多一張米捲上。用其餘的米紙重複以上步驟。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">醬汁：攪拌熱水和糖至融化。隨個人喜好加入米醋和辣醬調味。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將沙律卷切開一半，伴以醬汁食用。</div>
						<hr class='hr1'>
					</div>

					

					
					<hr>

				

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小貼士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">* 米紙在各大超市和亞洲食品店均有售。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將沙律卷用濕紙巾包裹，放置活動封口膠袋或有蓋食物盒中冷藏不超過一日。</div>
						

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
        		<td class='text-right'>324
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>11克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>3克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.1克
</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>359毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>11克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>15克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>42克</td>
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