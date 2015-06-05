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
    $scope.formSearch = {
      year: '',
      brand: '',
      series: '',
      main: ''
    };
    
    var assignData = function (serviceName,getData) {
      if (serviceName === 'getYear') {
        $scope.data.Years = getData;
      } else if (serviceName === 'getBrand') {
        $scope.data.Brands = getData;
      }
    };

    $scope.submitSearchForm = function () {
        callService('getLevelPackage');
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
      }
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.status === 'success') {
          var getData = angular.extend(data.data);
          assignData(serviceName,getData);
        }
        HomeServices.showLoad(false);
      }).error(function () {
        HomeServices.showLoad(false);
        console.log('API Timeout');
      });
    };
    //loop call service
    for (name in services) {
      callService(services[name]);
    }
    
  }]);
