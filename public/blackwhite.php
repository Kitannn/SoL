<?php

	include 'db/functions.php';
	require_once('db/config.php');
	session_start();

	// Connect to server and select database.
	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)or die("cannot connect, error: ".mysql_error());
	mysql_select_db(DB_DATABASE)or die("cannot select DB, error: ".mysql_error());
	$tbl_name="members"; // Table name
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Black &amp; White | Sliver of Light Photography</title>
<link rel="stylesheet" href="style/base.css" media="screen">
<link rel="stylesheet" href="style/baseprint.css" media="print">
<link rel="icon" type="image/png" href="images/favicon.png">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>
<link rel="stylesheet" href="style/slimbox2.css" type="text/css" media="screen" />
</head>

<body>
<div id="wrapper">

<!-- logo -->
<a href="index">
	<div id="logo">
		<p>Logo</p>
	</div>		
</a>

<!-- header -->
<div id="header">
	<svg id="title" xmlns="http://www.w3.org/2000/svg" pointer-events="none"></svg>
		<a href="index">
			<div id="titleLink">
				Home
			</div>
		</a>
</div>
<?php
	include_once "db/welcome_header.php";
?>

<!-- nav -->
<?php
	include_once "navbar.php";
?>

<!-- content -->
<div id="content">
	<h2>Black & White</h2>
	<span id="gallerynav">
		[ <a href="people.php">People</a> ] &nbsp;&nbsp;
		[ <a href="places.php">Places</a> ] &nbsp;&nbsp;
		[ <a href="nature.php">Nature</a> ]
	</span>
	<div id="gallerycontainer">
		<a href="gallery.php"><div class="trans1" id="backButton"><div class="trans1"><span class="arrows">&lt;&lt;&lt;</span> Back</div></div></a>
		
		<a href="images/blackwhite/bw001.jpg" data-lightbox="blackwhite" title="Up Above the Clouds | Grouse Mountain">
			<img src="images/blackwhite/thumb_bw001.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw002.jpg" data-lightbox="blackwhite" title="Black Tusk | Whistler">
			<img src="images/blackwhite/thumb_bw002.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw003.jpg" data-lightbox="blackwhite" title="Moon rise | Whistler">
			<img src="images/blackwhite/thumb_bw003.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw004.jpg" data-lightbox="blackwhite" title="Whistler">
			<img src="images/blackwhite/thumb_bw004.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw005.jpg" data-lightbox="blackwhite" title="Whistler">
			<img src="images/blackwhite/thumb_bw005.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw006.jpg" data-lightbox="blackwhite" title="Whistler">
			<img src="images/blackwhite/thumb_bw006.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw007.jpg" data-lightbox="blackwhite" title="Alexander Falls | Callahan Valley (near Whistler)">
			<img src="images/blackwhite/thumb_bw007.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw008.jpg" data-lightbox="blackwhite" title="Gnarly">
			<img src="images/blackwhite/thumb_bw008.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw009.jpg" data-lightbox="blackwhite" title="Iona Beach">
			<img src="images/blackwhite/thumb_bw009.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw010.jpg" data-lightbox="blackwhite" title="A Lone Tree | Vanier Park">
			<img src="images/blackwhite/thumb_bw010.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw011.jpg" data-lightbox="blackwhite" title="Come Into My Parlour">
			<img src="images/blackwhite/thumb_bw011.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw012.jpg" data-lightbox="blackwhite" title="Dunkin Duck">
			<img src="images/blackwhite/thumb_bw012.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw013.jpg" data-lightbox="blackwhite" title="Astoria, OR">
			<img src="images/blackwhite/thumb_bw013.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw014.jpg" data-lightbox="blackwhite"  title="Vanier Park">
			<img src="images/blackwhite/thumb_bw014.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw015.jpg" data-lightbox="blackwhite"  title="">
			<img src="images/blackwhite/thumb_bw015.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw016.jpg" data-lightbox="blackwhite" title="Mulkiteo Ferry Terminal, WA">
			<img src="images/blackwhite/thumb_bw016.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw017.jpg" data-lightbox="blackwhite" title="Lion's Gate Bridge(long exposure)">
			<img src="images/blackwhite/thumb_bw017.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw018.jpg" data-lightbox="blackwhite" title="Lion's Gate Bridge">
			<img src="images/blackwhite/thumb_bw018.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw019.jpg" data-lightbox="blackwhite" title="Wired Up">
			<img src="images/blackwhite/thumb_bw019.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw020.jpg" data-lightbox="blackwhite" title="Mop Head">
			<img src="images/blackwhite/thumb_bw020.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw021.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw021.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw022.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw022.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw023.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw023.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw024.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw024.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw025.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw025.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
		<a href="images/blackwhite/bw026.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw026.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
	    <a href="images/blackwhite/bw027.jpg" data-lightbox="blackwhite" title="">
			<img src="images/blackwhite/thumb_bw027.jpg" width="120" height="120" class="thumb trans1" alt="Black & White Gallery"></a>
	</div>
	
</div>
<!-- footer -->
<div id="footer">
	<p>Copyright &copy; 2014 Sliver of Light Photography</p>
</div>

</div><!-- wrapper -->
</body>
</html>