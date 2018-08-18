<?php include 'includes/header.php'; ?> 
<?php 
	// Create DB Object
	$db = new Database();

	if(isset($_POST['submit'])) {
		// Assign Vars
		$name = mysqli_real_escape_string($db->link, $_POST['name']);

		//Simple Validation
		if($name == ''){
			//Set an error
			$error = 'Please fill out all required fields'; 
		} else {
			$query = "INSERT INTO categories
					(name)
					VALUES ('$name')";

			$update_row = $db->update($query);
		}

	}	
 ?>

<div class="container admin-a">
<form role="form" method="post" action="add_category.php">
  <div class="form-group">

    <label for="exampleInputEmail1">Category Name</label>

    <input name="name" type="text" class="form-control" placeholder="Enter Category">

  </div>

<div>

  <input name="submit" type="submit" class="btn btn-default" value="Submit">

 

    <input name="delete" type="submit" class="btn btn-danger" value="Delete">

    <a href="index.php" class="btn btn-default">Cancel</a>

</div>
</form>
</div>

<?php include 'includes/footer.php'; ?>
