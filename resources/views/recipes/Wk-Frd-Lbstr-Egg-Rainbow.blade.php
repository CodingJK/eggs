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
			
				
			
			<span class='recipe_title'>鴛鴦芙蓉龍蝦球</span>
			<p class='title_body'>
				這是生猛海鮮的最佳食法，也是享用新鮮龍蝦的好方式。不單賣相十分吸引，而且做法其實相當簡單。
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
				<img src="/images/recipes/Eggs-SA-007-Final-large.jpg" alt="">
			</div>

			<div class="col-xs-12  text-center desc">
				<ul class='container-fuild text-center'>
					<li><img src="/images/icons/serves-icon.png" alt=""></li>
					<li class='recipe_worlds'>份量： 4位用</li>
					<li><img src="/images/icons/spoon-icon.png" alt=""></li>
					<li class='recipe_worlds'>準備時間: 20-25分鐘</li>
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
	                	<span>907克</span>
	                	<span>284克</span>
	                	<span>6隻</span>
	                	<span>70毫升</span>
	                	<span>½茶匙或適量</span>
	                	<span>½茶匙</span>
	                	<span>2茶匙</span>
	                	
	                </div>
	                <div class="col-xs-6 text-left ingredients_left">
	                	<span>龍蝦</span>
	                	<span>西蘭花</span>
	                	<span>雞蛋 (只用蛋白)</span>
	                	<span>半脂奶</span>
	                	<span>鹽</span>
	                	<span>糖</span>
	                	<span>生油
</span>
	                </div>
                </div>


                

                
           

              


				<div class="step">

					<div class='recipes_subtitle'>步驟:</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 1</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用大鍋煮滾4升水，放入龍蝦灼5分鐘</div>
						<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 2</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">龍蝦灼熟後用剪刀剪下頭和身，剪開龍蝦尾背部的殼，一路剪至尾端，取出肉切成6至8件。敲裂龍蝦鉗，從龍蝦身剝下頭殼，然後將龍蝦身切成6至8件，每件連住1隻腳，備用 
						</div>
							<hr class='hr1'>
					</div>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 3</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">西蘭花切細件，用一個小鍋煮滾1升水，放入西蘭花灼5分鐘，撈出備用
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 4</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一個大碗內充分攪勻蛋白、半脂奶和鹽、糖各½茶匙
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 5</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">用中火燒鑊，落油2茶匙，倒入第4步的蛋白和奶，輕輕炒1分鐘，再落龍蝦尾肉炒多1分鐘
</div>
						<hr class='hr1'>
					</div>
					<hr>

					<div class="steps col-xs-12  text-center">
						<div class="step_title col-xs-12">步驟 6</div>
						<div class="col-xs-10 col-xs-offset-1 step_body">在一個圓形或橢圓形的碟上圍上西蘭花圈，放上第5步的龍蝦尾和蛋白奶
</div>
						<hr class='hr1'>
					</div>
					<hr>

					

					

					

					<div class="steps col-xs-12  text-center">

						<h1 class="col-xs-12">步驟 7</h1>
						<div class="col-xs-10 col-xs-offset-1 step_body">在西蘭花圈外伴上煮熟的龍蝦鉗和身即可享用</div>
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