@extends('layouts.app')

@section('content')
	<script>
		$(window).ready(function(){
			$(".nav_parent").css('background-color','white');
			$("#nav").css('background-color','white');
			$("body").css('min-height','1px');
		});
	</script>
	
	
	    <div class='error404 container-fuild'>
	      		
	      		
	    	<img src="/images/404-egg.png" alt=""  style='width:600px;'>
	      		
	      		
	    </div>

	    <div class="container error_body">
	    	<h1>Sorry</h1>
	    	<div class="error_subtilte">It seems you were trying to access a page that doesn't exist.</div>
	    	<div class="error_body_words">Please check the spelling of the URL you were trying to access
and try again or go back to <a href="https://eggs.ca">eggs.ca.</a></div>
	    </div>

			
	    <div class="container error_try">
	    	<div class="try_title">Try these sections:</div>
	    	<div class="errors_img">
	    		<div class="error_img">
	    			<img src="/images/icon-recipe.svg" alt="" style='width:104px;'>
	    			<div class="try_title"><a href="/Recipes">Recipes</a></div>
	    		</div>
	    		<div class="error_img">
	    			<img src="/images/icon-101.svg" alt="" style='width:104px;'>
	    			<div class="try_title"><a href="/Eggs101">Eggs 101</a></div>
	    		</div>
	    	</div>
	    </div>	
	    


@stop
