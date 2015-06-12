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
        }
    };
});

