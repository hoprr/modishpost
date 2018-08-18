<!doctype html>
<html lang="en">
<head>
	<title> Modish Post </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
			
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/bs.css">
	<link rel="stylesheet" type="text/css" href="fa/all.css">
	<link rel="stylesheet" type="text/css" href="css/articles.css">
	<link rel="stylesheet" type="text/css" href="css/txt.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="image_src" href="<?php echo $post['image']; ?>">

	<meta property="og:image" content="<?php echo $post['image']; ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://modishpost.orgfree.com/post.php?id=<?php echo urlencode($post['id']); ?>" />
	<meta property="og:title" content="Modish Post" />
	<meta property="og:description" content="<?php echo $post['description']; ?>" />

	<meta name="description" content="<?php echo $post['description']; ?>">
	<meta name="keywords" content="<?php echo shortenText($post['tags']); ?>">
	<meta name="author" content="<?php echo $post['author']; ?>">

</head>
<body>
	<div id="header">
		<div class="logo">
		<a href="index.html"><img src="images/logo.png" height="90" alt="logo"></a>
		</div>
	</div>

	<div id="topnav">
		<div id="topnavtxt">
			<a href="index.php"> Home </a>
			<a href="posts.php">All Articles</a>
		</div>
	</div>
