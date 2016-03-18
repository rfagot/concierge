<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Motel a Hotel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Motel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600' rel='stylesheet' type='text/css'>
   <!--//webfonts-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
function updatepicture(pic){
	document.getElementById("image").setAttribute("src", pic);
}

</script>
</head>
<body>
<!-- banner -->
	<div class="banner-h">
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1><a href="index.html">Motel</a></h1>
				</div>
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!--/.navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="rooms.html">Devenir un Hôte </a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="signin.html"><span class="glyphicon glyphicon-sur"></span>Sign In</a></li>
							</ul>
						</div>
						<!--/.navbar-collapse-->
					</nav>
					<div class="clearfix"> </div>

			</div>
		</div>
	</div>
	<div class="special">
		<div class="container">
			<div class="spe-info">
				<h3>Devenir Hôter</h3>
			</div>
		</div>
	</div>
	<!-- special -->
	<!-- quick -->
	<div class="quick">
		<div class="container">
			<div class="col-md-4 col-md-offset-4">
				<form id="file" action="upload.php" method="post" enctype="multipart/form-data" target="iframe">
	        <input type="file" id="file" name="file" />
	        <input type="submit" name="submit" id="submit" value="upload File" /><br>
	      </form>

	      <p id="message">Upload message will go here</p>
	      <!-- <img style="min-height:120;min-width:200;max-height:120px;" id="image" /><br> -->

	      <iframe style="display:none;" name="iframe"></iframe>

	      <form class="traiter" action="traitement.php" method="post">
	        <span>Nom et Prénom</span><input type="text" name="name" value=""><br>
	        <span>Adresse</span><input type="text" name="adresse" value=""><br>
	        <span>Code postal</span><input type="text" name="code" value=""><br>
	        <span>Pays</span><input type="text" name="pays" value=""><br>
					<span>Téléphone</span><input type="text" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"><br>
					<span>E-mail</span><input type="email" name="email" value=""><br>
					<img style="min-height:120;min-width:200;max-height:120px;" id="image" /><br>
	        <span>Descriptive</span><textarea name="name" rows="8" cols="40"></textarea><br>
	        <input type="submit" value="Envoyer"><input type="reset" value="Reinitialiser">
	      </form>
			</div>
		</div>
	</div>
	<!-- quick -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-2 deco">
				<h4>Links</h4>
				<li><a href="#">Qui Sommes-Nous ?</a></li>
				<li><a href="#">Mentions Légales </a></li>
				<li><a href="#">Conditions D'Utilisation </a></li>
			</div>
			<div class="col-md-2 deco">
				<h4>Social</h4>
				<div class="soci">
					<li><a href="#"><i class="f-1"> </i></a></li>
					<li><a href="#"><i class="t-1"> </i></a></li>
					<li><a href="#"><i class="g-1"> </i></a></li>
				</div>
			</div>
			<div class="col-md-3 cardss">
				<h4>Paiement Sécurisé</h4>
				<li><i class="visa"></i></li>
				<li><i class="ma"></i></li>
				<li><i class="paypal"></i></li>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
			<div class="container">
				<p>© 2015 Motel. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	<!-- footer -->
</body>
</html>
