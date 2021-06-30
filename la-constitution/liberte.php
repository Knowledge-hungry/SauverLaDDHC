<?php
session_start();
// Si le tableau $_POST existe alors le formulaire a été envoyé
?>
<html>
<head>
  <title>ACCUEIL</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/starter-template.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DDHC-GAME</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">DDHC-GAME</a></li>
            <li><a href="nous-contacter.php">Nous Contacter</a></li>
            <li><a href="a-propos.php">A Propos</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Notre Constitution
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="la-constitution/liberte.php">Liberté</a></li>
					<li><a href="la-constitution/egalite.php">Égalité</a></li>
					<li><a href="la-constitution/fraternite.php">Fraternité</a></li>
					<li><a href="la-constitution/propriete.php">Propriété</a></li>
					<li><a href="la-constitution/libre-echange.php">Libre-Échange</a></li>
				</ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
	     <div class="starter-template">
	        <h1>Bootstrap starter template</h1>
          <p>Si tu as lu le texte clique sur le bouton</p>
          <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
            <input type="submit" name="Submit" value="OK">
          </form>
          <?php
          if (isset($_POST['Submit'])) {
            $_SESSION['ddhc_user']['0'] = 1;
          }
          ?>
      </div>
</div>
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
