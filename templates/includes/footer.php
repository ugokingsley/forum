					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="block">
						<h3>Login Form</h3>
						<?php if(isLoggedIn()) :?>
							<div class="userdata">
								welcome, <?php echo getUser()['username']; ?>
							</div><br/>
							<form role="form" method="post" action="logout.php">
								<input type="submit" name="do_logout" value="Logout" class="btn btn-primary">
							</form>
						<?php else: ?>
						
						<form role="form" method="post" action="login.php">
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
						<?php endif; ?>
					</div>
					<div class="block">
						<h3>Categories</h3>
						<div class="list-group">
							<a href="topics.php" class="list-group-item <?php echo is_active(null); ?>" >All Topics<span class="badge pull-right"></span></a>
							<?php foreach(getCategories() as $category): ?>
								<a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?>" ><?php echo $category->name; ?></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div><!-- /.container -->


    
   
    
  </body>
</html>

