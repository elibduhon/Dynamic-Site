<?php include('C:/xampp/htdocs/series/dynamic/AtomCMS/config/setup.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['title'].' | '.$site_title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include ('C:/xampp/htdocs/series/dynamic/AtomCMS/config/css.php'); ?>
		
		<?php include('C:/xampp/htdocs/series/dynamic/AtomCMS/config/js.php'); ?>
		
	</head>
	
<body>
		
	<div id="wrap">
				
		<nav class="navbar navbar-default" role="navigation">
			
			<div class="container">
				
			<ul class="nav navbar-nav">
					<li<?php if($pageid == 1 ) { echo ' class="active"'; } ?> ><a href="?page=1">Home</a></li>
					<li<?php if($pageid == 2 ) { echo ' class="active"'; } ?> ><a href="?page=2">About Us</a></li>
					<li<?php if($pageid == 3 ) { echo ' class="active"'; } ?> ><a href="?page=3">FAQ</a></li>
					<li<?php if($pageid == 4 ) { echo ' class="active"'; } ?> ><a href="?page=4">Contact</a></li>
				</ul>
				
			</div>
			
		</nav><!-- END nav -->
		
		<div class="container">
			
			<h1><?php echo $page['header']; ?></h1>
			
			<p><?php echo $page['body']; ?></p>
		</div>
	
	</div><!-- End Wrap-->
		
		<footer id="footer">
			
			<div class="container">
				<p>This is my footer.</p>
			</div>
			
		</footer><!-- End Footer -->
		
</body>
	
</html>
