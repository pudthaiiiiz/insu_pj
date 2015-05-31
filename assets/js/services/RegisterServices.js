app.service('RegisterServices', function ($http) {
    this.getPofile = function (data) {
      var formData = data;
      var promise = $http({
          method: 'post',
          url: 'api-get-profile',
          data: formData
      });
      return promise;
    };
});

