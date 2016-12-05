<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URI ;?>templates/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo BASE_URI ;?>templates/css/custom.css" rel="stylesheet">
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="<?php echo BASE_URI ;?>templates/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URI ;?>templates/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URI ;?>templates/js/ckeditor/ckeditor.js"></script>
	<?php 
	//check if site title is set, else assign it 
	if(!isset($title)){
		$title=site_title;
	}
	?>
	
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Jplace Forum</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="register.php">Create an account</a></li>
            <li><a href="create.php">Create Topic</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
						<h1 class="pull-left"><?php echo $title; ?><h1>
						<h4 class="pull-right">A simple Testimony Forum<h4>
						<div class="clearfix"></div><hr/>