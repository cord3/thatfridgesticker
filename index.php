<?php
	// Users IP address...
	echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));
	
	// App settings
	$appName = "The Online Fridge Sticker";
	
	// Ad space costs
	$cost_Ad1 = "$199.00 / YEAR"
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $appName; ?></title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cosmo/bootstrap.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
		body {
			padding: 3%;
		}
    </style>
  </head>
  <body>
	
	<div class="container">
		<p class="lead">Welcome to <?php echo $appName; ?></p>
		
		<div class="row">
			<div class="col-md-12">
				<div class="well text-center">
					<p>Buy the #1 Advertising Space on <?php echo $appName; ?><br/><h2><?php echo $cost_Ad1; ?></h2></p>
					<span><button class="btn btn-warning"><i class="fa fa-shopping-cart"></i>&nbsp;Buy Now</button>&nbsp;&nbsp;&nbsp;<button class="btn btn-primary"><i class="fa fa-info"></i>&nbsp;More Info</button></span>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-3">
				<div class="well"></div>
			</div>
			<div class="col-md-3">
				<div class="well">
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="well"></div>
			</div>
			<div class="col-md-3">
				<div class="well"></div>
			</div>
		</div>
	</div>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
