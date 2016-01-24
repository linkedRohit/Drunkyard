@extends('layout')
@section('content')
    <div class="mt100"> <!-- ng-app="storyApp" ng-controller="storyCtrl">-->
    	<ul class="nav nav-tabs">
		  <li class="active"><a href="#">Stories</a></li>
		  <li><a href="#">Drafts</a></li>
		</ul>
	</div>
	<script>
		$(document).ready(function(){
			getPosts();
		});
		var flash = $("#errorBox");	
		function getPosts() {
			$.ajax({
			   method: "GET",
			   url: "/myYard"
			})
		    .done(function( result ) {
		    	if(result) {
		    		if(JSON.parse(result)) {
		    			var obj = JSON.parse(result);
		    			if(obj.Message) {
		    				flash.text(obj.Message);
		    			} else {

		    			}
		    		}
		    	}
		       		
		    });
		}
	</script>
@endsection
