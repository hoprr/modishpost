<?php include 'includes/header.php'; ?>	
<?php 
	// Create DB Object
	$db = new Database();

	if(isset($_POST['submit'])) {
		// Assign Vars
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$image = mysqli_real_escape_string($db->link, $_POST['image']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);
		$description = mysqli_real_escape_string($db->link, $_POST['description']);
		$image_credits = mysqli_real_escape_string($db->link, $_POST['image_credits']);

		//Simple Validation
		if($title == '' || $body == '' || $category == '' || $author == ''){
			//Set an error
			$error = 'Please fill out all required fields'; 
		} else {
			$query = "INSERT INTO posts
					(title, image, image_credits, body, category, author, tags, description)
					VALUES ('$title', '$image', '$image_credits', '$body', $category, '$author', '$tags', '$description')";

			$insert_row = $db->insert($query);
		}

	}	
 ?>
	<?php
		// Create Query
		$query = "SELECT * FROM categories";
		
		//Run Query
		$categories = $db->select($query);

	?>
<div class="container admin-a">	
	<form method="post" action="add_post.php">

	  <div class="form-group">
	    <label>Post Title</label>
	    <input  name="title" type="text" class="form-control" placeholder="Enter Title">
	  </div>

	  <div class="form-group">
	    <label>Image</label>
	    <input  name="image" type="text" class="form-control" placeholder="Enter Image URL">
	  </div>

	  <div class="form-group">
	    <label>Image Credits</label>
	    <input  name="image_credits" type="text" class="form-control" placeholder="Enter Image source or the photgrapher's name">
	  </div>	  

	   <div class="form-group">
	    <label>Post Body</label>
	    <textarea name="body" class="editable form-control a-body" placeholder="Enter Post Body"></textarea>
	  </div>

	  <div class="form-group">
	    <label>Category Select</label>
		 <select name="category" class="form-control">
		 <?php while($row = $categories->fetch_assoc()) : ?>
		 	<?php if($row['id'] == $post['category']) {
		 			$selected = 'selected';
		 		} else {
		 			$selected = '';
		 		
		 		} 
		 		?>
		  	<option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
		 <?php endwhile; ?>
		  <option>Events</option>
		</select>
	  </div>

	  <div class="form-group">
	    <label>Add Description</label>
	    <input  name="description" type="text" class="form-control" placeholder="Add Description">
	  </div>	  

	  <div class="form-group">
	    <label>Author</label>
	    <input  name="author" type="text" class="form-control" id="" placeholder="Enter Author Name">
	  </div>

	  <div class="form-group">
	    <label>Tags</label>
	    <input  name="tags" type="text" class="form-control" placeholder="Enter Tags">
	  </div>

	<div>
	  <input name="submit" type="submit" class="btn btn-default" value="Submit">

	  <input name="delete" type="submit" class="btn btn-danger" value="Delete">

	  <a href="index.php" class="btn btn-default">Cancel</a>

	</div>
	</form>
</div>
<?php include 'includes/footer.php'; ?>