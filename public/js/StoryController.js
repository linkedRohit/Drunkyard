var app = angular.module('storyApp', ['summernote']);
app.controller('storyCtrl', function($scope) {
    $scope.text= "Share your crazy story with the rest of the world.";
});

var app = angular.module('userStoriesList', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('{:');
    $interpolateProvider.endSymbol(':}');
});

app.controller('userStoriesCtrl', function($scope, $http) {
    $http.get("/myYard").then(function(response) {
    	try {
    		$("#myStories").hide();
    		$("#commonMessage").hide();
	    	parsedResponse = JSON.parse(response.data);
	    	if(parsedResponse['MESSAGE']) {
	    		$("#commonMessage").show();
	    		$("#errorBox").text(parsedResponse['MESSAGE']).fadeIn(400).delay(3000).fadeOut(400);
	    	} else {
	    		$("#myStories").show();
	        	$scope.activity = parsedResponse['ACTIVITY'];
	    	}
	    } catch(err) {
	    	$("#errorBox").text('Unexpected error! Try again : ' + err.message).fadeIn(400).delay(3000).fadeOut(400);
	    }
    });
}).filter('rawHtml', ['$sce', function($sce){
  return function(val) {
    return $sce.trustAsHtml(val);
  };
}]).filter('elapsed', function($filter){
    return function(date){
        if (!date) return;
        var time = Date.parse(date),
            difference = (new Date()) - time;

        // Seconds (e.g. 32s)
        difference /= 1000;
        if (difference < 60) return Math.floor(difference)+'s';

        // Minutes (e.g. 12m)
        difference /= 60;
        if (difference < 60) return Math.floor(difference)+'m';

        // Hours (e.g. 5h)
        difference /= 60;
        if (difference < 24) return Math.floor(difference)+'h';

        // Date (e.g. Dec 2)
        return $filter('date')(time, 'MMM d');
    };
});
