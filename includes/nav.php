<?php if($categories) : ?>
	<div id="topnav" class="scrollmenu">
		<div id="topnavtxt">
			<?php while($row = $categories->fetch_assoc()) : ?>
				<a href="posts.php?category=<?php echo $row['id']; ?>"> 
				<?php echo $row['name']; ?> </a>		
			<?php endwhile; ?>
		</div>	

	</div> 	
<?php else: ?>
<?php endif; ?>	