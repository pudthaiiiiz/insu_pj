app.factory('SeriesServices', function ($http) {
    return {
        getSeries : function (data) {
          var formData = data;
          var promise = $http({
              method: 'post',
              url: 'api-get-series-package',
              data: formData
          });
          return promise;
        }
    };
});

