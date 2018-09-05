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
			$(".apps_link").css('color','#ffcd32');
		});
	</script>
	
	<div id='apps'>
      	<div class='header col-xs-12'>
	      	<div class='header_artical'>
	      		
	      		<div class='title' style='font-weight:bold;font-family: Noto Sans TC;'>應用程式</div>
	      		
	      	</div>	
	    </div>

	    <div class='timer_parent'>

	    	<div class='timer'>

	    		<div class='timer_title' style='font-family: Noto Sans TC;color:#333; '>
	    			煮蛋計時App
	    		</div>

	    		<div class='img'>
	    			<img src='/images/apps/image-apps-eggtimer.png' />
	    		</div>

	    		<div class='timer_title' style='font-weight:bold;font-family: Noto Sans TC; margin-top:20px;'>
	    			每次下廚，都可打造完美黃金雞蛋。立即下載App。
	    		</div>

	    		<div class="descip" style='font-weight:bold;font-family: Noto Sans TC;margin-top:20px;'>
	    			
下載Egg Farmers of Canada的官方多功能煮蛋計時App，隨時隨地都可用手機完美掌握煮蛋時間。計時App操作簡單，可按需自由調校功能，更隨附各款雞蛋食譜，絕對能幫到手。按照Egg Farmers of Canada官方竅門煮蛋，烹製柔嫩軟綿綿的完美雞蛋易如反掌。

	    		</div>

	    		<div class='sub_title' style='font-weight:bold;font-family: Noto Sans TC;'>
	    			App Store或Google Play免費下載
	    		</div>
	    		<div class='mobile_only'>
		    		<div class='row'>
			    		<div class='col-lg-6 col-xs-6 col-xs-offset-3 left'>
			    			<a href='https://itunes.apple.com/ca/app/egg-timer/id443977280?mt=8' target='_blank'>
			    				<img src='images/apps/btn-appstore.png' />
			    			</a>
			    		</div>

			    		<div class='col-lg-6 col-xs-6 col-xs-offset-3 right'>
			    			<a href='https://play.google.com/store/apps/details?id=ca.eggs.eggtimer' target='_blank'>
			    				<img src='images/apps/btn-googleplay.png' />
			    			</a>
			    		</div>
		    		</div>
		    	</div>
		    	<div class='desk_only'>
		    		<div class='appstore'>
			    		<div class='col-sm-3 col-sm-offset-3'>
			    			<a href='https://itunes.apple.com/ca/app/egg-timer/id443977280?mt=8' target='_blank'>
			    				<img src='images/apps/btn-appstore.png' />
			    			</a>
			    		</div>

			    		<div class='col-sm-3'>
			    			<a href='https://play.google.com/store/apps/details?id=ca.eggs.eggtimer' target='_blank'>
			    				<img src='images/apps/btn-googleplay.png' />
			    			</a>
			    		</div>
			    		<div class="col-sm-3"></div>
		    		</div>
		    	</div>

	    		<br /><br />





	    	</div>
	    	


	    </div>

	    <div class='features_parent'>
	    	
	    	<div class='features '>

	    		<div class='title' style='font-weight:bold;font-family: Noto Sans TC;'>功能特色</div>
	    		
	    		<ul >

	    			<li class='details' style='font-family: Noto Sans TC;'>可選水煮蛋、流心蛋、炒蛋或煎蛋計時設定</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>按雞蛋大小及偏好軟硬度，自訂煮蛋時間</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>瀏覽過百款Egg Farmers of Canada食譜
</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>按菜色類型或烹調方法搜尋食譜</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>發掘各種方便實用的煮蛋貼士和建議，烹製大師級水準的完美雞蛋菜色</li>

	    		</ul>

	    		<div class='title' style='font-weight:bold;font-family: Noto Sans TC;'>版本2.0新功能</div>
	    		
	    		<ul >

	    			<li class='details' style='font-family: Noto Sans TC;'>特別為iOS7 Retina螢幕重新設計，全面提升觀感，配合煥然一新的egg.ca網站
</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>新增「烹飪教學短」片和「煮蛋入門技巧」內容，助你煮出完美雞蛋
</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>新增「認識農夫」內容，為你介紹飼養加拿大優質雞蛋的一些主要成員</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>允許在eggs.ca建立帳戶或登入現有帳戶</li>

	    			<li class='details' style='font-family: Noto Sans TC;'>現可同步eggs.ca和App之間的收藏食譜
</li>

	    		</ul>

	    		<div class='sm_title' style='font-family: Noto Sans TC;'>Apple、iPad和iPhone均為Apple Inc.美國及其他國家/地區註冊商標。App Store為Apple Inc.服務商標。</div>

	    	</div>

	    </div><hr />


	    <div class='timer_parent'>

	    	<div class='timer'>

	    		<div class='timer_title' >
	    			Eggcentric TV App
	    		</div>

	    		<div class='img' style='margin-top:40px;'>
	    			<img src='/images/apps/image-apps-eggcentrictv.png' />
	    		</div>
	    		<br /><br /><br /><br />

	    		

	    		<div class="descip" style='font-family: Noto Sans TC;'>
	    			
濃濃蛋香，讓人愛不釋手。我們因此特別推出了一個雞蛋電視頻道。Eggcentric TV是個完全關於雞蛋的串流媒體電視頻道，只此一家！我們的串流媒體頻道為你帶來無數來自各界名人和名廚的精彩內容，更提供簡易食譜、烹飪技巧和下廚貼士任你欣賞，務求幫助加拿大不同家庭在短時間內輕鬆變出一桌豐富美味的雞蛋菜色。

	    		</div>

	    		<div class='sub_title'style='font-weight:bold;font-family: Noto Sans TC;'>
	    			一次過瀏覽世界各地的雞蛋食譜和故事，激發雞蛋新煮意。
	    		</div>

	    		

	    		<br /><br />

	    		<div class='youtube col-xs-10 col-xs-offset-1'>
	    			
	    			<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/AHavdZXZC4o?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>

	    		</div>
	    		<div class="col-xs-1">
	    			

	    		</div>

	    		<div class='sub_title text-center' style='font-weight:bold;font-family: Noto Sans TC;'>
	    			
隨時打造完美黃金雞蛋。立即免費下載計時App！

	    		</div>

	    	<div class='mobile_only'>	
	    		<div class='row store'>
		    		<div class='col-lg-4 col-xs-6 col-xs-offset-3 col-sm-4 left'>
		    			<a href=''>
		    				<img src='images/apps/btn-appstore.png' />
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-xs-6 col-xs-offset-3 col-sm-4 left'>
		    			<a href=''>
		    				<img src='images/apps/btn-googleplay.png' />
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-xs-6 col-xs-offset-3 col-sm-4 left'>
		    			<a href=''>
		    				<img src='images/apps/btn-roku.png' />
		    			</a>
		    		</div>
	    		</div>
	    	</div>
	    	<div class='desk_only'>	
	    		<div class='row store '>
		    		<div class='col-lg-4 col-sm-4 left'>
		    			<a href='https://itunes.apple.com/ca/app/eggcentric-tv/id1059446288?mt=8'>
		    				<img src='images/apps/btn-appstore.png' / target='_blank'>
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-sm-4 left'>
		    			<a href='https://play.google.com/store/apps/details?id=com.floatleft.eggcentric&hl=en'>
		    				<img src='images/apps/btn-googleplay.png' / target='_blank'>
		    			</a>
		    		</div>

		    		<div class='col-lg-4 col-sm-4 left'>
		    			<a href='https://www.roku.com/en-ca/how-it-works' target='_blank'>
		    				<img src='images/apps/btn-roku.png' />
		    			</a>
		    		</div>
	    		</div>
	    	</div>





	    	</div>
	    	


	    </div>

      </div>


@stop