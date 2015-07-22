app.factory('HomeServices', function ($http, $rootScope) {
    return {
        showLoad : function (bool){
          $rootScope.showLoad = bool;
        },
        getYear : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-year-package',
              data: formData
          });
          return promise;
        },
        getBrand : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-brand-package',
              data: formData
          });
          return promise;
        },
        getSeries : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-series-package',
              data: formData
          });
          return promise;
        },
        getMainPackage : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-main-package',
              data: formData
          });
          return promise;
        },
        getLevelPackage : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-level-package',
              data: formData
          });
          return promise;
        },
        saveMember : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-register-customer',
              data: formData
          });
          return promise;
        },
        getSlide : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-slide',
              data: formData
          });
          return promise;
        },
        getPopup : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-popup',
              data: formData
          });
          return promise;
        },
        getContent : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-content',
              data: formData
          });
          return promise;
        },
        getContentList : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-content-list',
              data: formData
          });
          return promise;
        },
        getProvince : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-province',
              data: formData
          });
          return promise;
        },
        getAmphur : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-amphur',
              data: formData
          });
          return promise;
        },
        getDistrict : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-district',
              data: formData
          });
          return promise;
        },
        getZipcode : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-zipcode',
              data: formData
          });
          return promise;
        },
        checkUser : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-check-username',
              data: formData
          });
          return promise;
        },
        checkInvite : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-check-invite',
              data: formData
          });
          return promise;
        },
        login : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-login-customer',
              data: formData
          });
          return promise;
        }
    };
});

