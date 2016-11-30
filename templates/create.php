<?php include('includes/header.php');?>
						<form role="form" method="post" action="register.php" enctype="multipart/form-data">
							<div class="form-group">
								<label>Topic Title</label>
								<input class="form-control" type="text" name="title" placeholder="Enter name">
							</div>
							<div class="form-group">
								<label>Category</label>
								<select name="" class="form-control">
									<option value="">Design</option>
									<option value="">Development</option>
									<option value="">Business & Marketing</option>
									<option value="">Search Engines</option>
									<option value=""Cloud & hosting</option>
								</select>
							</div>
						
							<div class="form-group">
								<label>Topic Body</label>
								<textarea class="form-control" type="text" rows="10" cols="80" id="body" name="body"></textarea>
								<script>CKEDITOR.replace('body')</script>
							</div>
							
							<input type="submit" class="btn btn-primary" value="Register">
						</form>
<?php include('includes/footer.php');?>