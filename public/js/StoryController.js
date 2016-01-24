var app = angular.module('storyApp', ['summernote']);
app.controller('storyCtrl', function($scope) {
    $scope.text= "Share your crazy story with the rest of the world.";
});
