/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global app, Global */

app.controller('MenuCtrl', ['$scope',  function ($scope) {
  $scope.menu = {};
  $scope.menu.title = "insurancebroker360";
  $scope.menu.lists = [
    {
    name : 'หน้าแรก',
    link : Global.baseurl
    },
    {
    name : 'ประวัติ',
    link : '#'
    },
    {
    name : 'สมัครสมาชิก',
    link : '#step'
    },
    {
    name : 'เบี้ยประกันภัย',
    link : '#'
    },
    {
    name : 'บริการ',
    link : '#'
    },
    {
    name : 'ช่องทางการชำระเงิน',
    link : '#'
    },
    {
    name : 'ติดต่อเรา',
    link : '#contact-us'
    },
    {
    name : 'เบอร์แจ้งอุบัติเหตุ',
    link : '#'
    }
  ];
}]);