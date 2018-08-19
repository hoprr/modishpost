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
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">		
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="stylesheet" type="text/css" href="../css/bs.css">
	<link rel="stylesheet" type="text/css" href="../fa/all.css">
	<link rel="stylesheet" type="text/css" href="../css/articles.css">
	<link rel="stylesheet" type="text/css" href="../css/txt.css">
	<link rel="stylesheet" type="text/css" href="../css/medium-editor.css">
	<link rel="stylesheet" type="text/css" href="../css/themes/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

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
		<a href="index.php"><img src="../images/logo.png" height="90" alt="logo"></a>
		</div>
	</div>

	<nav id="topnav-admin" style="z-index: 998;">
		<div id="topnavtxt">
			<a href="index.php" id="dashboard"> <i class="fas fa-home"></i>&nbsp; Dashboard </a>
			<a class="pull-right blog text-danger" href="../login">Logout</a>
			<a class="pull-right text-primary d-none d-sm-block" href="../" target="blank">Visit Blog</a>
		</div>
	</nav>
	<div class="container-fluid row" style="z-index: 997; margin-top: 20px;">
		<nav class="col-md-2 d-none d-xl-block bg-light sidebar sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item"><a href="add_post.php" class="nav-link text-secondary"><i class="fas fa-newspaper"></i> &nbsp;&nbsp;Add Post</a></li>
					<li class="nav-item"><a href="add_category.php" class="nav-link text-secondary"><i class="fas fa-tags"></i> &nbsp;&nbsp;Add Category</a></li>					
				</ul>
		</nav>

