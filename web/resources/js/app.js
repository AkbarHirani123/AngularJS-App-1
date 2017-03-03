function myFunction() {
    var x = document.getElementById("mynavbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}

var myApp = angular.module('myApp', ['ui.router', 'ngAnimate']);

myApp.config(function($stateProvider, $urlRouterProvider) {

	$urlRoutProvider.otherwise('/');

	$stateProvider
        
    .state('home', {
      url: '/',
      templateUrl: '/pages/home.html'
    })
    
    .state('about', {
      url: '/about',
      templateUrl: '/pages/about.html'
    });

});