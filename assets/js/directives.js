/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* global app, Global */

app.directive('tempSlide', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-slide.html',
    link: function () {
      
    }
  };
});

app.directive('tempCheckPackage', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-check-package.html'
  };
});

app.directive('tempStep', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-step.html'
  };
});

app.directive('tempContent', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-content.html',
    scope: {
      contents: '@contents'
    },
    link: function (scope) {
//      console.log(scope.contents);
    }
  };
});

app.directive('tempWhyMe', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-why-me.html',
    scope: {
      assets: '@url'
    }
//     link: function(scope) {
//        do
//    }
  };
});

app.directive('tempFollowUs', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-follow-us.html'
  };
});

app.directive('tempContactUs', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-contact-us.html'
  };
});

app.directive('tempFooter', function () {
  return {
    restrict: 'A',
    templateUrl: Global.baseurl + 'assets/templates/temp-footer.html'
  };
});

//app.directive('tempLoad', function () {
//  return {
//    restrict: 'A',
//    templateUrl: Global.baseurl + 'assets/templates/temp-load.html'
//  };
//});

app.directive('selectSearch', ['HomeServices', function (HomeServices) {
    return {
      restrict: 'A',
      require: 'ngModel',
      link: function (scope, element, attrs, ngModel) {
//           scope.$watch(function (oldValue, newValue) {
//             if (attrs.ngModel === 'formSearch.brand') {
//              if(newValue !== undefined){
//                console.log(attrs.ngModel);
//              }
////               HomeServices.showLoad(true);
//             }
//           });
      }
    };
  }]);