<?php include 'includes/header.php'; ?>
<?php
	// Create DB Object
	$db = new Database();

	// Check URL for Category
	if(isset($_GET['category'])) {

		$category = $_GET['category'];

		// Create Query
		$query = "SELECT * FROM posts WHERE category = ".$category." ORDER BY id DESC";
		
		//Run Query
		$posts = $db->select($query);
		


	} else {
		// Create Query
		$query = "SELECT * FROM posts ORDER BY id DESC";
		
		//Run Query
		$posts = $db->select($query);
	}

	// Create Query
	$query = "SELECT * FROM categories";
	
	//Run Query
	$categories = $db->select($query);

?>


<?php if($posts) : ?>

	<div class="content container hpstyle">
		<div class="row">
		    <div class="col-sm-4">				
				<?php while($row = $posts->fetch_assoc()) : ?>

				<div class="hpcard">
		    		<a href="post.php?id=<?php echo urlencode($row['id']); ?>">
		    			<div class="posts">
				    		<div class="posts-image">
								<img src="images/sample.jpg" width="100%">
							</div>
							<div class="post-text">	
									<h4> <?php echo $row['title']; ?> </h4>
									<p class="a-date"> <?php echo formatDate($row['date']); ?> </p>
									<p> <?php echo shortenText($row['body']); ?> </p>
							</div>
						</div>
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