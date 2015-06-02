/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
app.controller('LoadCtrl', ['$rootScope', '$scope', 'RegisterServices', function ($rootScope, $scope, RegisterServices) {
    $rootScope.showLoad = false;
    $rootScope.$on('showLoading', function(event, args) {
      $rootScope.showLoad = args.show;
    });
    $rootScope.$broadcast('showLoading', {'show':true});
  }]);
