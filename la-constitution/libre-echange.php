<?php
session_start();
// Si le tableau $_POST existe alors le formulaire a été envoyé
?>
<html>
<head>
  <title>ACCUEIL</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/starter-template.css">
</head>
<body>
  <script>
    function ShowMessage(){
      alert("Indice trouvé !");
    }
  </script>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index.php">DDHC-GAME</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index.php">DDHC-GAME</a></li>
            <li><a href="/nous-contacter.php">Nous Contacter</a></li>
            <li><a href="/a-propos.php">A Propos</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Notre Constitution
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="/la-constitution/liberte.php">Liberté</a></li>
					<li><a href="/la-constitution/egalite.php">Égalité</a></li>
					<li><a href="/la-constitution/fraternite.php">Fraternité</a></li>
					<li><a href="/la-constitution/propriete.php">Propriété</a></li>
					<li><a href="/la-constitution/libre-echange.php">Libre-Échange</a></li>
				</ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container">
	     <div class="starter-template">
	        <h1>Le Libre-Échange</h1>
          <form id="FormWithALink0" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La foi, aux yeux de la Déclaration, <a href="javascript:;">relève de la vie privée</a>, celle-là même que garantit l'article 2. Aux yeux du droit, la religion s'assimile à un hobby, comme la pêche à la ligne ou les collections de timbres. On peut croire, et
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink0').submit();">  même pratiquer</a>
              avec ferveur, à condition de ne pas troubler l'ordre public : un <a href="javascript:;">préfet</a> peut ainsi autoriser une procession, par exemple, exactement de la même manière qu'il autoriserait une <a href="javascript:;">manifestation</a> de la CGT.
            </p>
            <input type="hidden" name="SubmitHidden0"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden0'])) {$_SESSION['ddhc_user']['9'] = 1;}?>
          <form id="FormWithALink1" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La liberté de la presse, si précieuse pour la transmission des opinions et la vivacité du débat politique, de même que la liberté d'expression, si souvent brandie à mauvais escient, connaissent en <a href="javascript:;">République</a> des bornes précises (autre différence d'avec la démocratie, où n'importe quel âne peut revendiquer le droit de braire plus fort que son voisin). En France, <a href="javascript:;">l'apologie</a> de crimes de guerre ou de crimes contre l'humanité (article 24 de la loi sur la liberté de la presse), la provocation à la rebellion ou la provocation au
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink1').submit();"> suicide </a>
              constituent des délits réprimés par la loi. On <a href="javascript:;">commence</a> par écarter du débat politique les <a href="javascript:;">fous sanguinaires</a>, les fanatiques de toutes confessions et <U>les enragés</U> qui se croient très "purs" sous prétexte qu'ils "ne transigeront pas", puis on peut délibérer entre personnes pondérées et responsables. Censure ? Sans doute ; mais du moins pose-t-elle une limite inférieure au <a href="javascript:;">débat politique</a>, lequel ne peut pas, en principe, déraper vers le niveau du "Jerry Springer Show".
            </p>
            <input type="hidden" name="SubmitHidden1"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden1'])) {$_SESSION['ddhc_user']['10'] = 1;}?>
          <form id="FormWithALink2" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Aucun agent public n'est au-dessus du contrôle des simples citoyens. Même le Président a des comptes à rendre à la Nation quant à ses objectifs et ses méthodes dans l'exercice de ses fonctions.
             <a href="javascript:ShowMessage();" onclick="ShowMessage();document.getElementById('FormWithALink2').submit();">.</a>
          </p>
          <input type="hidden" name="SubmitHidden2"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden2'])) {$_SESSION['ddhc_user']['14'] = 1;}?>
      </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
