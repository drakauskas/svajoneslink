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


require("assets/pdo/pdo-database.php");

$database = new Database();

$sql = "SELECT lastid FROM settings WHERE id=1";
$database->query ($sql);
$sqlrow = $database->single();   				
$lastdreamid = $sqlrow['lastid'];

?>

<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		<title>Svajonės link</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header 	-->
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
						<h2> Mano svajonių žurnalas </h2>
						<p> Įvesti svajonę </p>
						<input type="text" size="10" class="tr" id="onedream" name="adddreamtext"/> <br />
						<ul class="adddreamul">
							<li id="adddreamli" class="button" > Pridėti </li>
						</ul>
						
						<h3> Svajonių sąrašas  </h3>
						<table id="dreamlist">
							<?php

								$sql = "SELECT id, svajone FROM svajoniusarasas";
 								$database->query ($sql);
								$results = $database->resultset();
								
								foreach ($results as $row)
								{
									echo '<tr id="dreamrow' . $row['id'] . '"> <td> <input type="checkbox" onclick="hidedreamrow(' .$row['id'] .')">' . '<span id="dreamspan' . $row['id'] . '">' . $row['svajone'] . "</span></td></tr> ";
								};
							?>
							
						</table>
					</p>
					</section>

				<!-- Items -->
					<section class="main items">
						<article class="item">
							<header>
								<a href=""><img src="images/pic01.jpg" alt="" /></a>
								<h3> Nuotraukų rinkinys </h3>
							</header>
							<p> Pačių įstabiausių nuotraukų rinkinys </p>
							<ul class="actions">
								<li><a href="msgallery.php" class="button">Daugiau</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic02.jpg" alt="" /></a>
								<h3>Išpildytų svajonių sąrašas</h3>
							</header>
							<p> Sąrašas svajonių, kurias jau išpildžiau. </p>
							<ul class="actions">
								<li><a href="http://www.drakauskas.lt/Projektai/svajoneslink/fullfilledreams.php" class="button big"> Peržiūrėti </a></li>
							</ul>
						</article>
						<!-- <article class="item">
							<header>
								<a href="#"><img src="images/pic03.jpg" alt="" /></a>
								<h3>Lorem massa nulla</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic04.jpg" alt="" /></a>
								<h3>Ipsum sed tempus</h3>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
							<ul class="actions">
								<li><a href="#" class="button">More</a></li>
							</ul>
						</article> 
					-->
					</section>

				<!-- CTA -->
					<section id="cta" class="main special">
						“Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do. 
						So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover.” 
						― H. Jackson Brown Jr., P.S. I Love You
						<!-- <ul class="actions">
							<li><a href="#" class="button big">Get Started</a></li>
						</ul>
					-->
					</section>

				<!-- Main -->
				<!--
					<section id="main" class="main">
						<header>
							<h2>Lorem ipsum dolor</h2>
						</header>
						<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eget neque id metus gravida tristique ac quis erat. Aenean quis aliquet sem. Ut ut elementum sem. Suspendisse eleifend ut est non dapibus. Nulla porta, neque quis pretium sagittis, tortor lacus elementum metus, in imperdiet ante lorem vitae ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</section>
				-->

				
				<?php include ("footer.php");
				?>



			</div>
	</body>
	<script type="text/javascript" charset="utf-8">
		var lasdreamidjs = <?php echo $lastdreamid; ?>;
		$( document ).ready(

			$("#adddreamli").click

			(

			function addonedream() 
				{
	    	
	    		
	    		lasdreamidjs++;
 	    		$("#dreamlist").append('<tr id="dreamrow'+lasdreamidjs+'"> <td> <input type="checkbox" onclick="hidedreamrow('+lasdreamidjs+')"> <span id="dreamspan'+lasdreamidjs+'">'+document.getElementById("onedream").value +'</span> </td></tr>'); 
	    		
				
	    				
	    			$.ajax(	{	contentype : 'text/html;charset=UTF-8',
		                    	type: "POST",
		                    	url: 'insertdb.php',
		                    	data: { dream : document.getElementById('onedream').value },
		                    	success: function(data)
										                    {
										                        if (document.getElementById('onedream').value == "")
										                        		{  alert("Tuščia eilutė.!");  	}
										                        else 	{ $('#onedream').val("");		}
										                    }
                } 					
                			)
	    		

				}

			)			
);
function hidedreamrow ($dreamrowid) {	$('#dreamrow'+$dreamrowid).fadeOut();

										$.ajax(		{	contentype : 'text/html;charset=UTF-8',
								                    	type: "POST",
								                    	url: 'insertdb_ipsv.php',
								                    	data: { dream : document.getElementById('dreamspan'+$dreamrowid).innerHTML,
								                    			deleterowid : $dreamrowid},
								                    	success: function(data) { }
                									}
                								)
									};
</script>
</html>

<?php 

$database=null; ?>