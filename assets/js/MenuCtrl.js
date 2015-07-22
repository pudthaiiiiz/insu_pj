/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* global app, Global */

app.controller('MenuCtrl', ['$scope',  function ($scope) {
    $scope.assets = Global.assets;
    $scope.uploads = Global.uploads;
    $scope.baseUrl = Global.baseurl;
  $scope.menu = {};
  $scope.menu.title = "insurancebroker360";
  $scope.menu.lists = [
    {
    name : 'หน้าแรก',
    link : Global.baseurl
    },
    {
    name : 'ประวัติ',
    link : Global.baseurl+'profile'
    },
    {
    name : 'เบี้ยประกันภัย',
    link : Global.baseurl+'product'
    },
    {
    name : 'บริการ',
    link : Global.baseurl+'service'
    },
    {
    name : 'ช่องทางการชำระเงิน',
    link : Global.baseurl+'payment'
    },
    {
    name : 'เข้าสู่ระบบ',
    link : Global.baseurl+'login'
    },
    {
    name : 'สมัครเลย',
    link : Global.baseurl+'#'
    },
    {
    name : 'เบอร์แจ้งอุบัติเหตุ',
    link : Global.baseurl+'pagedetail'
    }
  ];
}]);