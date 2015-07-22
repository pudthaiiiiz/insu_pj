/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global Global, angular, app */

app.controller('ContentCtrl', ['$scope', 'HomeServices', function ($scope, HomeServices) {
    var services = [
      'getContent'
    ];
    var params = {};
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
    $scope.contents = [];
//        HomeServices.showLoad(true);
    var callService = function (serviceName) {
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.data) {
          var getData = angular.extend(data.data);
          $scope.contents = getData;
        }
//        HomeServices.showLoad(false);
      }).error(function () {
//        HomeServices.showLoad(false);
        Global.handle.loseInternet();
      });
    };
//    loop call service
    for (name in services) {
      callService(services[name]);
    }
    //    




  }]);

app.controller('ContentListCtrl', ['$scope', 'HomeServices', function ($scope, HomeServices) {
    var services = [
      'getContentList'
    ];
    var params = {};
    $scope.usernameCorrect;
    $scope.usernameError;
    $scope.passwordCorrect;
    $scope.passwordError;
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
    $scope.contents = [];
    $scope.formLogin = {};
    $scope.formLogin.username = '';
    $scope.formLogin.password = '';

//        HomeServices.showLoad(true);
    var callService = function (serviceName) { 
      if (serviceName === 'login') {
        params = {
          userName: $scope.formLogin.username,
          password: $scope.formLogin.password,
        };
      }
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {

        if (data.status === 'success') {
          if(serviceName === 'login') {
            $scope.usernameCorrect = true;
            $scope.usernameError = false;
            $scope.passwordCorrect = true;
            $scope.passwordError = false;
            setTimeout(function(){
              window.location.href = Global.baseurl+'member';
            },1000);
            return;
          }
          if (data.data) {
            var getData = angular.extend(data.data);
            $scope.contents = getData;
          }
        } else {
            $scope.usernameCorrect = false;
            $scope.usernameError = true;
            $scope.passwordCorrect = false;
            $scope.passwordError = true;
        }
//        HomeServices.showLoad(false);
      }).error(function () {
//        HomeServices.showLoad(false);
        Global.handle.loseInternet();
      });
    };
//    loop call service
    for (name in services) {
      callService(services[name]);
    }
    //    

    $scope.loginFormPage = function() {
      callService('login');
    }



  }]);
