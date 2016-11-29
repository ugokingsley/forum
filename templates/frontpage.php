<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
    
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
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="register.html">Create an account</a></li>
            <li><a href="create.html">Create Topic</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
						<h1 class="pull-left">Welcome To Jplace Forum<h1>
						<h4 class="pull-right">A simple Testimony Forum<h4>
						<div class="clearfix"></div><hr/>
						<ul id="topics">
							<li class="topics">
								<div class="row">
									<div class="col-md-2">
										<img class="avatar pull-left" src="img/rename.png"/>
									</div>
									<div class="col-md-10">
										<div class="topic-content pull-right">
											<h3><a href="topic.html">How did you know about Christ?</a></h3>
											<div class="topic-info">
												<a href="category.html">Development</a> >> <a href="profile.html">Ugochukwu</a>
												<span class="badge pull-right">3</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="topics">
								<div class="row">
									<div class="col-md-2">
										<img class="avatar pull-left" src="img/rename.png"/>
									</div>
									<div class="col-md-10">
										<div class="topic-content pull-right">
											<h3><a href="topic.html">How did you know about Heaven?</a></h3>
											<div class="topic-info">
												<a href="category.html">Development</a> >> <a href="profile.html">Ugochukwu</a>
												<span class="badge pull-right">5</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<h3>Forum Statistics</h3>
						<ul>
							<li>Total number of users: <b>345</b></li>
							<li>Total number of topics: <b>34</b></li>
							<li>Total number of categories: <b>39</b></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<form role="form">
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" type="text" name="username" placeholder="Enter username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password" placeholder="Enter your password">
							</div>
							<button type="submit" name="do_login" class="btn btn-primary">Login</button><a class="btn btn-default" href="register.html">create an account</a>
						</form>
					</div>
					<div class="block">
						<h3>Categories</h3>
						<div class="list-group">
							<a href="#" class="list-group-item active" >All Topics<span class="badge pull-right">145</span></a>
							<a href="#" class="list-group-item" >Design<span class="badge pull-right">25</span></a>
							<a href="#" class="list-group-item" >Development<span class="badge pull-right">45</span></a>
							<a href="#" class="list-group-item" >Business & Marketing<span class="badge pull-right">45</span></a>
							<a href="#" class="list-group-item" >Search Engines <span class="badge pull-right">45</span></a>
							<a href="#" class="list-group-item" >Cloud & Hosting<span class="badge pull-right">45</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    
  </body>
</html>

