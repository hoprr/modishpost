
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
<?php include 'includes/nav.php'; ?>


<?php if($posts) : ?>
	<div class="content container hpstyle">
		<div class="search col-sm-6" style="margin-top: 50px;" id="search">
			<input id="myInput" type="text" name="search" placeholder="Search..">&nbsp; <i class="fas fa-search"></i>
		</div>
		<div class="row">
		    <div class="col-sm-6">				
				<?php while($row = $posts->fetch_assoc()) : ?>

				<div class="hpcard" id="myDIV">
		    		<a href="post.php?id=<?php echo urlencode($row['id']); ?>">
		    			<div class="posts">
				    		<div class="posts-image">
								<img src="<?php echo $row['image']; ?>" width="100%">
							</div>
							<div class="post-text">	
									<h4> <?php echo $row['title']; ?> </h4>
									<p class="a-date"> <?php echo formatDate($row['date']); ?> </p>
									<p> <?php echo shortenText($row['body']); ?> </p>
							</div>
						</div>
					</a>
					<span class="author">- by <?php echo $row['author']; ?></span>
				</div><br><br><br>

				<?php endwhile; ?>	    	
		    </div>
		</div>
	</div>

	<?php else : ?>
		<p class="no-posts">There are not posts yet!</p>
	<?php endif; ?>
	
	<?php include 'includes/footer.php'; ?>