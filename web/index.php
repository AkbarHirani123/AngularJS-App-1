<!DOCTYPE>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>AngularJS App 1 | By Akbar Hirani</title>
  <link rel="stylesheet" href="/resources/css/style.css">
</head>
<body style="min-height: 2000px;" ng-app="myApp">
	<header>
		<div class="navbar" ng-controller="navController">
			<div class="navbar-brand">
				<li><a href="#/">Akbar Hirani</a></li>
			</div>
			<ul class="navbar" id="mynavbar">
			  <li ng-class="{active: isActive('/')}"><a  ui-sref="home">Home</a></li>
			  <li ng-class="{active: isActive('/news')}"><a href="news">News</a></li>
			  <li ng-class="{active: isActive('/contact')}"><a href="contact">Contact</a></li>
			  <li ng-class="{active: isActive('/about')}"><a ui-sref="about">About</a></li>
			  <li class="icon">
			    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
			  </li>
			</ul>
		</div>
	</header>

	<div class="content">
    <div ui-view ng-cloak></div>
  </div>  

  <!-- Scripts will run after html has been created -->
  <script src="/resources/libs/angular/angular.min.js"></script>
  <script src="/resources/libs/angular-animate/angular-animate.min.js"></script>
  <script src="/resources/libs/angular-ui-router/release/angular-ui-router.min.js"></script>
  <script src="/resources/js/app.js"></script>
  <script src="/resources/js/navController.js"></script>

</body>
</html>