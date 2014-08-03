<?php
/* Setup File: */

# Database Connection Here...
$dbc = mysqli_connect('localhost','Dev','eli1226981994','atomcms') OR die('Could not connect because: '.mysqli_connect_error());

$site_title = 'AtomCMS 2.0';

if(isset($_GET['page'])) {
	
	$pageid = $_GET['page']; //Set $pageid to equal the value given in the URL
	
} else{
	
	$pageid = 1; // Set $pageid equal to 1 or the Home Page.
	
}

#page setup
$q = "SELECT * FROM tbl_pages WHERE id = $pageid";
$r = mysqli_query($dbc, $q);
	
$page = mysqli_fetch_assoc($r);
	

?>
