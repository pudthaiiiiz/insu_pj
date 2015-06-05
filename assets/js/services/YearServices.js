app.factory('YearServices', function ($http) {
    return {
        getYear : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-year-package',
              data: formData
          });
          return promise;
        }
    };
});

