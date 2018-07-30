@extends('layouts.app')
@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');

				$(".eggs101_link").css('color','#ffcd32');


			});
		</script>
		<style>
			
		</style>
		<div class='container-fuild eggs101_header'>
				<div class='eggs101_title'>雞蛋小知識</div>
				<div class='eggs101_title_body'>
					想知道有關雞蛋的常識？以下將介紹一些非常實用的雞蛋小知識。齊來更了解雞蛋吧！
				</div>
		</div>
		
		<div class='container-fuild '>
			
			<div class='eggs101_subtitle text-center'>雞蛋簡介</div>



			<div class="col-xs-8 col-xs-offset-2 text-center eggs101-social">
				
				{{-- <a href='https://www.facebook.com/eggs' style='padding-right:15px'>
					<img id='fb' src='./images/social/eggs101/egg_socialMediaIconSet_facebook.png' />
				</a>
				<a href='https://twitter.com/eggsoeufs' >
					<img id='twitter' src='./images/social/eggs101/egg_socialMediaIconSet_twitter.png' />
				</a>
				<a href='https://www.pinterest.ca/eggs/' style='padding-left:15px'>
					<img id='pinterest'  src='./images/social/eggs101/egg_socialMediaIconSet_pinterest.png' />
				</a> --}}
				<h4>
					您在選購雞蛋時可能並無多加考慮。但讀完這篇簡介後，您肯定會想為什麼沒有早點多了解雞蛋！
				</h4>
			</div>
			<div class="col-xs-2">
				
			</div>

			<div class='col-xs-12 eggs_img'>
				<img src='/images/eggs101/eggs-white.jpg'/>
			</div>
			
		</div>




		<div class='container-fuild eggs_words'>


			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_body_subtitle text-left">紅殼蛋和白殼蛋有何分別？</div>
				<div class="col-md-1"></div>
			</div>
			<div class="col-md-auto"></div>

			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_body">紅殼雞蛋和白殼雞蛋的不同取決於母雞的品種。這似乎也有點顯而易見，簡單來說，就是紅色蛋產自紅毛母雞，白色蛋則產自白毛母雞。而在營養和味道方面，兩種蛋完全一樣，如何挑選實屬個人喜好。</div>
			</div>
			<div class="col-md-auto"></div>

			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_body_subtitle text-left">大中小號：我應選擇甚麼大小？</div>
				<div class="col-md-1"></div>
			</div>
			<div class="col-md-auto"></div>
			
			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_body">您可能留意到超市的雞蛋有多種大小可供選擇，由特小到特大不等。在加拿大，所有A級雞蛋都按重量分類，而非大小或形狀，因此有時同一個盒中的蛋可能看上去大小不一，但它們的重量總在相似範圍內。</div>
			</div>
			<div class="col-md-auto"></div>

			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_img">
					<img src="./images/eggs101/egg-anatomy-EN.jpg" alt="">
				</div>
				<div class="col-md-1"> </div>
			</div>
				
			<div class="col-md-auto">
				
			</div>

			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_img">
					<h3>以下是加拿大用於雞蛋分類的重量標準：</h3>
					<ul class='eggs101_details' >
						<li>特小(Peewee) – 少於42克</li>

						<li>小(Small) – 至少42克</li>

						<li>中(Medium) – 至少49克</li>

						<li>大(Large) – 至少56克</li>

						<li>加大(Extra Large) – 至少63克</li>

						<li style='padding-bottom:0px'>特大(Jumbo) – 70克或以上</li>
					</ul>
				</div>
				<div class="col-md-1"> </div>
			</div>

			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				<div class="col-md-10 col-md-offset-1 eggs101_img">
					<h3>雞蛋的計量方式：</h3>
					<ul class='eggs101_details'>
						<li>1隻大蛋=3茶匙(45毫升)</li>
			
						<li>5隻大全蛋=1杯(250毫升)</li>
			
						<li>1隻大蛋白=2茶匙(30毫升)</li>
			
						<li>8至10隻大蛋白=1杯(250毫升)</li>
			
						<li>1隻大蛋黃=1茶匙(15毫升)</li>
			
						<li style='padding-bottom:0px'>12至16隻大蛋黃=1杯(250毫升)</li>
					</ul>
				</div>
				<div class="col-md-1"> </div>
			</div>
				
			<div class="col-md-auto">
				
			</div>


			<div class="col-xs-12 col-md-8 col-md-offset-2 ">
				
				<div class="col-md-10 col-md-offset-1 eggs101_body_subtitle_2">如何存放雞蛋</div>
				<div class="col-md-1"></div>
				<div class="col-md-10 col-md-offset-1" style='padding-left:0'>
					<h3>經常存放於蛋盒內</h3>
				</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body" >蛋盒能保護雞蛋，還能防止它們經蛋殼上數千個小氣孔吸收雪櫃中其他食物的強烈氣味。而且，蛋盒上印有的「最佳食用日期」可提醒您留心新鮮度。除此之外，雞蛋較大的一端應保持朝上放置，如同最初包裝在盒內一樣。這樣能令蛋黃一直處於中心位置。</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body_subtitle_2">食品科學</div>
				<div class="col-md-1"></div>
				<div class="col-md-10 col-md-offset-1" style='padding-left:0'>
					<h3>雞蛋是廚房中不可或缺的食材</h3>
				</div>
				<div class="col-md-1"></div>
				
				<div class="col-md-10 col-md-offset-1 eggs101_body">雞蛋可能是您雪櫃中最重要的一員！它營養豐富、美味，其物理屬性和成分令它成為廚房中不可或缺的食材。雞蛋更是許多烹飪技巧和食譜的基礎。</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body">蛋白質和水是蛋黃和蛋白的主要成分。蛋白質是由長鏈的氨基酸透過弱鍵緊密纏繞而成。當蛋白質經加熱或打入空氣後，其弱鍵將斷裂，部分鏈條隨即解開，蛋白質的性質就此改變，或改變了其自然狀態。</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body">展開的蛋白質露出疏水及親水兩種屬性的端口，繼而重新排列，組成新的鍵結，以使疏水端抓住空氣，親水端抓住水，於是形成附著氣泡的蛋白質分子網狀結構。若過度加熱蛋白質或打入過多空氣，鍵結將收緊並擠出水分，令雞蛋變乾、變硬及有彈性。</div>
				<div class="col-md-1"></div>


				{{-- <div class="col-md-10 col-md-offset-1 eggs101_body">
					<div class="table-1 col-xs-5">
						<div class="eggs101_body">Nutritional Information per 53g serving:</div>
						<table class="mytable ">
							
							<tr>
								<td class='left_td'>卡路里</td>
								<td>70 Cal / 292.88.kJ</td>

							</tr>

							<tr>
								<td class='left_td'>脂肪</td>
								<td>5 g</td>
							</tr>
							<tr>
								<td class='left_td'>鈉</td>
								<td>195 mg</td>
							</tr>
							<tr>
								<td class='left_td'>Sodium</td>
								<td>65 mg</td>
							</tr>
							<tr>
								<td class='left_td'>Carbohydrate</td>
								<td>1 g</td>
							</tr>
							<tr>
								<td class='left_td'>Protein</td>
								<td>6 g </td>
							</tr>
						</table>
					</div>
					
					<div class="table-1 col-xs-12">
						<br>
						<div class="eggs101_body">The vitamins and minerals of an egg and how they benefit you:</div>
						<table class="mytable second_table">
							<tr class='table-header'>
								<td>NUTRIENT</td>
								<td colspan=5>BENEFIT</td>
							</tr>
							<tr>
								<td class='left_td'>Iron</td>
								<td colspan=5>Carries oxygen to the cells, helps prevent anemia – the iron in eggs is easily absorbed by the body</td>

							</tr>

							<tr>
								<td class='left_td'>Vitamin A</td>
								<td colspan=5>Helps maintain healthy skin and eye tissue; assists in night vision</td>
							</tr>
							<tr>
								<td class='left_td'>Vitamin D</td>
								<td colspan=5>Strengthens bones and teeth; may help protect against certain cancers and auto-immune diseases</td>
							</tr>
							<tr>
								<td class='left_td'>Vitamin E</td>
								<td colspan=5>An antioxidant that plays a role in maintaining good health and preventing disease</td>
							</tr>
							<tr>
								<td class='left_td'>Vitamin B12</td>
								<td colspan=5>Helps protect against heart disease</td>
							</tr>
							<tr>
								<td class='left_td'>Folate</td>
								<td colspan=5>Helps produce and maintain new cells; helps prevent a type of anemia, helps protect against serious birth defects if taken prior to pregnancy and during the first 3 months of pregnancy</td>
							</tr>

							<tr>
								<td class='left_td'>Protein</td>
								<td colspan=5>Essential for building and repairing muscles, organs, skin, hair and other body tissues; needed to produce hormones, enzymes and antibodies; the protein in eggs is easily absorbed by the body</td>
							</tr>

							<tr>
								<td class='left_td'>Selenium</td>
								<td colspan=5>Works with vitamin E to act as an antioxidant to help prevent the breakdown of body tissues</td>
							</tr>

							<tr>
								<td class='left_td'>Lutein and zeaxanthin</td>
								<td colspan=5>Maintains good vision; may help reduce the risk of age-related eye diseases, such as cataracts and macular degeneration</td>
							</tr>

							<tr>
								<td class='left_td'>Choline</td>
								<td colspan=5>Plays a strong role in brain development and function</td>
							</tr>
						</table>
					</div>




				</div>
				<div class="col-md-1"></div> --}}

				

				{{-- <div class=" col-xs-12 col-md-10 col-md-offset-1 eggs101_body_subtitle_2">
					<br>
						What’s the difference between brown and white eggs?
				</div>
				<div class="col-md-1"></div>

				<div class=" col-xs-12 col-md-10 col-md-offset-1 eggs101_body">Aside from the colour of the eggshell, there is little difference between brown and white eggs. The eggshell colour depends on the breed of the hen. Generally speaking, white shell eggs come from hens with white feathers, while brown shell eggs are produced by hens with brown feathers. Nutritionally, both brown and white eggs are identical unless the feed has been enhanced.
				</div>
				<div class="col-md-1"></div>

				<div class=" col-xs-12 col-md-10 col-md-offset-1 eggs101_body_subtitle_2">
					<br>
						Small Medium Large: What size eggs should I use?
				</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_img ">
					<img src="./images/eggs101/egg-sizes2.jpg"  alt="">
					
				</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body">
					You may have noticed that the eggs in your grocery store come in a variety of sizes ranging from peewee to jumbo. In Canada, all Grade A eggs are categorized by weight, not size or shape, so sometimes eggs in the same carton may appear to be different sizes, but their weight will always be within a similar range.

				</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body">
					The following minimum weights are used to classify eggs in Canada:

				</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_body">
					<b>What the sizes mean:</b>

						<span>
							Peewee - less than 42 grams
						</span>

						<span>
							Small - at least 42 grams
						</span>

						<span>
							Medium - at least 49 grams
						</span>

						<span>
							Large - at least 56 grams
						</span>

						<span>
							Extra Large - at least 63 grams
						</span>

						<span>
							Jumbo - 70 grams or more
						</span>
						<span>
							Unless otherwise specified, more recipes are written using large eggs. Generally, medium and extra large eggs can be used instead of large eggs for recipes, unless you’re working with whipped egg whites. Everyday dishes can substitute 1:1, but for baking purposes, use the following conversions:
						</span>

						<b>Egg Size Substitutions:</b>
						<span>
							Most recipes are written using large eggs. To substitute another size, follow this chart:
						</span>

						<div class="table-1 col-xs-12" style='padding-bottom:20px;'>
						
						<table class="mytable second_table">
							<tr class='table-header'>
								<td></td>
								<td>Small</td>
								<td>Medium</td>
								<td>Extra Large</td>
							</tr>
							<tr>
								<td class='left_td'>1 egg</td>
								<td>2</td>
								<td>1</td>
								<td>1</td>
						
							</tr>

							<tr>
								<td class='left_td'>2 eggs</td>
								<td>3</td>
								<td>2</td>
								<td>2</td>
							</tr>
							<tr>
								<td class='left_td'>3 eggs</td>
								<td>4</td>
								<td>4</td>
								<td>3</td>
							</tr>
							<tr>
								<td class='left_td'>4 eggs</td>
								<td>6</td>
								<td>5</td>
								<td>3</td>
							</tr>
							<tr>
								<td class='left_td'>5 eggs</td>
								<td>7</td>
								<td>6</td>
								<td>4</td>
							</tr>
							<tr>
								<td class='left_td'>6 eggs</td>
								<td>8</td>
								<td>7</td>
								<td>5</td>
							</tr>

							
						</table>
					</div>
					<b>How Do Eggs Measure Up?</b>

					<span>
						1 large egg = 3 tablespoons (45 mL)
					</span>

					<span>
						5 large whole eggs = 1 cup (250 mL)
					</span>

					<span>
						1 large egg white = 2 tablespoons (30 mL)
					</span>

					<span>
						8 to 10 large egg whites = 1 cup (250 mL)
					</span>

					<span>
						1 large egg yolk = 1 tablespoon (15 mL)
					</span>

					<span>
						12 to 16 large egg yolks = 1 cup (250 mL)
					</span>

				</div>
				<div class="col-md-1"></div>

				<div class="col-md-10 col-md-offset-1 eggs101_ul">
						

				</div>
				<div class="col-md-1"></div> --}}
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
</script>
@endsection