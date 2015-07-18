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
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
    var services = [
      'getSlide',
      'getPopup'
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
      var callServiceName = HomeServices[serviceName](params);
      callServiceName.success(function (data) {
        if (data.status === 'success' && data.data) {
        var getData = angular.extend(data.data);
          if (serviceName === 'getSlide') {
            $scope.slides = getData;
            console.log(data);
            setTimeout(function(){
              setSlide(); 
            }, 1000);
          } else if  (serviceName === 'getPopup') {
            if (getData) {
              //popup
              $scope.popupUrl = Global.uploads+'popup/'+getData;
              popupShow();
            }
          }
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

    var popupShow = function(){
      setTimeout(function(){
        $(".popup").colorbox({open:true, rel:'popup', transition:"none", width:"75%", height:"75%"});
      },1000);
    }
    
  }]);

