/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global Global, app, angular */

app.controller('SlideCtrl', ['$scope', 'HomeServices', function ($scope, HomeServices) {
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
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
    $scope.slides = [];
//        HomeServices.showLoad(true);
    var callService = function (serviceName) {
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.status == 'success') {
          var getData = angular.extend(data.data);
          $scope.slides = getData;
          console.log($scope.slides);
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

