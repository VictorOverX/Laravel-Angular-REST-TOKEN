var app = angular.module('app', ['ngRoute', 'ngResource', 'cgNotify']);

app.config(
	[
		'$routeProvider',
		function ($routeProvider) {
			
			$routeProvider
			.when('/login', {
				templateUrl: BaseURL() + '/assets/js/angular/views/login.html',
				controller: 'LoginController'
			})
			.when('/posts', {
				templateUrl: BaseURL() + '/assets/js/angular/views/posts.html',
				controller: 'PostController'
			})
			.when('/portfolio', {
				templateUrl: BaseURL() + '/assets/js/angular/views/portfolio.html',
				controller: 'PortfolioController'
			})
			.when('/novo-portfolio', {
				templateUrl: BaseURL() + '/assets/js/angular/views/portfolio-novo.html',
				controller: 'PortfolioController'
			})
			.when('/editar-portfolio/:id', {
				templateUrl: BaseURL() + '/assets/js/angular/views/portfolio-editar.html',
				controller: 'PortfolioController'
			})
			.otherwise({ 
				redirectTo:'/'
			});
	  
		}
	]
);
