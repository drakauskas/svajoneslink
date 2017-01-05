<?php 

define ("FILEREPOSITORY","images/photosforgallery/"); 

?>

<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<title>Svajonės link</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header 
			<header id="header" class="alt">
				<div class="inner">
					<h1>Svajonės link</h1>
					<p><a href="http://www.drakauskas.lt/Projektai/svajoneslink/">Galimybė įgyvendinti svajonę – štai kas gyvenimą daro įdomų. P. Coelho </a></p>
				</div>
			</header>
		-->
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main">
						<span class="icon fa-diamond major"></span>
						<h3> 	
						<?php

						/* Set a constant */
							
							/* Make sure that the file was POSTed. */
							if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) 
								{

									/* Was the file a PDF? */
									if ($_FILES['classnotes']['type'] != "image/jpeg") {
									echo "<p> Failo formatas turi būti jpeg </p>"; } 
									else {
									/* move uploaded file to final destination. */ $name = $_FILES['classnotes']['name'];
		        					$result = move_uploaded_file($_FILES['classnotes']['tmp_name'], FILEREPOSITORY.$name);
									if ($result == 1) echo "<p>Failas sėkmingai įkeltas .</p>"; else echo "<p> Problema įkeliant failą </p>";
									} #endIF
								} #endIF 
							?>
					</h3>

					<h3> <a href="msgallery.php"> Grįžti atgal </a> </h3>
					</section>
				<!-- Footer -->

				include ("footer.php");

				<!-- end of Footer -->
			</div>
	</body>
</script>
</html>

