<?php
session_start();
$ANSW0=1762;
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
  <script>
    function ShowRate(){
      alert("Raté !");
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
	        <h1>La Liberté</h1>
          <form id="FormWithALink0" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La protection de la vie privée a été affirmée en 1948 par la déclaration universelle des droits de
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink0').submit();"> l’Homme des Nations Unies</a> (art 12)
            « Nul ne sera l'objet d'immixtions arbitraires dans sa vie privée, sa famille, son domicile ou sa correspondance, ni d'atteintes à son honneur et à sa réputation. Toute personne a droit à la protection de la loi contre de telles immixtions ou de telles atteintes. »</p>
            <input type="hidden" name="SubmitHidden0"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden0'])) {$_SESSION['ddhc_user']['1'] = 1;}?>
          <form id="FormWithALink1" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La souveraineté se définit, en droit, comme la détention de l’<a href="javascript:;" onclick="">autorité suprême</a>, c’est-à-dire d’un pouvoir absolu (<U>dont tous dépendent</U>) et inconditionné (qui ne dépend de qui que ce soit). Dans les régimes
              <a href=""> despotiques</a>, la souveraineté est le plus souvent détenue par <a href="javascript:;" onclick="">un seul</a> homme. Dans les démocraties, elle est détenue <a href="javascript:;" onclick="">par le peuple</a>, constitué en un corps politique, la Nation : on parle dès lors de <a href="javascript:;" onclick="">souveraineté nationale</a>. Dans ce cadre, la souveraineté ne peut être exercée par un <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink1').submit();">despote</a>, ni divisée entre plusieurs fractions du <a href="">peuple</a> elle est détenue par un être <U>collectif et indivisible</U>, distinct des individus qui la composent. Mais les contraintes de l’<a href="">exercice</a> du pouvoir impliquent que cette souveraineté soit déléguée : le peuple, bien que <a href="">constitué</a> en <U>corps politique</U>, ne peut en effet délibérer directement sur les affaires <a href="">publiques</a>. Cette mission est donc confiée à des représentants élus, dont les décisions constituent l’expression de la volonté générale.</p>
            <input type="hidden" name="SubmitHidden1"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden1'])) {$_SESSION['ddhc_user']['2'] = 1;}?>
          <form id="FormWithALink2" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La loi, arbitre de l'exercice de cette liberté <a href="javascript:;" onclick="">individuelle</a>. Les rédacteurs de la déclaration ont fait le choix de confier à la loi le rôle de déterminer les limites à l'exerce de la liberté de l'article 4. Ce choix se place dans l'<U>idéologie politique</U> de l'époque, représentée notamment pas <U>Rousseau</U> et marque aussi encore une fois la volonté d'une liberté égale pour tous. Le choix de la loi se place dans une logique qui se retrouve tout au long de la déclaration de 1789.</p>
          <input type="hidden" name="SubmitHidden2"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden2'])) {$_SESSION['ddhc_user']['3'] = 1;}?>
          <hr>
          <form id="FormQuestion" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
            <p>Quelle est l'année de parution du contrat déterminant la relation Etat-Citoyen ?</p>
            <input type="text" name="FormAnswer" value="">
            <input type="submit" value="Je Valide">
          </form>
          <?php
          if (isset($_POST['FormAnswer'])) {
            $Submited = $_POST['FormAnswer'];
            if($Submited == $ANSW0){
              $_SESSION['ddhc_user']['3'] = 1;
              echo '<script>ShowMessage();</script>';
            }
            else{
              echo '<script>ShowRate();</script>';
            }
          }?>
      </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
