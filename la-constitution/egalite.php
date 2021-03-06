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
	        <h1>L'Égalité</h1>
          <form id="FormWithALink0" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Les distinctions sociales ne peuvent être <a href="javascript:;">fondées</a> que sur l’utilité commune.” (Art. 1 de la Déclaration des Droits de l’Homme et du Citoyen). A la relecture de la <a href="javascript:;">seconde</a> phrase de cet article, nous avons mesuré à quel point notre projet s’inscrivait dans un principe de justice fondamental. Si les “<a href="javascript:;">distinctions sociales</a>” ne sont pas le
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink0').submit();"> reflet </a>
              d’une contribution à “l’utilité commune”, alors elles sont <a href="javascript:;">illégitimes</a>.  En favorisant l’émancipation et la réussite de chacun selon son potentiel et ses aspirations, indépendamment de ses origines et de sa <a href="javascript:;">naissance</a>, nous voulons rappeler le sens de cet Article 1, qui pose l’exigence de justice et d’égalité comme le socle préalable de notre modèle républicain.
            </p>
            <input type="hidden" name="SubmitHidden0"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden0'])) {$_SESSION['ddhc_user']['0'] = 1;}?>
          <form id="FormWithALink1" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Article pratiquement recopié de <a href="javascript:;">Rousseau</a>. Puisque les députés représentent le peuple tout entier (et non leur circonscription, la majorité qui les a élus ou le parti dont ils portent les couleurs, voir ci-dessus article 3 de la DDHC 89), les lois qu'ils votent sont forcément l'expression de la volonté générale - et pas seulement l'expression de la volonté de la majorité. La loi doit tenir compte de l'<a href="javascript:;">opinion minoritaire</a> et les gouvernants ne peuvent se prévaloir de leur majorité, même large, pour opprimer les groupes minoritaires. C'est ce qui oppose les <a href="javascript:;">Etats</a> de
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink1').submit();"> droit </a>
              au Troisième Reich, et la République à la simple <a href="javascript:;">démocratie</a>. L'article réaffirme l'égalité devant la loi et en déduit l'<a href="javascript:;">admissibilité</a> de tous les citoyens aux fonctions publiques, selon leur mérite. N'<a href="javascript:;">importe</a> quel citoyen a le droit de briguer n'importe quel poste de <a href="javascript:;">fonctionnaire</a>, ou de se présenter à n'importe quelle élection : les places seront attribuées sur concours ou selon le résultat des élections.
            </p>
            <input type="hidden" name="SubmitHidden1"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden1'])) {$_SESSION['ddhc_user']['5'] = 1;}?>
          <form id="FormWithALink2" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Les citoyens peuvent participer à l'<a href="javascript:;">élaboration</a> de la loi de finance. Il y a même de quoi se demander, avec cet <a href="javascript:;">article</a>, si les citoyens ne seraient pas fondés à refuser de payer une fraction de l'impôt au motif de l'<a href="javascript:;">illégalité</a> de l'emploi de certains fonds publics. Par exemple, les habitants d'une municipalité convaincue de corruption peuvent-ils refuser de payer la <a href="javascript:;">fraction</a> d'impôts locaux correspondant au
             <a href="javascript:ShowMessage();" onclick="ShowMessage();document.getElementById('FormWithALink2').submit();">pourcentage</a>
             des pots-de-vin dans le budget municipal ? N'ont-ils pas, en effet, "le droit [...] d'en déterminer la quotité" ? La phrase ne présente aucune ambiguité.
          </p>
          <input type="hidden" name="SubmitHidden2"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden2'])) {$_SESSION['ddhc_user']['13'] = 1;}?>
          <form id="FormWithALink3" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Article d'interprétation difficile : il existe assurément des dictatures qui présentent une "Constitution" écrite - ainsi l'<a href="javascript:;">URSS</a> de Staline. Il faut ici entendre "Constitution" au
             <a href="javascript:ShowMessage();" onclick="ShowMessage();document.getElementById('FormWithALink3').submit();">sens</a>
             de "pouvoir politique légitime". Cet article recevra <a href="javascript:;">explication</a> dans le cours sur la justice.
          </p>
          <input type="hidden" name="SubmitHidden3"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden3'])) {$_SESSION['ddhc_user']['15'] = 1;}?>
      </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
