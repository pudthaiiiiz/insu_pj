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
        var getData = angular.extend(data.data);
        $scope.contents = getData;
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
 
 var setCompany = function () {
	$('.center').slick({
	  centerMode: true,
	  centerPadding: '40px',
    slidesToShow:6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 4
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]
	});
  
  //
 setTimeout(function(){
   setCompany();
 },1000);
					

 };

  }]);
