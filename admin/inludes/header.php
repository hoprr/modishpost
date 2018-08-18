<?php include '../config/config.php'; ?>
<?php include '../helpers/format_helper.php'; ?>
<?php 
	// Start Session
	session_start();
	if ($_SESSION['logged'] == true) {
		include '../libraries/Database.php'; 
	} else {
		echo '<style> body { display: none;} </style>';
	}
?>

<!doctype html>
<html lang="en">
<head>
	<title> Admin Area </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
			
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/bs.css">
	<link rel="stylesheet" type="text/css" href="../fa/all.css">
	<link rel="stylesheet" type="text/css" href="../css/articles.css">
	<link rel="stylesheet" type="text/css" href="../css/txt.css">
	<link rel="stylesheet" type="text/css" href="../css/medium-editor.css">
	<link rel="stylesheet" type="text/css" href="../css/themes/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="image_src" href="https://i.imgur.com/KhHamdw.jpg">

	<meta property="og:image" content="https://i.imgur.com/KhHamdw.jpg" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://modishpost.orgfree.com" />
	<meta property="og:title" content="Modish Post" />
	<meta property="og:description" content="Modish Post creates professional blog posts on making a life worth living. Modish Post has helped countless people in making there life worth it!" />

	<meta name="description" content="Blog Posts to Tweak your life!">
	<meta name="keywords" content="Life and Living, Life Coach, Modish Post, Modish">
	<meta name="author" content="Yash Gupta">

</head>
<body>
	<div id="header">
		<div class="logo">
		<a href="index.html"><img src="../images/logo.png" height="90" alt="logo"></a>
		</div>
	</div>

	<div id="topnav">
		<div id="topnavtxt">
			<a href="index.php"> Dashboard </a>
			<a href="add_post.php">Add Post</a>
			<a href="add_category.php">Add Category</a>
			<a class="pull-right blog" href="http://localhost/m2">Visit Blog</a>
		</div>
	</div>
	<?php if(isset($_GET['msg'])) : ?>
		<div class="alert alert-success">
			<?php echo htmlentities($_GET['msg']); ?>
		</div>
	<?php endif; ?>
