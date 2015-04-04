"use strict";
var app = angular.module("app", ["ngRoute", "app.controllers"])
.config(['$interpolateProvider', function ($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}]);

angular.module("app.controllers", [])
.controller('appCtrl', ['$scope', '$http',
function($scope, $http) {
}])
;
