/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
app.controller('CheckPackageCtrl', ['$scope', 'HomeServices', '$timeout', function ($scope, HomeServices, $timeout) {
    var services = [
      'getYear',
      'getBrand'
    ];
    var params = {};
    $scope.data = {};
    $scope.formSearch = {};
    
    var assignData = function (serviceName,getData) {
      if (serviceName === 'getYear') {
        $scope.data.Years = getData;
      } else if (serviceName === 'getBrand') {
        $scope.data.Brands = getData;
      }
    };

    $scope.selectWatch = function (selectWhere) {
      if (selectWhere === 'year') {
        
      } else if (selectWhere === 'brand') {
       
      } else if (selectWhere === 'series') {
        
      }
    };

    
    var assignData = function (serviceName,getData) {
      if (serviceName === 'getYear') {
        $scope.data.Years = getData;
      } else if (serviceName === 'getBrand') {
        $scope.data.Brands = getData;
      }
    };
    
    var callService = function (serviceName) {
      if (serviceName === 'getSeries') {
        params = {
          inputYear: $scope.formSearch.year,
          inputBrand: $scope.formSearch.brand
        };
      }
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.status === 'success') {
          var getData = angular.extend(data.data);
          assignData(serviceName,getData);
        }
      }).error(function () {
        console.log('API Timeout');
      });
    };
    //loop call service
    for (name in services) {
      callService(services[name]);
    }
    
  }]);
