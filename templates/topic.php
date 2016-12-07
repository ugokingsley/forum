<?php include('includes/header.php');?>
						<ul id="topics">
							
							<li id="main-topic" class="topic topic">
								<div class="row">
									<div class="col-md-2">
										<div class="user-info">
											<img class="avatar pull-left" src="<?php echo BASE_URI ;?>images/avatars/<?php echo $topic->avatar ;?>"/>
											<ul>
												<li><b><?php echo $topic->username; ?></b></li>
												<li><?php echo userPostCount($topic->user_id); ?> posts</li>
												<li><a href="<?php echo BASE_URI ;?>topics.php?user=<?php echo $topic->user_id ;?>">view topics</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-10">
										<div class="topic-content pull-right">
											<?php echo $topic->body ;?>
										</div>
									</div>
								</div>
							</li>
							
						</ul>
						<h3>Reply to Topic</h3>
						<form>
							<div class="form-group">
								<label>Topic Body</label>
								<textarea class="form-control" type="text" rows="10" cols="80" id="reply" name="body"></textarea>
								<script>CKEDITOR.replace('reply')</script>
							</div>
						</form>
<?php include('includes/footer.php');?>