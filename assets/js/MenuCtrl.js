/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
app.controller('MenuCtrl', ['$scope',  function ($scope) {
  $scope.menu = {};
  $scope.menu.title = "insurancebroker360";
  $scope.menu.lists = [
    {
    name : 'หน้าแรก',
    link : '#home'
    },
    {
    name : 'ค้นหาเบี้ย',
    link : '#searchForm'
    },
    {
    name : 'สมัครง่าย',
    link : '#step'
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
    link : '#contact-us'
    }
  ];
}]);