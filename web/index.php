<!DOCTYPE>
<html ng-app>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>AngularJS App 1 | By Akbar Hirani</title>
  <link rel="stylesheet" href="/resources/css/style.css">
</head>
<body style="min-height: 2000px;">
	<header>
		<div class="navbar">
			<div class="navbar-brand">
				<li><a href="/">Akbar Hirani</a></li>
			</div>
			<ul class="navbar" id="mynavbar">
			  <li><a class="active" href="#home">Home</a></li>
			  <li><a href="#news">News</a></li>
			  <li><a href="#contact">Contact</a></li>
			  <li><a href="#about">About</a></li>
			  <li class="icon">
			    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
			  </li>
			</ul>
		</div>
	</header>

	<div class="content">
    <div ui-view></div>
  </div>  

  <!-- Scripts will run after html has been created -->
  <script src="/resources/libs/angular/angular.min.js"></script>
  <script src="/resources/libs/angular-animate/angular-animate.min.js"></script>
  <script src="/resources/libs/angular-ui-router/release/angular-ui-router.min.js"></script>
  <script src="/resources/js/app.js"></script>

</body>
</html>