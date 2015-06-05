app.factory('BrandServices', function ($http) {
    return {
        getBrand : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-brand-package',
              data: formData
          });
          return promise;
        }
    };
});

