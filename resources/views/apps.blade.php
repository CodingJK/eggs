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
	      		
	      		<div class='title'>Apps</div>
	      		
	      	</div>	
	    </div>

	    <div class='timer_parent'>

	    	<div class='timer'>

	    		<div class='timer_title'>
	    			煮蛋計時器APP
	    		</div>

	    		<div class='img'>
	    			<img src='/images/apps/image-apps-eggtimer.png' />
	    		</div>

	    		<div class='timer_title'>
	    			Perfect eggs. Every time. Get the app.
	    		</div>

	    		<div class="descip">
	    			Transform your phone into a multi-functional egg timer with 
	    			Egg Farmers of Canada&apos;s official app. Easy to use and fully customizable, 
	    			it&apos;s more than just an egg timer, it&apos;s packed with recipes and useful 
	    			features as well! Making perfect eggs is easy with the official cooking 
	    			instructions from Egg Farmers of Canada.
	    		</div>

	    		<div class='sub_title'>
	    			Download it for free at the App Store or Google Play
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
	    	<hr />


	    </div>

	    <div class='features_parent'>
	    	
	    	<div class='features '>

	    		<div class='title'>Features</div>
	    		
	    		<ul >

	    			<li class='details'>Choose instructions for either boiled, poached, scrambled, or fried eggs</li>

	    			<li class='details'>Customize your cooking time based on egg size and desired hardness</li>

	    			<li class='details'>Explore hundreds of egg recipes from Egg Farmers of Canada</li>

	    			<li class='details'>Search recipes by meal type or preparation style</li>

	    			<li class='details'>Discover plenty of handy tips and advice to help you master the art of preparing perfect eggs</li>

	    		</ul>

	    		<div class='title'>What&apos;s New in Version 2.0</div>
	    		
	    		<ul >

	    			<li class='details'>Totally redesigned for iOS7 with retina graphics and a new look and feel to match the newly-redesigned eggs.ca</li>

	    			<li class='details'>Addition of instructional "How-to" videos and "Eggs 101" content to help you cook the perfect egg</li>

	    			<li class='details'>Added "Meet your farmers" section to highlight some of the people who bring Canadian eggs to your table</li>

	    			<li class='details'>Added ability to create an account or log in to your existing account on eggs.ca</li>

	    			<li class='details'>Added synchronization of favourite recipes between eggs.ca and the app</li>

	    		</ul>

	    		<div class='sm_title'>Apple, iPad and iPhone are trademarks of Apple Inc., registered in the U.S. and other countries. App Store is a service mark of Apple Inc.</div>

	    	</div>

	    </div><hr />


	    <div class='timer_parent'>

	    	<div class='timer'>

	    		<div class='timer_title'>
	    			Eggcentric TV App
	    		</div>

	    		<div class='img'>
	    			<img src='/images/apps/image-apps-eggcentrictv.png' />
	    		</div>
	    		<br /><br /><br /><br />

	    		

	    		<div class="descip">
	    			We love eggs so much, we gave them their own network. 
	    			Eggcentric TV is a streaming television network dedicated entirely to eggs, 
	    			the only one of its kind. Our streaming network features engaging video content 
	    			from social influencers and celebrity chefs, and aims to share simple and elicious 
	    			recipes, tricks, and hacks that inspire Canadians to create and enjoy these egg dishes 
	    			at home.
	    		</div>

	    		<div class='sub_title'>
	    			Check out egg recipes and stories from around the world - all in one place.
	    		</div>

	    		

	    		<br /><br />

	    		<div class='youtube col-xs-10 col-xs-offset-1'>
	    			
	    			<div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/AHavdZXZC4o?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="640" height="360" frameborder="0" allowfullscreen></iframe></div>

	    		</div>
	    		<div class="col-xs-1">
	    			

	    		</div>

	    		<div class='sub_title text-center'>
	    			All eggs, all the time. Get the app, it&apos;s FREE!
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