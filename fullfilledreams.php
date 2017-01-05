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

require_once ("assets/pdo/pdo-database.php");

$database = new Database();

$sql = "SELECT id, svajone FROM ispildytossvajones";

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
						<h2> Mano svajonių žurnalas </h2>	
						<h3> Išpildytų svajonių sąrašas  </h3>
						<table id="dreamlist">
							<?php
 								$database->query ($sql);

								$results = $database->resultset();
								
								foreach ($results as $row)
								{
									echo '<tr> <td> ' . $row['svajone'] . " </td></tr> ";
								};
							?>
						</table>
					</section>
				<!-- Footer -->
					
					<?php include("footer.php") ?>
				
				<!-- end of Footer  -->
			</div>
<?php

$database=null;

?>
	</body>
</script>
</html>