<?php include 'includes/header.php' ?>
<?php
	// Create DB Object
	$db = new Database();
	
	// Create Query
	$query = "SELECT * FROM posts ORDER BY id DESC";
	//Run Query
	$posts = $db->select($query);

	// Create Query
	$query = "SELECT * FROM categories";
	
	//Run Query
	$categories = $db->select($query);

?>
<?php include 'includes/nav.php' ?>
<?php if($posts) : ?>

	<div class="content container hpstyle">
		<div class="row">
		    <div class="col-sm-8">			
				<div class="hpcard">
		    		<a href="post.php?id=<?php $row = $posts->fetch_assoc(); echo urlencode($row['id']); ?>">
						<img src="<?php echo $row['image']; ?>"  style="overflow: hidden; width:100%;" alt="Thumbnail">
						<h4> <?php echo $row['title']; ?> </h4>
						<p class="a-date"> <?php echo formatDate($row['date']); ?> </p>
						<p>  <?php echo shortenText($row['description']); ?> </p>
					</a>
					<span class="author">- by <?php echo $row['author']; ?> </span>
				</div>
			
				<h4 id="about">
					<span>About</span>
				</h4>

				<div class="row">
					<div class="col-sm-6">
						<?php include 'includes/about.php'; ?>

						<!-- Below The About Section Cards -->
				    <!--	<div class="hpcard">
				    		<a href="#">
								<img src="images/sample.jpg" width="100%">
								<h4> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elit eros, malesuada </h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mauris ipsum, laoreet eget interdum id, tristique eget justo. Nullam cursus metus dolor, nec faucibus magna fringilla vel. </p>
							</a>
							<span class="author">- by Yash Gupta </span>
						</div> -->

					</div>
					<div class="col-sm-6 socialm">
						<h4> Never stop tweaking your life! </h4>
						<a href="https://modishpost.page.link/twitter" target="blank"> <i class="fa fa-twitter" style="font-size:36px"></i></a>
						<a href="https://modishpost.page.link/instagram" target="blank"> <i class="fa fa-instagram" style="font-size:36px"></i></a>
						<a href="https://modishpost.page.link/facebook" target="blank"> <i class="fa fa-facebook-official" style="font-size:36px"></i></a>
						<a href="https://modishpost.page.link/youtube" target="blank"> <i class="fa fa-youtube-play" style="font-size:36px"></i></a>
																																					
					</div>
				</div>				
		    </div>
		    
		    <div class="col-sm-4">					
				<?php while($row = $posts->fetch_assoc()) : ?>

				<div class="hpcard">
		    		<a href="post.php?id=<?php echo urlencode($row['id']); ?>">
						<img src="<?php echo $row['image']; ?>" width="100%">
						<h4> <?php echo $row['title']; ?> </h4>
						<p class="a-date"> <?php echo formatDate($row['date']); ?> </p>
						<p> <?php echo shortenText($row['description']); ?> </p>
					</a>
					<span class="author">- by <?php echo $row['author']; ?></span>
				</div>

			<?php endwhile; ?>    	
		    </div>
		  </div>
	</div>

	<?php else : ?>
		<p class="no-posts">There are not posts yet!</p>
	<?php endif; ?>
	
	<?php include 'includes/footer.php'; ?>