		    	
			<?php if($categories) : ?>

   	<div class="hpcard categories">
		<h4>Categories</h4>
		<div class="categories-a">
			<?php while($row = $categories->fetch_assoc()) : ?>
				<a href="posts.php?category=<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </a> <br>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
		</div>
	</div>