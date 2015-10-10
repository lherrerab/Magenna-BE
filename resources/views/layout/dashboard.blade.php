<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html ng-app="myAgenda" xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.6/angular.min.js"></script>
		<script src="js/agenda-controller.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/myagendaDashboard.css">
		<script src="js/agenda-controller.js"></script>
		<title>Magenda</title>
	</head>
	<body ng-controller="dashboardController">
		<nav class="navbar navbar-inverse navbar-fixed-top">
      		<div class="container-fluid">
        		<div class="navbar-header">
          			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            			<span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          			<a class="navbar-brand" href="#">Magenna</a>
        		</div>
        		<div id="navbar" class="navbar-collapse collapse">
          			<ul class="nav navbar-nav navbar-right">
            			<li><a href="#">Profile</a></li>
		      		</ul>
          			<form class="navbar-form navbar-right">
            			<input type="text" size="50" class="form-control" placeholder="Search...">
          			</form>
        		</div>
      		</div>
    	</nav>
		
		<div class="container-fluid">
      		<div class="row">
        		<div class="col-sm-3 col-md-2 sidebar">
          			<ul class="nav nav-sidebar">
          				@yield('sidebar')
          			</ul>
          			<ul class="nav nav-sidebar">
            			<li><a href="">Logout</a></li>
          			</ul>
        		</div>
        		
        		@yield('content')
        		
      		</div>
    	</div>    	
	</body>
</html>