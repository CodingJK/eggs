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
			
				
			
			<span class='recipe_title'>香蔥粟米薄餅</span>
			<p class='title_body'>
					Chef Marysol Foucault教你用雞蛋炮製大廚級異國風味！這款薄餅是宴請摯親好友的下午茶心意之選。
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
				<img src="/images/recipes/Scallion-and-Corn-Pancake-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 25位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 25分鐘</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 10分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>薄餅</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	<span>1杯（250毫升）</span>
	                	<span>1個</span>
	                	<span>1杯（250毫升）</span>
	                	<span>1/4杯（60毫升）</span>
	                	<span>2茶匙（10毫升）</span>
	                	<span>2隻</span>
	                	<span>8條</span>
	                	<span>1杯（250毫升）</span>
						<span>適量</span>
						<span>1/2杯（125毫升）</span>

	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>麵粉</span>
						<span>青檸(汁)</span>
						<span>冰水</span>
						<span>豉油</span>
						<span>是拉差辣醬</span>
						<span>大雞蛋(打散)</span>
						<span>蔥</span>
						<span>粟米(烤好去芯)</span>
						<span>鹽</span>
						<span>芥花籽油或花生油(油炸用)</span>
	                	
	                </div>
                </div>

			<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>配料</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>1 1/2杯（375毫升）</span>
						<span>1個</span>
						<span>1/3杯（75毫升)</span>
						<span>2湯匙（30毫升）</span>
						<span>1杯（250毫升）</span>
						<span>1/2杯（125毫升）</span>

	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>時令蔬菜切片（蘆筍、粟米、青瓜、蘿蔔、瑞士甜菜、甜豌豆）</span>
	                	<span>青檸(汁)</span>
	                	<span>麻油</span>
	                	<span>烘煎芝麻</span>
	                	<span>泡菜（商店購買或自製均可）</span>
	                	<span>紅蔥頭(切片)</span>
	                	
	                </div>
                </div>                














				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將香蔥打橫切成4段，再切成1吋長，放置備用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在大型攪拌碗中，混合麵粉和青檸汁。加入冰水、豉油、是拉差醬和已打散的蛋液，拌勻。加入香蔥、粟米和適量的鹽，拌勻。
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用平底鍋高火燒熱油。將一大匙麵糊倒入熱油中。每個薄餅的直徑應大概1吋（2.5厘米）。煎至金黃酥脆，每邊煎1-2分鐘。用鏟盛起放在吸水紙上，保溫或上碟前重新加熱。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在碗中混合所有配料，備用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在薄餅鋪上蔬菜和泡菜糊，即可食用。</div>
						<hr class='hr1'>
					</div>

					

					
					<hr>

				

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
        		<td class='text-right'>88
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>6克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>0.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0克
</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>340毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>1克
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