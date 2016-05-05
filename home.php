<!DOCTYPE html>
<html lang="it" ng-app="helpbookApp">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Helpbook">
        <meta name="author" content="Emilie Rollandin">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title>Helpbook</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        
        <link href="css/theme.css" rel="stylesheet">
        
        <link href="css/socialwidgets.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-route.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.0/angular-sanitize.min.js"></script>
        
        <script src="js/script.js"></script>
        
        <!-- Reference n3-line-chart and D3.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.15/d3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/line-chart/2.0.11/LineChart.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-chart/2.0.11/LineChart.min.css">
        
    </head>

<body role="document" ng-controller="mainController">
  
    <!-- Fixed navbar -->
    <?php
	require('navbar.php');
    ?> 

    <div class="container theme-showcase" role="main">

    <?php
	require('header.php');
    ?>
			
    <?php
	//require('database.php');
	$nl = "<br />";
    ?> 			

    <!-- angular templating -->
	<!-- this is where content will be injected -->
    <div class="row" ng-view></div>           
    
    <?php
        require('footer.php');
    ?>  

    </div> <!-- /container -->
	
    <?php
        //$conn->close();
    ?> 
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
</body>
</html>