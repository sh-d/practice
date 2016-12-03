<?php 
	session_start();
	include('config/setup.php');
	if(isset($_POST["emailid"]) and isset($_POST["password"])){
		$User_Details = login($dbc,$_POST["emailid"],$_POST["password"]);
		$_SESSION["UserName"]= $User_Details['FirstName'];
		$_SESSION["AdminStatus"]= $User_Details['Admin'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title><?php echo $page['title'].' | '.$site_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
			include('config/css.php'); 
			include('config/js.php');
		?>
	</head>
	<body>
		
		<?php include(D_Template.'/navigation.php');?>
		
		<div class="container">
			<h1><?php echo $page['header']; ?></h1>
			<?php echo $page['body_formatted']; ?>
		</div>
		
		<?php include(D_Template.'/footer.php') ;?>
	</body>
</html>