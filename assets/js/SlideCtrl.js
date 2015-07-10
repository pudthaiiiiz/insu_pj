/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global Global, app, angular */

app.controller('SlideCtrl', ['$scope', 'HomeServices', function ($scope, HomeServices) {
    $scope.assets = window.location.origin+'/assets/';
    $scope.uploads = window.location.origin+'/uploads/';
    $scope.baseUrl = window.location.origin+'/';
    var services = [
      'getSlide'
    ];
    var params = {};
    var setSlide = function() {
        new RoyalSlider("#myGallery1", {
          captionShowEffects: ["moveleft", "fade"],
          captionShowDelay: 200,
          captionShowSpeed: 400,
          captionShowEasing: "easeOutBack",
          directionNavEnabled: true,
          controlNavEnabled: true,
          slideshowEnabled: true,
          slideshowPauseOnHover: true,
          autoScaleSlider: false,
          loop: true,
          slideshowDelay: 7000
        });
    };
    $scope.slides = [];
//        HomeServices.showLoad(true);
    var callService = function (serviceName) {
//          console.log(serviceName);
      var callServiceName = HomeServices[serviceName](params);
//          console.log(serviceName);
      callServiceName.success(function (data) {
//          console.log(data);
        if (data.status === 'success') {
          var getData = angular.extend(data.data);
          $scope.slides = getData;
          console.log(data);
          setTimeout(function(){
            setSlide(); 
          }, 1000);
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

