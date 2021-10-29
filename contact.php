<?php
	$pseudo = "FRIGOND";
	$email = "tristanlefort6@gmail.com";
	$age = 15;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>FRIGOND.Shop</title>
	<link rel="stylesheet" href="stylescontact.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<header>
    	    <img class="logo" src="img/logo_redimentionné.png" alt="logo">
    <nav>
      <ul class="nav__links">
         <li><a href="index.html">Home</a></li>
         <li><a href="config.html">Config</a></li>
         <li><a href="minecraft.html">Minecraft</a></li>
         <li><a href="web.html">Site Web</a></li>
         <li><a href="info.html">About</a></li>
      </ul>
    </nav>
    <a class="cta" href="contact.html"><button>Contact</button></a>
    </header>

	
	<main>

		<h2>Information</h2>

		<p>Pseudo : <?= $pseudo; ?></p>
		<p>  </p>
		<p>Email : <?= $email; ?></p>
		<p>  </p>
		<p>Age : <?= $age; ?></p>
		<p>  </p>

	</main>










    <footer>
        <div class="footer-content">
            <h3>FRIGOND.Shop</h3>
            <p>Retrouvez nous sur les réseaux sociaux !</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2021 FRIGOND.Shop   Develop by <span>FRIGOND</span>. Draw by <span>FRIGOND</span> and <span>Fragmentori</span> </p>
        </div>
    </footer>







	
</body>
</html>