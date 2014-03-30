<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nikola Bodroži&#263; &laquo; My Portfolio</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery UI -->
		<link href="css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<style>
			#wrapp {
				margin-top: 80px;
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Menu START -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Project name</a>
				</div>
			</div>
		</div>
		<!-- Menu END -->

		<div class="container" id="wrapp">
			<header>
				<div class="well">
					<h1>jQuery UI Portlets</h1>
					<h3>Portfolio by Nikola Bodro&#382;i&#263;</h3>
				</div>
			</header>
			<!-- Main content START -->
			<div class="row">
				<div class="col-md-7">
<?php  
require ($_SERVER["DOCUMENT_ROOT"] . '/include/database.inc');
require ($_SERVER["DOCUMENT_ROOT"] . '/portlets/classes.inc');
?>
					<!--  -->
					<div class="column" id="left">
<?php
print_portlets('left');
?>
					</div>


					<div class="column" id="middle">
<?php
print_portlets('middle');
?>
					</div>


					<div class="column" id="right">
<?php
print_portlets('right');					
?>
					</div>
					<!--  -->

				</div>
				<div class="col-md-5">
					<pre id='so' style="padding:5px;font-size:medium;"> <div id="info_cols" style="padding:5px;font-size:small;"><p>placeholder for debug</p></div>	</pre>
				</div>

			</div>
			<!-- Main content END -->
			<footer>
				<div class="well well-sm">
					<p  class="text-center" style="margin-bottom: 0px;">
						<strong> Nikola Bodroži&#263; &laquo; &copy; 2014</strong>
					</p>
				</div>
			</footer>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery UI customized JavaScript -->
		<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<!-- Portlets -->
		<script src="js/support.js"></script>
	</body>
</html>