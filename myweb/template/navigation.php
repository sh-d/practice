<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav">
			<!--<li <?php if($pageid==1)echo 'class="active"'?>><a href="?page=1">Home</a></li>
			<li <?php if($pageid==2)echo 'class="active"'?>><a href="?page=2">About us</a></li> -->
			
			<?php	nav_main($dbc, $pageid);?>
			
			<li><a href="#">Contact</a></li>
			<li><a href="#">FAQ</a></li>
			<li><a href="?logout"><?php echo $_SESSION["UserName"];
				 if($_SESSION["AdminStatus"]=="Yes") {
					echo ' | Admin';
				}?></a></li>
		</ul>
	</div>
</nav><!-- End Nav -->