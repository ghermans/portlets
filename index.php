<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Nikola Nikola Bodro&#382;i&#263; &raquo; Portfolio</title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- jQuery UI -->
		<link href="css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<style>
			#wrapp {
				margin-top: 80px;
			}
			/* opacity and inactive class */
			.opacityinact{
				  pointer-events: none;
				  background-color:#fff;
				  border:1px solid black;
				  opacity:0.6;
				  filter:alpha(opacity=60); /* For IE8 and earlier */				
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesnot work if you view the page via file:// -->
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
					<a class="navbar-brand" href="http://nikolabodr.com/">Back to blog</a>
				</div>
			</div>
		</div>
		<!-- Menu END -->

		<div class="container" id="wrapp">
			<header>
				<div class="well">
					<h1>Nikola Bodro&#382;i&#263; &raquo; Portfolio</h1>
					<h3>jQuery UI Portlets with PHP backend</h3>
				</div>
			</header>
			<!-- Main content START -->
			<div class="row">
				<div class="col-md-7">
<div id="balert" class="alert alert-warning alert-dismissable" style="display:none;">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Updating...</strong> Please wait.
</div>

<?php  
require ($_SERVER["DOCUMENT_ROOT"] . '/include/database.inc');
require ('classes.inc');
?>
					<!--  -->
<div id="colholder">
					<div class="column" id="left">
<?php
new PrintPortlet('left');
?>
					</div>


					<div class="column" id="middle">
<?php
new PrintPortlet('middle');
?>
					</div>


					<div class="column" id="right">
<?php
new PrintPortlet('right');					
?>
					</div>
		    <div style="clear:both;"></div>
</div>					
					<!--  -->

				</div>
				<div class="col-md-5">
					<p>Move portlets or click on plus / minus sign. AJAX calls and PHP scripts will save portlets state in MySQL database.</p>
				</div>

			</div>
			<!-- Main content END -->
			<footer>
				<div class="well well-sm">
					<p  class="text-center" style="margin-bottom: 0px;">
						<strong>&copy; Nikola Bodro&#382;i&#263; <?php echo date("Y");?></strong>
					</p>
				</div>
			</footer>
		</div>

		<!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery UI customized JavaScript -->
		<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
		<!-- Portlets -->
		<script src="js/support.js"></script>
	</body>
</html>
