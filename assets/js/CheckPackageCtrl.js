/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global app*/

app.controller('CheckPackageCtrl', ['$scope', 'HomeServices', '$timeout', function ($scope, HomeServices, $timeout) {
    
    var services = [
      'getYear',
      'getBrand'
    ];
    
    var params = {};
    $scope.data = {};
    $scope.formSubmit = {};
    $scope.saveMember = {
      status : "error"
    };
    $scope.formRegister = {
      idCard : '',
      fullname : '',
      address : '',
      tel : '',
      email : '',
      username : '',
      password : ''
    };
    $scope.formLogin = {};
    $scope.formLogin.username = '';
    $scope.formLogin.password = '';
    $scope.formLevel = {};
    $scope.formLevel.id = '';
    $scope.formSearch = {
      year: '',
      brand: '',
      series: '',
      main: ''
    };
    $scope.showFromLogin = 1;
    $scope.showFromRegister = 2;
    $scope.showFromLoginAndRegister = 0;
    $scope.showStep = 0;
    
    var assignData = function (serviceName,getData) {
      if (serviceName === 'getYear') {
        $scope.data.Years = getData;
      } else if (serviceName === 'getBrand') {
        $scope.data.Brands = getData;
      }
    };

    $scope.getLevelPackage = function () {
      var getIndexLevel = ($scope.formLevel.id - 1);
      $scope.formSubmit.lvType = $scope.data.Levels[getIndexLevel].lvType;
      $scope.formSubmit.lvPrice = $scope.data.Levels[getIndexLevel].lvPrice;
      $scope.formSubmit.lvLimit = $scope.data.Levels[getIndexLevel].lvLimit;
    };
    
    $scope.submitSearchForm = function () {
        callService('getLevelPackage');
        HomeServices.showLoad(true);
    };
    
    $scope.submitLoginForm = function () {
            $scope.showStep = 3;
    };
    
    $scope.submitRegisterForm = function () {
            $scope.showStep = 3;
    };
    
    $scope.selectWatch = function (selectWhere) {
      if (selectWhere === 'year') {
        $scope.formSearch.brand = '';
        $scope.formSearch.series = '';
        $scope.formSearch.main = '';
      } else if (selectWhere === 'brand') {
        $scope.formSearch.series = '';
        $scope.formSearch.main = '';
        callService('getSeries');
        HomeServices.showLoad(true);
      } else if (selectWhere === 'series') {
        $scope.formSearch.main = '';
        callService('getMainPackage');
        HomeServices.showLoad(true);
      }
    };

    
    var assignData = function (serviceName,getData) {
      if (serviceName === 'getYear') {
        $scope.data.Years = getData;
      } else if (serviceName === 'getBrand') {
        $scope.data.Brands = getData;
      } else if (serviceName === 'getSeries') {
        $scope.data.Series = getData;
      } else if (serviceName === 'getMainPackage') {
        $scope.data.Mains = getData;
      } else if (serviceName === 'getLevelPackage') {
        $scope.data.Levels = getData;
      }
    };
    
    var callService = function (serviceName) {
      if (serviceName === 'getSeries') {
        params = {
          inputYear: $scope.formSearch.year,
          inputIdBrand: $scope.formSearch.brand
        };
      } else if (serviceName === 'getMainPackage') {
        params = {
          inputYear: $scope.formSearch.year,
          inputIdBrand: $scope.formSearch.brand,
          inputIdSeries: $scope.formSearch.series
        };
      } else if (serviceName === 'getLevelPackage') {
        params = {
          inputIdMain: $scope.formSearch.main
        };
      } else if (serviceName === 'saveMember') {
        params = {
          inputFullName: $scope.formRegister.fullname,
          inputAddress: $scope.formRegister.address,
          inputPhone: $scope.formRegister.tel,
          inputEmail: $scope.formRegister.email,
          inputUserName: $scope.formRegister.username,
          inputPassword: $scope.formRegister.password,
          inputIdCard: $scope.formRegister.idCard,
          inputLevel: 1
        };
      }
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.status === 'success') {
          if (serviceName === 'saveMember') {
            $scope.saveMember = {
              status : "success"
            };
            return;
          }
          var getData = angular.extend(data.data);
          assignData(serviceName,getData);
          if (serviceName === 'getLevelPackage') {
            $scope.showStep = 1;
          }
        }
        HomeServices.showLoad(false);
      }).error(function () {
        HomeServices.showLoad(false);
        console.log('API Timeout');
      });
    };
//    loop call service
    for (name in services) {
      callService(services[name]);
    }
    
    $scope.submitRegisterForm = function() {
//      console.log($scope.formRegister);
        callService("saveMember");
    };
   
    
    
  }]);
