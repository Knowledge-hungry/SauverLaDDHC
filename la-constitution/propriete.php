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
	        <h1>La Propriété</h1>
          <form id="FormWithALink0" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La présomption d'<a href="">innocence</a> constitue l'une des composantes les plus précieuses de la <a href="">résistance</a> à l'oppression. Néanmoins, l'article 9 autorise l'incarcération préventive, à condition qu'elle soit "nécessaire pour s'assurer de sa personne". Rédaction <a href="">ambiguë</a>, et ingénieuse. Elle autorise l'arrestation pour éviter toute disparition intentionnelle du délinquant présumé, mais aussi pour garantir la protection d'un inculpé contre la vindicte populaire. L'incarcération d'un <a href="">pédophile supposé</a>, par exemple, a beaucoup moins pour but de l'empêcher de nuire, ou de fuir, que de le protéger contre la fureur des citoyens, <a href="">souvent révoltés</a> par ce type d'affaires. Par ailleurs, on ne peut manquer de s'étonner des libertés que prennent les <a href="">journalistes</a> avec la présomption d'innocence.
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink0').submit();"> Comment </a>
              peut-on accepter que la presse publie les noms, et parfois les photographies, d'inculpés dans des <a href="">affaires</a> très graves, avant que le jugement ait été rendu, ou même que les audiences aient commencé ? Dans ce cas-ci, par exemple. Imaginons que ces accusés soient blanchis au procès : comment <a href="">etrouveront-ils</a> du travail ? Comment seront-ils accueillis dans leurs quartiers ? Les auteurs de tels articles se rendent-ils bien <a href="">compte de la responsabilité</a> qu'ils endossent ? Ces "papiers" n'enfreignent-ils pas la <a href="">Charte des journalistes</a>, laquelle dispose que "un journaliste digne de ce nom [...] tient le scrupule et le souci de la justice pour règles premières [et] ne confond pas son rôle avec celui du policier" ?
            </p>
            <input type="hidden" name="SubmitHidden0"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden0'])) {$_SESSION['ddhc_user']['8'] = 1;}?>
          <form id="FormWithALink1" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Un article que nombre de journalistes et de chefs d'entreprises devraient méditer attentivement. Puisqu'une force publique s'avère nécessaire pour maintenir la paix civile (indispensable à la presse comme au commerce), et puisqu'il faut bien l'entretenir, alors il faut aussi <a href="">payer des impôts</a>. Ô surprise ! Apporter sa contribution à la richesse commune ne s'analyse pas du tout comme un devoir, mais bien comme un droit. Chaque <a href="">citoyen</a> devrait être fier de payer de l'impôt - d'autant plus fier qu'il en paie beaucoup - puisque c'est par l'impôt que nous disposons de routes, de ponts, d'écoles gratuites, d'hôpitaux efficaces, d'<a href="">allocations familiales</a>, d'une police peu corrompue, d'une armée peu putchiste, de musées, de forêts, bref, de toutes ces choses qui font qu'il est tout de même plus agréable de vivre en <a href="">France</a> qu'en Afghanistan ou en Côte d'Ivoire.
          Que penser, alors, d'un citoyen qui cherche à <a href="">minimiser</a> sa quote-part au Trésor public ? N'indique-t-il pas par là qu'il refuse de participer au pacte social ? Pourquoi autoriserait-on le rédacteur en chef d'un journal qui publie "cent astuces pour échapper au fisc" à <a href="">bénéficier</a> des soins aux urgences, ou d'une retraite payée par la Sécurité sociale ? Pourquoi accepterait-on que les enfants de tel <a href="">grand patron</a>, qui vitupère sans relâche contre Bercy, aient le droit de prendre place sur les bancs de l'école gratuite ? Inversement, dès lors qu'il paie l'impôt en France et qu'il participe à la richesse commune, pourquoi refuserait-on le droit de vote à un individu
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink1').submit();"> quelconque ? </a>
            </p>
            <input type="hidden" name="SubmitHidden1"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden1'])) {$_SESSION['ddhc_user']['12'] = 1;}?>
          <form id="FormWithALink2" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>L'expropriation n'est <a href="">acceptable</a> que dans des conditions précises, vu le <a href="">caractère</a> capital du droit de propriété.
             <a href="javascript:ShowMessage();" onclick="ShowMessage();document.getElementById('FormWithALink2').submit();"><img src="/img/propriete.jpg" height="120"/></a>

          </p>
          <input type="hidden" name="SubmitHidden2"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden2'])) {$_SESSION['ddhc_user']['16'] = 1;}?>
      </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
