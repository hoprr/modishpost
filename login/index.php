<?php include '../includes/lheader.php' ?>
<?php 
	// Start the Session
	session_start();
	 $msg = '';
	 $_SESSION['logged'] = false;
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'admin' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'admin';
                  $_SESSION['logged'] = true;

                }else {
                  $msg = 'Wrong username or password';
               }
            }

	if ($_SESSION['logged'] == true) {
      header('Location: ../admin');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Admin Panel</title>
</head>
<body>
   <div class="container col-sm-2">
        <form class = "form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <p style="padding: 10px; color: rgba(255,20,0,1); "><?php echo $msg; ?></p>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required><br><br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
      </div> 
</body>
</html>