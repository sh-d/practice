<?php 
	include('config/setup.php');
	
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title><?php echo 'Login'.' | '.$site_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
			include('config/css.php'); 
			include('config/js.php');
		?>
	</head>
	<body background="images/new_year_background.png">
		 <div class="container">

      <form class="form-signin" action="index.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="emailid">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
		
	</body>
</html>