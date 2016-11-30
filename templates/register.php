<?php include('includes/header.php');?>
						<form role="form" method="post" action="register.php" enctype="multipart/form-data">
							<div class="form-group">
								<label>*Name</label>
								<input class="form-control" type="text" name="name" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label>*Email Address</label>
								<input class="form-control" type="email" name="email" placeholder="Enter your Email Address">
							</div>
							<div class="form-group">
								<label>*Choose Username</label>
								<input class="form-control" type="text" name="username" placeholder="Create a username">
							</div>
							<div class="form-group">
								<label>*Password</label>
								<input class="form-control" type="password" name="password" placeholder="Enter a password">
							</div>
							<div class="form-group">
								<label>*Confirm Password</label>
								<input class="form-control" type="text" name="password2" placeholder="Enter password again">
							</div>
							<div class="form-group">
								<label>*Upload Avatar</label>
								<input class="form-control" type="file" name="avatar">
							</div><p class="help-block"></p>
							<div class="form-group">
								<label>About Me</label>
								<textarea class="form-control" type="text" rows="6" cols="80" name="about" placeholder="Tell us about yourself(optional)"></textarea>
							</div>
							
							<input type="submit" class="btn btn-primary" value="Register">
						</form>
<?php include('includes/footer.php');?>