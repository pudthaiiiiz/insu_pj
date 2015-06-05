app.factory('HomeServices', function ($http) {
    return {
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
        }
    };
});

