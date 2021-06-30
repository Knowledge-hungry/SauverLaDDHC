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
	        <h1>Bootstrap starter template</h1>
          <p>INDICE ARTICLE 2</p>
          <p>La protection de la vie privée a été affirmée en 1948 par la déclaration universelle des droits de<form id="FormWithALink0" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
              <a href="javascript:;" onclick="document.getElementById('FormWithALink0').submit();"> l’Homme des Nations Unies</a> (art 12)
            « Nul ne sera l'objet d'immixtions arbitraires dans sa vie privée, sa famille, son domicile ou sa correspondance, ni d'atteintes à son honneur et à sa réputation. Toute personne a droit à la protection de la loi contre de telles immixtions ou de telles atteintes. »</p>
            <input type="hidden" name="SubmitHidden0"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden0'])) {$_SESSION['ddhc_user']['1'] = 1;}?>
          <p>INDICE ARTICLE 3</p>
          <form id="FormWithALink1" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La souveraineté se définit, en droit, comme la détention de l’autorité suprême, c’est-à-dire d’un pouvoir absolu (dont tous dépendent) et inconditionné (qui ne dépend de qui que ce soit). Dans les régimes
              <a href="javascript:;" onclick="document.getElementById('FormWithALink1').submit();"> despotiques</a>, la souveraineté est le plus souvent détenue par un seul homme. Dans les démocraties, elle est détenue par le peuple, constitué en un corps politique, la Nation : on parle dès lors de souveraineté nationale. Dans ce cadre, la souveraineté ne peut être exercée par un despote, ni divisée entre plusieurs fractions du peuple : elle est détenue par un être collectif et indivisible, distinct des individus qui la composent. Mais les contraintes de l’exercice du pouvoir impliquent que cette souveraineté soit déléguée : le peuple, bien que constitué en corps politique, ne peut en effet délibérer directement sur les affaires publiques. Cette mission est donc confiée à des représentants élus, dont les décisions constituent l’expression de la volonté générale.</p>
            <input type="hidden" name="SubmitHidden1"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden1'])) {$_SESSION['ddhc_user']['2'] = 1;}?>
      </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
