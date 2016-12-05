<?php include('includes/header.php');?>
					<ul id="topics">
						<?php if($topics): ?>
						<?php foreach($topics as $topic): ?>
							<li class="topics">
								<div class="row">
									<div class="col-md-2">
										<img class="avatar pull-left" src="images/avatars/<?php echo $topic->avatar; ?>"/>
									</div>
									<div class="col-md-10">
										<div class="topic-content pull-right">
											<a><h3><?php echo $topic->title; ?></a></h3>
											<div class="topic-info">
												<a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><?php echo $topic->name; ?></a> >> 
												<a href="topics.php?user=<?php echo urlFormat($topic->user_id); ?>"><?php echo $topic->username; ?></a>#
												>> <?php echo formatDate($topic->create_date);  ?>
												<span class="badge pull-right"><?php echo replyCount($topic->id) ;?></span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<?php endforeach; ?>
						</ul>
						<?php else: ?>
							<p>No topics to Display</p>
						<?php endif; ?>
						<h3>Forum Statistics</h3>
						<ul>
							<li>Total number of users: <b>345</b></li>
							<li>Total number of topics: <b><?php echo $totalTopics; ?></b></li>
							<li>Total number of categories: <b><?php echo $totalCategories; ?></b></li>
						</ul>
<?php include('includes/footer.php');?>