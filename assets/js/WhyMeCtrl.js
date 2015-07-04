/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global Global, angular, app */
app.controller('WhyMeCtrl', ['$scope', function ($scope) {
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
  }]);
