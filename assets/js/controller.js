/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var app  = angular.module('application', ['ngRoute'])
app.controller('HomeCtrl', ['$scope', 'RegisterServices',  function ($scope, RegisterServices) {
	$scope.title = 'Card Game'; 
  var data = {
    userName : 'pudthai'
  };
  var callServiceProfile =  RegisterServices.getPofile(data);
  console.log(callServiceProfile);
  callServiceProfile.success(function(data) {
    if(data.status === 'success'){
      console.log(data.data);
    } else {
      console.log("Error : ");
      console.log(data);
    }
  }).error(function() {
     console.log('API Timeout');
  });
}]);