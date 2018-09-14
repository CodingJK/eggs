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
			
				
			
			<span class='recipe_title'>法式朱古力咖啡杯</span>
			<p class='title_body'>
					派對甜品的最佳拍檔！朝早或前一晚準備均可，省時省力。特別鳴謝Manitoba Egg Farmers提供食譜。
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
				<img src="/images/recipes/Cafe-Chocolate-Pot-au-Creme-CMS_L.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量: 8位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 15分鐘</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 40分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>朱古力忌廉</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	
	                	<span>1湯匙(15毫升)</span>
						<span>1湯匙(15毫升)</span>
						<span>5盎司(145克)</span>
						<span>2杯(500毫升)</span>
						<span>6隻</span>
						<span>1/2杯(125毫升)</span>
						<span>1/2杯(125毫升)</span>
						<span>1茶匙(5毫升)</span>


	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	
	                	<span>即溶咖啡粒</span>
						<span>熱水</span>
						<span>半甜朱古力</span>
						<span>忌廉</span>
						<span>雞蛋，蛋黃蛋白分開</span>
						<span>砂糖</span>
						<span>2%牛奶</span>
						<span>香草精</span>
						
	                	
	                </div>
                </div>

			<div class="ingredients" style='clear: both'>
 					<div class='recipes_subtitle'>蛋白脆餅</div>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>2隻</span>
						<span>適量</span>
						<span>1/2杯(125毫升)</span>
						<span>&nbsp;</span>
						


	                	
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>蛋白</span>
	                	<span>塔塔粉</span>
	                	<span>漿果糖</span>
	                	<span>肉桂粉</span>
	                	
	                	
	                </div>
                </div>                


                <div class="step">

					<div class='recipes_subtitle'>步驟:</div>
					<div class='recipes_subtitle'>朱古力忌廉:</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">預熱焗爐至350°F(180°C)。把廚房毛巾褶起，鋪在大型焗盤上。將咖啡溶在熱水中攪勻，備用。</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">把碗放入熱水中，或使用燉盅，將朱古力和1杯忌廉攪勻，直至朱古力融化，取出。逐漸拌入剩餘忌廉和咖啡。

						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大碗將6隻蛋黃和1/2杯(125毫升)砂糖攪拌3-4分鐘至變稠且淺色。拌入朱古力漿、牛奶和呍呢拿精。倒入8個4安士的甜品碗中。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將甜品杯放在準備好的焗爐盤上，倒入熱水至碗的一半高，用錫紙蓋上。將焗盤放入預熱的焗爐中。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在熱水中焗35-40分鐘，直至邊緣徹底凝固。</div>
						<hr class='hr1'>
					</div>
					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">從水中取出放涼，然後冷藏2-3小時，讓中心完全凝固。灑上肉桂粉，配以蛋白脆餅食用即可。</div>
						<hr class='hr1'>
					</div>
					

					

					
					<hr>

				

				</div>

				<div class="step">

					<div class='recipes_subtitle'>蛋白脆餅:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在大型焗盤上鋪一層焗爐紙，放置備用。在碗中發打蛋白和塔塔粉1分鐘，直至微微隆起。逐次加入2湯匙(30毫升)砂糖，攪拌至光澤堅挺。用廚房湯匙，將一勺蛋白脆餅放在準備好的焗盤上。用200°F(100°C)焗1小時。取出放涼至室溫。甜點可放在密封容器中三日。食譜可供製作10-12個蛋白脆餅。
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
		     				<a href="/Syrup-Lts-Seed">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-23-Final-web.jpg' />
														<div class='name ' >蓮子蛋茶</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/blueberry-cake">
														<img class='recipes_img' src='/images/recipes/Blueberry-Cake-small_r.jpg' />
														<div class='name ' >藍莓蛋糕</div>
													</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Bld-Swtnd-Milk">
														<img class='recipes_img' src='/images/recipes/Eggs-SA-22-Final-web.jpg' />
														<div class='name ' >鳳凰奶露</div>
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
        		<td class='text-right'>396.2
 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>31.5克</td>
        	</tr>
        	
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>37.5毫克
</td>
        	</tr>
        	
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>4.5克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>1克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b></td>
        		<td class='text-right'>27.2克</td>
        	</tr>
        	
        </table>
       <!--  <i>每食用份量</i> -->
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