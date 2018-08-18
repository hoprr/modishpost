<?php include 'includes/header.php'; ?>
<?php
	$id = $_GET['id'];
	//Create DB Object
	$db = new Database();
	
	//Create Query
	$query = "SELECT * FROM posts WHERE id = ".$id;
	//Run Query
	$post = $db->select($query)->fetch_assoc();
	
	//Create Query
	$query = "SELECT * FROM categories";
	//Run Query
	$categories = $db->select($query);
?>

<?php
	if(isset($_POST['submit'])){
		//Assign Vars
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$image = mysqli_real_escape_string($db->link, $_POST['image']);
		$image_credits = mysqli_real_escape_string($db->link, $_POST['image_credits']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);
		$description = mysqli_real_escape_string($db->link, $_POST['description']);
		//Simple Validation
		if($title == '' || $body == '' || $category == '' || $author == '' || $image == '' || $description ==''){
			//Set Error
			$error = 'Please fill out all required fields';
		} else {
			$query = "UPDATE posts 
					SET 
					title = '$title',
					body = '$body',
					category = '$category',
					author = '$author',
					tags = '$tags',
					image = '$image',
					image_credits = '$image_credits',
					description = '$description' 
					WHERE id =".$id;
			
			$update_row = $db->update($query);
		}
	}
?>

<?php
	if(isset($_POST['delete'])){
		$query = "DELETE FROM posts WHERE id =".$id;
		$delete_row = $db->delete($query);
	}

?>
<div class="container admin-a">	
	<form role="form" method="post" action="edit_post.php?id=<?php echo $id; ?>">

	  <div class="form-group">
	    <label>Post Title</label>
	    <input  name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
	  </div>

	  <div class="form-group">
	    <label>Image</label>
	    <input  name="image" type="text" class="form-control" placeholder="Enter Image URL" value="<?php echo $post['image']; ?>">
	  </div>

	  <div class="form-group">
	    <label>Image Credits</label>
	    <input  name="image_credits" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['image_credits']; ?>">
	  </div>	  

	   <div class="form-group">
	    <label>Post Body</label>
	    <textarea name="body" class="form-control editable a-body" placeholder="Enter Post Body"><?php echo $post['body']; ?></textarea>
	  </div>

	  <div class="form-group">
	    <label>Category Select</label>
		 <select name="category" class="form-control">
		 <?php while($row = $categories->fetch_assoc()) : ?>
		 	<?php if($row['id'] == $post['category']){
		 			$selected = 'selected';
		 		} else {
		 			$selected = '';
		 		} 
		 		?>
		  	<option value="<?php echo $row['id']; ?>"<?php echo $selected; ?>><?php echo $row['name']; ?></option>
		 <?php endwhile; ?> 
		  <option>Events</option>
		</select>
	  </div>

	  <div class="form-group">
	    <label>Add Description</label>
	    <input  name="description" type="text" class="form-control" placeholder="Add Description" value="<?php echo $post['description']; ?>">
	  </div>	  

	  <div class="form-group">
	    <label>Author</label>
	    <input  name="author" type="text" class="form-control" id="" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
	  </div>

	  <div class="form-group">
	    <label>Tags</label>
	    <input  name="tags" type="text" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
	  </div>

	<div>
	  <input name="submit" type="submit" class="btn btn-default" value="submit">

	  <input name="delete" type="submit" class="btn btn-danger" value="delete">

	  <a href="index.php" class="btn btn-default">Cancel</a>

	</div>
	</form>
</div>
<?php include 'includes/footer.php'; ?>