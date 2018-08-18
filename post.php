<?php include 'config/config.php'; ?>
<?php include 'libraries/database.php'; ?>
<?php include 'helpers/format_helper.php'; ?>

	<?php
		$id = $_GET['id'];
		$nxt_id = $id+1;

		// Create DB Object
		$db = new Database();
		
		// Create Query
		$query = "SELECT * FROM posts WHERE id =".$id;
		//Run Query
		$post = $db->select($query)->fetch_assoc();

		// Create Query
		$query = "SELECT * FROM categories";
		//Run Query
		$categories = $db->select($query);

	?>
	<?php include 'includes/aheader.php'; ?>

	<div class="content">
		<div class="miscProperties textContent">
			<h3><?php echo $post['title']; ?></h3>
			<p class="a-date"> <?php echo formatDate($post['date']); ?> </p><br><br>

			<img src="<?php echo $post['image']; ?>" width="100%" style=" filter: brightness(90%)">

			<p style="color: rgba(0,0,0,0.5); font-size: 0.8em;"><?php echo $post['image_credits']; ?></p>

			

			<p> <?php echo ($post['body']); ?> </p>
		<div class="a_author">
			- by <?php echo $post['author']; ?>
		</div>




			<div style="height: 150px;"></div>

				<div class="socialm">
						<a href="https://modishpost.page.link/twitter" target="blank"> <i class="fa fa-twitter" style="font-size:36px"></i></a>
						<a href="https://modishpost.page.link/instagram" target="blank"> <i class="fa fa-instagram" style="font-size:36px"></i></a>
						<a href="https://modishpost.page.link/facebook" target="blank"> <i class="fa fa-facebook-official" style="font-size:36px"></i></a>
						<a href="https://modishpost.page.link/youtube" target="blank"> <i class="fa fa-youtube-play" style="font-size:36px"></i></a>
																																					
				</div>

			<div style="height: 50px;"></div>			

	<div id="disqus_thread"></div>
		<script>

		/**
		*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
		/*
		var disqus_config = function () {
		this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};
		*/
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://modishpost.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
		</noscript>
		</div>
	</div>
	<?php include 'includes/footer.php'; ?>