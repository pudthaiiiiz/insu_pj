/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
app.controller('MenuCtrl', ['$scope', 'RegisterServices',  function ($scope, RegisterServices) {
  $scope.menu = {};
  $scope.menu.title = "MENU TITILE";
  $scope.menu.lists = [
    {
    name : 'หน้าแรก',
    link : '#home'
    },
    {
    name : 'สมัครง่าย',
    link : '#member'
    },
    {
    name : 'บทความ',
    link : '#content'
    },
    {
    name : 'ทำไมต้องเรา',
    link : '#whyme'
    },
    {
    name : 'แพ็คแกจ',
    link : '#package'
    },
    {
    name : 'ติดต่อเรา',
    link : '#contact'
    }
  ];
  var params = {
    userName : null
  };
  var callServiceProfile =  RegisterServices.getPofile(params);
  callServiceProfile.success(function(data) {
    if(data.status === 'success'){
      data = data.data;
      $scope.userName = data.cusFullname;
    }
  }).error(function() {
     console.log('API Timeout');
  });
}]);