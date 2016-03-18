<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['sign']) && $_POST['sign'] == 'sign') {
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
  // on teste les deux mots de passe
  if ($_POST['pass'] != $_POST['pass_confirm']) {
    $erreur = 'Les 2 mots de passe sont différents.';
  }
  else {
    $base = mysql_connect ('localhost', 'login', 'password');
    mysql_select_db ('test', $base);

    // on recherche si ce login est déjà utilisé par un autre membre
    $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"';
    $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
    $data = mysql_fetch_array($req);

    if ($data[0] == 0) {
    $sql = 'INSERT INTO membre VALUES("", "'.mysql_escape_string($_POST['login']).'", "'.mysql_escape_string(md5($_POST['pass'])).'")';
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

    session_start();
    $_SESSION['login'] = $_POST['login'];
    header('Location: home.php');
    exit();
    }
    else {
    $erreur = 'Un membre possède déjà ce login.';
    }
  }
  }
  else {
  $erreur = 'Au moins un des champs est vide.';
  }
}
?>
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
				<h3>Inscription à l'espace membre </h3>
			</div>
		</div>
	</div>
	<!-- special -->
	<!-- quick -->
	<div class="quick">
		<div class="container">
			<div class="col-md-4 col-md-offset-4">
        <form action="sign.php" method="post">
        <span>Login : </span><input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
        <span>Mot de passe :</span> <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
        <span>Confirmation du mot de passe :</span> <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"><br />
        <input type="submit" name="inscription" value="Inscription">
        </form>
        <?php
        if (isset($erreur)) echo '<br />',$erreur;
        ?>
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
