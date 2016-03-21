<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
		<!--[if lt IE 9]>
		<script src="http://github.com/aFarkas/html5shiv/blob/master/dist/html5shiv.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="style.css" />
        <title>La Leche League</title>
    </head>
		
    <body>
		<div class="cadre">
			<header>
				<?php include("menu_superieur.php"); ?>
				<?php include("logo.php"); ?>
				<?php include("banniere.php"); ?>
			</header>
	
			<aside>
				<?php include("menu_droite.php"); ?>
			</aside>
			
			<section>	
				<h1>Qui ?</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt finibus risus sed lacinia. 
				Etiam ultrices ante lectus, vitae pellentesque turpis iaculis rhoncus. 
				Sed vitae maximus lacus. Mauris dignissim fringilla suscipit. Nam id nibh ut nulla euismod varius in et ante. 
				Cras vestibulum, magna et vestibulum mattis, orci ligula porttitor turpis, vitae egestas dui sapien vitae nisi. 
				Aliquam suscipit, eros id ultrices consequat, quam nulla congue sem, in bibendum neque lectus non ante. Maecenas in varius dolor. </p>
			</section>
		
			<footer>
				<?php include("footer.php"); ?>
			</footer> 
		</div>
    </body>
</html>