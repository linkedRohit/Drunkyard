@extends('layout')
@section('content')
	<input type="hidden" name="order" id="order" value="0"></input>
	<div ng-app="userStoriesList" ng-controller="userStoriesCtrl" class="container myStories mb150"> 
		<div class="col-md-12 mt100">
			<div class="formHeading mt100" id="commonMessage">
				<center>Your yard is empty, Share your crazy story <a style="color: #00F" href="/create">now</a>.</center>
			</div>
			<div class="yardSummary" id="myStories">
				<h2 class="borderBottom height50">My Yard</h2>
				<div class="row">
					<h3 class="col-md-2 col-xs-3">
				        <a id="sortType">Type</a>
				    </h3>
				    <h3 class="col-md-10 col-xs-9">
				        <a id="sortActivity" class="ml10">Activity</a>
				    </h3>
				</div>
				<div class="row yardActivity" ng-repeat="x in activity">
				    <div class="col-md-2 col-xs-3">
				        {: x.status :}<br/>
				        <span class="postedDate">Shared on {: x.created_at | elapsed:}</span>
				    </div>
				    <div class="col-md-10 col-xs-9">
				        <a class="title" href="/story/{: x.id :}">{: x.title :}</a><br/>
				        <div class="description" ng-bind-html="x.description | rawHtml"></div>
				        <div class="" ng-bind-html="x.tags | rawHtml"></div>
				    </div>
				</div>
			</div>
		</div>
	</div>
@endsection
