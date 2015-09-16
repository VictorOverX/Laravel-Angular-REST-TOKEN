app.controller('LoginController', 
	['$scope', '$http', '$rootScope', '$location', 
	function($scope, $http, $rootScope, $location){

		$scope.email 	= "";
		$scope.password = "";

		$scope.error = {
			valid: false,
			message: ""
		};

		$scope.login = function() {

			$http.post(BaseURL() + '/oauth/access_token', {
				username: $scope.email,
				password: $scope.password,
				client_id: 1,
				client_secret: 'secret',
				grant_type: 'password'
			})
			.success(function(data){
				if(typeof data.access_token != 'undefined' && data.access_token != ""){
					$rootScope.token = data.access_token;
					$location.path('posts');
				}					
			})
			.error(function(data){

				$scope.error.valid 		= true;
				$scope.error.message 	= data.error_description;
			})
			return false;
		}
}]);

app.controller('PostController', 
	['$scope', '$rootScope', '$http', '$location',
	function ($scope, $rootScope, $http, $location){

		$scope.posts = [];

		$http({
			method: 'GET',
			url: BaseURL() + '/post',
			headers: {
				Authorization: 'Bearer ' + $rootScope.token
			}
		})
		.success(function(data){
			$scope.posts = data;
		})
		.error(function(data){
			$location.path('login');
		})
}]);

app.controller('PortfolioController',  
	['$scope', '$location', '$http', '$rootScope', '$interval', '$routeParams', 'fileUpload', 'notify',
	function($scope, $location, $http, $rootScope, $interval, $routeParams, fileUpload, notify){
		
		$scope.load 	= function(){			  
			//$scope.portfolios = PortfolioService.query();

			$http({
				method: 'GET',
				url: BaseURL() + '/portfolio',
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				$scope.portfolios = data;
			})
			.error(function(){
				$location.path('login');
			});		
			return false;	
		}

		$scope.clear 	= function(){
			$scope.item = "";
		}

		$scope.get 		= function(){
			$http({
				method: 'GET',
				url: BaseURL() + '/portfolio/' + $routeParams.id,
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				$scope.item = data;
			})
			.error(function(){
				$location.path('login');
			});
			return false;	
		} 

		function CarregarGaleria(id){
			$scope.galerias = "";

			$http({
				method: 'GET',
				url: BaseURL() + '/galeria/' + id,
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				data.created_at = new Date(data.created_at);
				$scope.galerias = data;
			})
			.error(function(){
				$location.path('login');
			});	
			return false;		
		}

		$scope.add 		= function(item){
			$http({
				method: 'POST',
				url: BaseURL() + '/portfolio',
				data: item,
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				console.log(data);
				if(data === 'sucesso'){
					notify({ message:'Portfólio adicionado com sucesso!', duration: '2000', position: 'center', classes: 'alert-success'} );
					//$interval(function(){ $location.path('portfolio'); }, 3000);				
				}
			})
			.error(function(){
				$location.path('login');
			});	
			return false;			
		}

		$scope.editar 	= function(item){
			$http({
				method: 'PUT',
				url: BaseURL() + '/portfolio/' + $routeParams.id,
				data: item,
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				if(data === 'sucesso'){
					notify({ message:'Portfólio editado com sucesso!', duration: '2000', position: 'center', classes: 'alert-success'} );
				}
			})
			.error(function(){
				$location.path('login');
			});
			return false;	
		}

		$scope.deletar = function(index){
			$http({
				method: 'DELETE',
				url: BaseURL() + '/portfolio/' + index,
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				if(data === 'sucesso'){
					notify({ message:'Portfólio deletado com sucesso!', duration: '2000', position: 'center', classes: 'alert-success'} );
					//$interval(function(){ $location.path('portfolio'); }, 3000);
				}
			})
			.error(function(){
				$location.path('login');
			});
			return false;	
		}	

		$scope.upload = function(){
			var file 		= $scope.myFile;
			var id 			= $routeParams.id;

			var uploadUrl 	= BaseURL() + '/upload';
			fileUpload.uploadFileToUrl(file, uploadUrl, id);

			CarregarGaleria($routeParams.id);
			return false;	
		}	

		$scope.getGaleria = function(){
			CarregarGaleria($routeParams.id);	
			return false;			
		} 		

		$scope.deletarGaleria = function(index){

			$http({
				method: 'GET',
				url: BaseURL() + '/galeria/delete/' + index,
				headers: {
					Authorization: 'Bearer ' + $rootScope.token
				}
			})
			.success(function(data){
				if(data === 'sucesso'){
					notify({ message:'Imagem deletado com sucesso!', duration: '2000', position: 'center', classes: 'alert-success'} );
					CarregarGaleria($routeParams.id);
				}
			})
			.error(function(){
				$location.path('login');
			});
			//console.log(index);
			return false;	
		}

	}
]);


