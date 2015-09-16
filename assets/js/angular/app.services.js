app.service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function(file, uploadUrl, id){
        var fd = new FormData();
        fd.append('file', file);
        fd.append('id', id);

        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: {'Content-Type': undefined}
        })
        .success(function(data){
            //location.reload();
        })
        .error(function(){
        });
    }
}]);

