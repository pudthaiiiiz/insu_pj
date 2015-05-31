/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app  = angular.module('application', ['ngRoute'])
app.controller('HomeCtrl', ['$scope', 'RegisterServices',  function ($scope, RegisterServices) {
	$scope.userName = null;
  var data = {
    userName : 'pudthai'
  };
  var callServiceProfile =  RegisterServices.getPofile(data);
  callServiceProfile.success(function(data) {
    if(data.status === 'success'){
      data = data.data;
      $scope.userName = data.cusFullname;
    }
  }).error(function() {
     console.log('API Timeout');
  });
}]);