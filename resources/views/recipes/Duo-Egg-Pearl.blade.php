@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
				// $(".nav-justified a").css('border-color','white');
				// $(".nav-justified a").css('color','black');
				// $(".nav-justified a").mouseenter( function(){
				// 	$(this).css('border-color','#ffcd32');
				// } ).mouseleave(  function(){
				// 	$(this).css('border-color','white');
				// } );
				// $(".reciptes_link").css('color','#ffcd32');
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
			
				
			
			<span class='recipe_title'>豬骨濃湯菜苗伴鴛鴦蛋</span>
			<p class='title_body'>
				這是「火鍋」的新煮法。其中我們介紹到熬製美味濃湯的方法，亦可用在其他豐富的菜式當中。您可用豆苗代替白菜。
			</p>

			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				<a target="_blank" href='https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.EggHiSuperstar.com%2FTikkaMasala&src=sdkpreparse' style='padding-right:15px'>
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
				<img src="/images/recipes/Eggs-SA-009-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量： 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 25分鐘</li>
					<li><img src="/images/icons/soup-icon.png" alt=""></li>
					<li class='recipe_worlds'>烹調時間: 準備濃湯2小時05分鐘+20分鐘</li>
				</ul>
			</div>

			<div class="col-xs-12 recipe_details text-center">
				
				<div class='recipes_subtitle'>材料</div>

				<div style='margin-bottom: 50px;'>
                    <a href='#' class='recipe_nutrition' data-toggle="modal" data-target="#myModal"> 營養成分 </a>
                </div>
           
                
 				<div class="ingredients" style='clear: both'>
	                <div class="col-xs-6 text-right ingredients_right">
	                	<span>453克</span>
	                	<span>453克</span>
	                	<span>56克</span>
	                	<span>3隻</span>
	                	<span>1茶匙</span>
	                	<span>227克</span>
	                	<span>28克</span>
	                	<span>½茶匙</span>
	                	<span>½茶匙</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>雞骨</span>
	                	<span>豬骨</span>
	                	<span>薑</span>
	                	<span>白胡椒粒</span>
	                	<span>生油</span>
	                	<span>白菜苗</span>
	                	<span>杞子</span>
	                	<span>鹽</span>
	                	<span>糖</span>
	                </div>
                </div>


                

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大鍋燒滾2升水，放入雞骨和豬骨煮5分鐘，撈出瀝乾水分</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用同一個鍋重新裝2升水，放入上個步驟的雞骨和豬骨，加薑、白胡椒粒，加蓋用中火煲90分鐘，再換大火滾30分鐘，成500毫升濃湯。使用湯隔隔渣濾得清湯，備用
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">分開蛋白和蛋黃入2個碗中
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">分別攪勻蛋白和蛋黃
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在8隻中式湯匙內搽上生油
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">往4隻搽好油的湯匙注入蛋白，另外4隻注入蛋黃
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步驟 7</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大鍋燒滾2升水，置入蒸架再放入湯匙，加蓋隔水蒸5分鐘</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步驟 8</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">蛋液會結成蛋盞，從湯匙取出備用</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步驟 9</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用鍋燒滾1升水，放入白菜苗滾3分鐘取出</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步驟 10</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將第9步的白菜苗放入砂鍋中，放入第8步的蛋盞，加杞子，再注入第2步的500毫升濃湯，用鹽、糖各½茶匙調味</div>
						<hr class='hr1'>
						
					</div>

					<div class="steps col-xs-12  text-center">

						<div class="step_title col-xs-12">步驟 11</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">將砂鍋置於爐上燒滾(約3分鐘)即可享用</div>
						<hr class='hr1'>
						
					</div>
				</div>
                
			</div>
			
			<div class="col-xs-12 text-center related">
				<h1>相關</h1>
				<div class="container-fuild">
					<div class='col-sm-4 col-xs-12'>
		     				<a href="/Funny-Egg-Fish">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-13-Final-web.jpg' />
			     				<div class='name'>趣味小蛋魚</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/EggsMakhani">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-18-Final-web.jpg' />
			     				<div class='name'>Eggs Makhani</div>
			     			</a>
		     			</div>

		     			<div class='col-sm-4 col-xs-12'>
		     				<a href="/Boiled-Egg-Oolong-Tea">
			     				<img class='recipes_img' src='/images/recipes/Eggs-SA-14-Final-web.jpg' />
			     				<div class='name'>
			     					烏龍茶葉蛋
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
        		<td class='text-right'>209 </td>
        	</tr>
        	<tr>
        		<td><b>脂肪</b></td>
        		<td class='text-right'>6克</td>
        	</tr>
        	<tr>
        		<td><b>飽和脂肪</b></td>
        		<td class='text-right'>1.5克
</td>
        	</tr>
        	<tr>
        		<td><b>反式脂肪</b>  </td>
        		<td class='text-right'>0.1克
</td>
        	</tr>
        	<tr>
        		<td><b>鈉</b></td>
        		<td class='text-right'>858毫克
</td>
        	</tr>
        	<tr>
        		<td><b>糖</b>  </td>
        		<td class='text-right'>3克
  </td>
        	</tr>
        	<tr>
        		<td><b>蛋白質</b>  </td>
        		<td class='text-right'>32克
</td>
        	</tr>
        	<tr>
        		<td><b>纖維</b>  </td>
        		<td class='text-right'>2克
</td>
        	</tr>
        	<tr>
        		<td><b>碳水化合物</b>  </td>
        		<td class='text-right'>8克</td>
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