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
			
				
			
			<span class='recipe_title'>大阪燒</span>
			<p class='title_body'>
					大阪燒其實就是用椰菜、香蔥和煙肉快速煎成的日式鹹薄餅。大阪燒的意思就是隨意把喜歡的東西燒來吃，所以你可用這個食譜做基礎，加入任何喜歡的配料，炮製出屬於你自己的大阪燒！
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
				<img src="/images/recipes/Okonomiyaki-big.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 6位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 10分鐘</li>
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
 					
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					
						<span>3/4杯（175毫升）</span>
						<span>1/2茶匙（2.5毫升）</span>
						<span>1/2杯（125毫升）</span>
						<span>4隻</span>
						<span>3杯（750毫升）</span>
						<span>2條</span>
						<span>4片</span>
						<span>1/4杯</span>





	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>多用途麵粉</span>
	                	<span>鹽</span>
	                	<span>雞湯或水</span>
	                	<span>雞蛋</span>
	                	<span>椰菜(切絲)</span>
	                	<span>香蔥(切碎)</span>
	                	<span>煙肉(煮熟後壓碎)</span>
	                	<span>（60毫升）芥花籽油</span>

	                </div>
                </div>
                <div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>配料</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	
					
						<span>2杯（500毫升）</span>
						<span>1條</span>
						<span>2杯（500毫升）</span>
						<span>3湯匙（45毫升）</span>
						<span>3湯匙（45毫升）</span>
						<span>3湯匙（45毫升）</span>
						<span>1湯匙（15毫升）</span>
						<span>1湯匙（15毫升）</span>






	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>芽菜</span>
	                	<span>香蔥(打斜切片)</span>
	                	<span>鰹魚碎</span>
	                	<span>醃薑</span>
	                	<span>烘煎芝麻</span>
	                	<span>豉油</span>
	                	<span>喼汁</span>
	                	<span>亞洲風味辣醬</span>
	                </div>
                </div>

			

				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在碗中攪勻麵粉和鹽。在另一個碗，打蛋後加雞湯，倒入麵糊混合。加入椰菜、洋蔥和煙肉。




</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在防黏平底鍋中，中高溫燒熱1湯匙（15毫升）油。倒入1/2杯（125毫升）麵糊，用鍋鏟輕輕按下壓平。煮3-4分鐘或至底部變啡色，翻轉煎多3-4分鐘。用剩餘麵糊重複以上步驟，按需加更多油。

						</div>
							<hr class='hr1'>
					</div>

					
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">配料：放上芽菜、蔥花、鰹魚碎、薑、芝麻、豉油、喼汁和辣醬。

						</div>
							<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">重複以上步驟，可煎多5份。

						</div>
							<hr class='hr1'>
					</div>
					
					<hr>
					
					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12"><b>小貼士：</b></h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">可選用大阪燒醬代替喼汁，更具日式風味。</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">可選用低鈉雞湯代替雞湯。</div>
						

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
        		<td class='text-right'>300
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>18克</td>
        	</tr>
        	
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>1060毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>15克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>20克</td>
        	</tr>
        	<tr>
        		<td><b>膽固醇</b></td>
        		<td class='text-right'>140毫克
</td>
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