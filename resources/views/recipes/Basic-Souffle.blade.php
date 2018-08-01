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
			
				
			
			<span class='recipe_title'>基本梳乎厘</span>
			<p class='title_body'>
					外層酥脆，內裏鬆軟，梳乎厘內裏可填滿您喜歡的餡料。雖然它以難度頗高著稱，但其實製作過程簡單。嘗試加入芝士、蟹肉、蔬菜及其他更多材料，做一頓豐盛的晚餐吧！
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
				<img src="/images/recipes/Eggs-SA-013-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/spoon-icon.png" alt="">份量: 4位用</li>
					<li class='recipe_worlds'>準備時間: 10分鐘</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間 :20分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2茶匙(30毫升) </span>
	                	<span>2茶匙(30毫升)</span>
	                	<span>½茶匙(2.5毫升)</span>
	                	<span>少許</span>
	                	<span>¾杯(175毫升)</span>
	                	<span>6隻，其中2隻只用蛋白</span>
	                	<span>¼茶匙(1.25毫升)</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>牛油</span>
	                	<span>中筋麵粉</span>
	                	<span>鹽</span>
	                	<span>胡椒粉 </span>
	                	<span>牛奶(1%)</span>
	                	<span>雞蛋 (只用蛋白)</span>
	                	<span>塔塔粉
</span>
	                	
	                </div>
                </div>

                


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">預熱焗爐至華氏375度(攝氏190度)</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用小火在中號鍋融化牛油，加入麵粉、鹽和胡椒粉攪拌。煮的同時不斷攪動，直至麵糊細滑多泡，立刻倒入牛奶。繼續攪動直至麵糊滾起而且細滑粘稠
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">把蛋黃和蛋白分開。將蛋黃充分打散，並加入¼杯(50毫升)剛才的暖麵糊到蛋黃裏</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將蛋黃糊與剩餘的麵糊充分混合。如有需要，可加入切碎的餡料至麵糊中攪勻(請參考不同做法)。待麵糊稍微變涼備用</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一個大碗打蛋白和塔塔粉，打至硬挺但不乾。將部分蛋白糊混到蛋黃糊中使其顏色變淡，再輕輕地將蛋黃糊加到蛋白糊中徹底混合</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">小心地把麵糊4杯(1升)倒入梳乎厘焗模或焗盤中</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在預熱至華氏375度(攝氏190度)的焗爐中焗20至25分鐘，至膨脹及稍微變黃，即可享用</div>
						<hr class='hr1'>
					</div>

					
					<hr>

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>不同做法：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">芝士梳乎厘：加入磨碎的瑞士芝士1杯(250毫升)及蔥花2茶匙(30毫升)至麵糊中攪勻</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蟹肉梳乎厘：加入罐頭蟹肉1罐(6安士/170克)、乾百里香½茶匙(2毫升)、咖喱粉½茶匙(2毫升)，及蒜鹽¼茶匙(1毫升)至麵糊中攪勻</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蔬菜梳乎厘：加入煮熟的紅蘿蔔絲1杯(250毫升)、磨碎的車打芝士½杯(125毫升)，及刁草乾¼茶匙(1毫升)至麵糊中攪勻</div>

						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小貼士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">不要將蛋黃一次過加入到熱的麵糊中，因為可能會因凝結得太快而結塊</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">冷雞蛋的蛋白和蛋黃更易分開</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可使用小漏斗分開蛋白和蛋黃。在一個量杯上放漏斗。打蛋入漏斗，蛋白將流到量杯而蛋黃會留在漏斗內</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">如需為梳乎厘圍上一圈「護欄」，可剪一塊雙重厚度，4吋(10厘米) 寬的錫紙，長度足以環繞模具一圈，並留有至少3吋(8厘米)重疊部分。將其繞在模具外並用繩子固定。錫紙應伸出模具邊緣之上2至3吋(5至8厘米)</div>

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
        		<td class='text-right'>168
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>12克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>5.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>462毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>10克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>7克</td>
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