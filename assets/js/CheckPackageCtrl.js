/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global Global, angular, app */


app.controller('CheckPackageCtrl', ['$scope', 'HomeServices', '$timeout', function ($scope, HomeServices, $timeout) {
    
    var services = [
      'getProvince',
      'getYear',
      'getBrand'
    ];

    $scope.showTextRegister = true;
    $scope.showTerm = false;
    $scope.hasUserAlraedy;
    $scope.hasUserYet;
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
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


    // $scope.needToRister = true;
    // $scope.showTerm = true;
    // $scope.needToRister = false;
    // $scope.showTextRegister = false;
    
    var assignData = function (serviceName, getData) {
      if (serviceName === 'getProvince') {
        $scope.data.Provinces = getData;
      } else if (serviceName === 'getYear') {
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
    
    $scope.loginFormPage = function () {
        // $scope.showStep = 3;
        window.location.href = 'member/1111'
    };
    
    $scope.submitLoginForm = function () {
        $scope.showStep = 3;
    };
    
    $scope.submitRegisterForm = function() {
      $scope.showTerm = true;
      $scope.needToRister = false;
      $scope.showTextRegister = false;
      $scope.scrollTo('searchForm');
    };

    $scope.confirmTerm = function() {
      if (!$scope.hasUserYet) {
        $scope.showTerm = false;
        $scope.needToRister = true;
        $scope.showTextRegister = true;
        callService("saveMember");
      }
    };

    $scope.checkUser = function () {
      if ($scope.formRegister.username) {
        callService('checkUser');
      }
    };

    $scope.checkInvite = function () {
      if ($scope.formRegister.invite) {
        callService('checkInvite');
      }
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
      } else if (selectWhere === 'province') {
        delete $scope.formRegister.amphur;
        delete $scope.formRegister.district;
        delete $scope.formRegister.zipcode;
        delete $scope.data.Amphurs;
        delete $scope.data.Districts;
        delete $scope.data.Zipcodes;
        getAmphur();
      } else if (selectWhere === 'amphur') {
        delete $scope.formRegister.district;
        delete $scope.formRegister.zipcodel;
        delete $scope.data.Districts;
        delete $scope.data.Zipcodes;
        getDistrict();
      } else if (selectWhere === 'district') {
        delete $scope.formRegister.zipcode;
        delete $scope.data.Zipcodes;
        getZipcode();

      }
    };

    
    var assignData = function (serviceName, getData) {
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
      } else if (serviceName === 'getProvince') {
        $scope.data.Provinces = getData;
      } else if (serviceName === 'getAmphur') {
        $scope.data.Amphurs = getData;
      } else if (serviceName === 'getDistrict') {
        $scope.data.Districts = getData;
      } else if (serviceName === 'getZipcode') {
        $scope.data.Zipcodes = getData;
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
          inputOldInsurance: $scope.formRegister.oldInsurance,
          inputOldInsuranceRegister: $scope.formRegister.oldInsuranceRegister,
          inputBrand: $scope.formRegister.brand,
          inputInvite: $scope.formRegister.invite,
          inputProvince: $scope.formRegister.province,
          inputAmphur: $scope.formRegister.amphur,
          inputDistrict: $scope.formRegister.district,
          inputZipcode: $scope.formRegister.zipcode,
          inputLevel: 1
        };
      } else if (serviceName === 'getAmphur') {
        params = {
          inputProvinceId: $scope.formRegister.province
        };
      } else if (serviceName === 'getDistrict') {
        params = {
          inputProvinceId: $scope.formRegister.province,
          inputAmphurId: $scope.formRegister.amphur
        };
      } else if (serviceName === 'getZipcode') {
        params = {
          inputAmphurId: $scope.formRegister.amphur
        };
      } else if (serviceName === 'checkUser') {
        params = {
          inputUserName: $scope.formRegister.username
        };
      } else if (serviceName === 'checkInvite') {
        params = {
          inputInvite: $scope.formRegister.invite
        };
      }
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.status === 'success') {
          if (serviceName === 'checkUser') {
            $scope.hasUserAlraedy = true;
            $scope.hasUserYet = false;
          }
          if (serviceName === 'checkInvite') {
            $scope.hasInviteAlraedy = true;
            $scope.hasInviteYet = false;
          }
          if (serviceName === 'saveMember') {
            $scope.scrollTo('searchForm');
            $scope.needToRister = false;
            $scope.saveMember = {
              status : "success"
            };
            return;
          }
          var getData = '';
          if (data.data){
            getData = angular.extend(data.data);
          }
          assignData(serviceName,getData);
          if (serviceName === 'getLevelPackage') {
            $scope.showStep = 1;
          }
        } else {
          if (serviceName === 'checkUser') {
            $scope.hasUserAlraedy = false;
            $scope.hasUserYet = true;
          }
          if (serviceName === 'checkInvite') {
            $scope.hasInviteAlraedy = false;
            $scope.hasInviteYet = true;
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

    var getAmphur = function() {
      callService('getAmphur');
    };

    var getDistrict = function() {
      callService('getDistrict');
    };

    var getZipcode = function() {
      callService('getZipcode');
    };
    $scope.scrollTo = function(div) {
      // searchForm
      var divTop = $("#"+div).offset().top;
      $('html,body').animate({scrollTop: (divTop/*-100*/)}, 1000);
    };


   
  }]);
