<!DOCTYPE HTML>
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)


-->

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("DIRFORPHOTOS", 'images/photosforgallery/');

?>

<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
 		<script src="https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.min.js"></script>


 		<!-- 
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		 -->
		<title>Svajonės link</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header --> 
			<header id="header" class="alt">
				<div class="inner">
					<h1>Svajonės link</h1>
					<p><a href="http://www.drakauskas.lt/Projektai/svajoneslink/">Galimybė įgyvendinti svajonę – štai kas gyvenimą daro įdomų. P. Coelho </a></p>
				</div>
			</header>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fa-diamond major"></span>
						<h2> Mano įstabiausių nuotraukų galerija </h2>	
						<h3> Atsitiktinai sustabdytos akimirkos  </h3>

						<div id="masonry-grid">
    						<div class="gutter-sizer">   </div>
	    					<?php

		    					if ($handle = opendir(DIRFORPHOTOS)) { 

								  
								    while (false !== ($entry = readdir($handle))) {

								        if ($entry != "." && $entry != "..") {

		    						
		    							 echo '<div class="grid-item"> <img src="'. DIRFORPHOTOS . $entry . '"/></div>';
									
								        };
								 };
							closedir($handle);
							};
							
							?>
						</div>
					</section>

					<section id="intro" class="main">

						

						<ul id="uploadimgc" class="adddreamul">
							<li id="addnewimage" class="button" > Įkelti nuotrauką </li>
						</ul>

						<div id="getfile">
							<form action="uploadmanager.php" enctype="multipart/form-data" method="post"> 
								Failo pavadinimas	: <br /> <input type="file" name="classnotes" value="" />	<br /> 		
							<p>					   
								<br/><input type="submit" name="submit" value="Įkelti nuotrauką" />
							</p>
						</form>
						<div>
						<script> $( "#getfile" ).hide(); </script>
					</section>
				<!-- Footer -->

					<?php include("footer.php") ?>

				<!-- end of Footer -->
				 
			</div>
	<script>	
				// jQuery
				var $container = jQuery('#masonry-grid');
				// initialize
				$container.masonry({
	  				columnWidth: 200,
	  				itemSelector: '.grid-item'
				});
			$( "#addnewimage" ).click(function hideform() {
																$( "#getfile" ).toggle( "slow", function ani() { }); 
																$( "#uploadimgc" ).hide(); 
															});
	</script>
	</body>
</script>
</html>