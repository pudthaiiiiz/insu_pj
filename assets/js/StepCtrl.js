/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
app.controller('StepCtrl', ['$scope', 'HomeServices', function ($scope, HomeServices) {
        var params = {
            userName: null
        };
        var callServiceProfile = HomeServices.getYear(params);
        callServiceProfile.success(function (data) {
            if (data.status === 'success') {
                data = data.data;
                $scope.userName = data.cusFullname;
            }
        }).error(function () {
            console.log('API Timeout');
        });

    }]);
