/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

app.directive('tempSlide', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-slide.html'
  };
});

app.directive('tempCheckPackage', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-check-package.html'
  };
});

app.directive('tempStep', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-step.html'
  };
});

app.directive('tempContent', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-content.html'
  };
});

app.directive('tempWhyMe', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-why-me.html'
  };
});

app.directive('tempFollowUs', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-follow-us.html'
  };
});

app.directive('tempContactUs', function () {
  return {
    restrict: 'A',
    templateUrl: 'assets/templates/temp-contact-us.html'
  };
});