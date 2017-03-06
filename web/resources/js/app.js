function myFunction() {
    var x = document.getElementById("mynavbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
}

// app.js
var myApp = angular.module('myApp', ['ui.router', 'ngAnimate']);

myApp.config(function($stateProvider, $urlRouterProvider) {
    
    $urlRouterProvider.otherwise('/');
    
    $stateProvider
        
      .state('home', {
        url: '/',
        templateUrl: 'pages/home.html'
      })
      
      .state('about', {
        url: '/about',
        templateUrl: 'pages/about.html'
      })

      .state('home.work', {
        url: '/work',
        templateUrl: 'pages/home-work.html',
        controller: 'infoListController as infoList'
      });
        
});

myApp.controller('infoListController', function() {

});