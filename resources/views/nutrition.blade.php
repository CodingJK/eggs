@extends('layouts.app')

@section('content')
		<script>
			$(window).ready(function(){
				$(".nav_parent").css('background-color','white');
				$("#nav").css('background-color','white');
				$(".nutrition_link").css('color','#ffcd32');
			});
		</script>
      	
      	<div class='container-fuild nutrition_header'>
			<div class='nutrition_header_artical'>
				<div class='nutrition_title'>營養價值</div>
				<div class='nutrition_sub_title'>
					雞蛋不單止美味，而且營養十分豐富，是蛋白質的極佳來源，能提供人體所需的重要營養素。
					現在就來了解為甚麼您應把雞蛋作為日常飲食的一部分，以及了解如何為您自己、
					小孩甚至家中長者保持健康的生活方式。
				 </div>
			</div>	
		</div>

		{{-- nutrition body --}}

		<div class="nutrition_content">
			<div class="col-sm-12 col-xs-12">
				<div class="col-sm-6 col-xs-12">
					
				</div>
				<div class="col-sm-6 col-xs-12">
					
				</div>
			</div>


			

			<div class="eggs_nutrition">
				<br>
				<div class="nutrition_title_sm_1" >營養價值</div>

				<p>雞蛋不單止美味，而且營養十分豐富，是蛋白質的極佳來源，能提供人體所需的重要營養素。
				現在就來了解為甚麼您應把雞蛋作為日常飲食的一部分，以及了解如何為您自己、小孩甚至家中長者保持健康的生活方式。</p>
				<div class='nutrition_title_sm_2'>營養成分</div>

				<p>一隻大號A級雞蛋(53克)含有6克蛋白質及僅70卡路里。加拿大食品指南 <a href="https://www.canada.ca/en/health-canada/services/canada-food-guides.html" id='canada-food-guides'>Canada’s Food Guide</a> 認為兩隻雞蛋相當於一份肉類及其替代品。</p>
				<div class="col-xs-8" style='padding-left:15px'>
					<img src="/images/nutrition/5849-EFC-Nutrition-Comp-Eng.jpg" alt="">
				</div>
				<div class="col-xs-4"></div>

			</div>

			<div class="nutrient_benefit">
				<div class="small_title">每53克食用份量的營養成分： </div>
				<div class='col-xs-6 col-lg-4' style='padding-left: 0;' >
				<table class="table table-bordered " >
					<tbody>
						<tr class='light_yellow_tr'>
							<td><b>熱量</b></td>
							<td>70 卡 / 292.88 千焦</td>
						</tr>
						<tr>
							<td><b>脂肪</b></td>
							<td>5 克</td>
						</tr>
						<tr class='light_yellow_tr'>
							<td><b>膽固醇</b></td>
							<td>195 毫克</td>
						</tr>
						<tr>
							<td><b>鈉</b></td>
							<td>65 毫克</td>
						</tr>
						<tr class='light_yellow_tr'>
							<td><b>碳水化合物</b></td>
							<td>1 克</td>
						</tr>
						<tr>
							<td><b>蛋白質</b></td>
							<td>6 克 </td>
						</tr>
					</tbody>
				</table>
				</div>
				{{-- <div class="nutrition_title_sm_1">NUTRIENT - BENEFIT </div> --}}
				<div class='small_title' style='clear:both'>
					雞蛋所含維他命和礦物質，及相應的益處：
				</div>
				<div class="" style='clear: both'>
					<table class='table table-bordered'>
						<thead>
							<th>營養素</th>
							<th>益處</th>
						</thead>
						<tbody>
							<tr class='light_yellow_tr'>
								<td>鐵</td>
								<td>將氧氣運送到各處細胞，有助防止貧血，而雞蛋內的鐵質易於人體吸收</td>
							</tr>

							<tr>
								<td>維他命 A</td>
								<td>幫助維持皮膚及眼睛組織健康；協助夜間視力</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>維他命 D</td>
								<td>強化骨骼和牙齒；可有助預防某些癌症及自體免疫性疾病</td>
							</tr>

							<tr>
								<td>維他命 E</td>
								<td>一種抗氧化劑，幫助維持身體健康及預防疾病</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>維他命 B12 </td>
								<td>有助預防心臟疾病</td>
							</tr>

							<tr>
								<td>葉酸 </td>
								<td>有助新細胞的形成及成長；幫助預防一種類型的貧血，在懷孕前及懷孕首三個月攝取葉酸，可幫助預防嚴重的先天性缺陷</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>蛋白質 </td>
								<td>對建造和修補肌肉、器官、皮膚、頭髮及其他身體組織至關重要；是製造荷爾蒙、酶及抗體所必須的成分；雞蛋內的蛋白質易於人體吸收</td>
							</tr>

							<tr>
								<td>硒 </td>
								<td>與維他命E一起充當抗氧化劑，幫助防止身體組織受損</td>
							</tr>

							<tr class='light_yellow_tr'>
								<td>葉黃素及玉米黃素 </td>
								<td>維持良好視力；可幫助減少罹患年齡相關眼疾的風險，如白內障和黃斑病變</td>
							</tr>

							<tr>
								<td>膽鹼 </td>
								<td>對大腦發育及運作發揮有力作用</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="nutrition_words clear-both">
					<div class="nutrition_title_sm_2">蛋白質 </div>
					<div class='worlds'>雞蛋含有6克最優質的蛋白質和14種關鍵營養素，能為您提供人體運作所需的能量，是維持健康和積極生活方式的天然之選。</div>
					<div class='worlds'>雞蛋乃少數被認為是「完全蛋白質」的食物之一，因為它含有9種必需的氨基酸。氨基酸是構成蛋白質的成分，因此被視為「人體的基石」。</div>
					<br>
					<div class="nutrition_title_sm_2">奥米加3 (Omega-3)</div>

					<div class='worlds'>
						Omega-3 是一種多元不飽和脂肪(即有益脂肪)，有助保護您的心臟。這些脂肪對人體健康是必需的，但由於人體不能自行製造，因此必須從食物中攝取，例如三文魚、某些種類的食用油和果仁，以及含有Omega-3的雞蛋。
					</div>
					
					<br>
					<div class="nutrition_title_sm_2">膽固醇</div>
					<div class='worlds'><b>您可食用的雞蛋份量可能比您想象中多！</b></div>
					<div class='worlds'>
						如果您不吃雞蛋是因為擔心它會成為膽固醇的來源及導致冠心病，現在是時候重新考慮了。最新的研究顯示，健康的成年人每天可進食1隻雞蛋，而不會增加心臟疾病的風險。
					</div>
					<div class='worlds'>
						根據美國心臟協會(American Heart Association)，蛋黃中的葉黃素也可預防早期心臟疾病的發展。
					</div>
					
					<div class='worlds'>
						欲知更多有助您了解及管理膽固醇的資料，請瀏覽: <a href="eggfarmers.ca" target='_blank'>aneggadayisok.ca</a>.
					</div>
				</div>
			</div>
			


			
		</div>


	    

			


@stop