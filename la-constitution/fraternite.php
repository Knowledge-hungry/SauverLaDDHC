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
	        <h1>Bootstrap starter template</h1>
          <p>INDICE ARTICLE 5</p>
          <form id="FormWithALink0" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La Déclaration, on vient de le voir, garantit la liberté, et lui pose aussitôt des bornes légales. Ce schéma "affirmation-limitation" se retrouve dans de nombreux autres articles (notamment 7, 10, 11 et 17) ; mais la Loi elle-même a des limites. Le Parlement ne peut pas interdire tout et n'importe quoi, mais seulement les "actions nuisibles à la société".
L'article se complète par une disposition capitale connue sous le nom de "principe de liberté". Quand la Loi ne dit rien, alors c'est permis. Ce qui n'est pas expressément interdit est autorisé. La relaxe des pirates informatiques au début des années 90 se fondait sur cet article. Le "principe de liberté" n'est toutefois applicable qu'aux individus. Pour l'administration, la situation est rigoureusement contraire - elle est connue sous le nom de "principe d'autorité". Pour une administration, tout ce qui n'est pas expressément autorisé est interdit. Sur le rôle d'impôt sur le revenu, le fisc mentionne les articles du Code général des impôts l'autorisant à exercer cet acte.
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink0').submit();"> De même </a>
              lorsqu'un agent de police interpelle un quidam, il doit en principe lui signifier la cause de l'arrestation et l'article de loi l'y autorisant. Principe de liberté et principe d'autorité se combinent ainsi pour donner une solution chaque fois que la loi ne prévoit "rien". Contrairement à ce que prétendent nombre de journalistes ignorants, il n'existe aucun "vide juridique" en France : quand la loi "ne dit rien", elle habilite les particuliers et empêche l'administration.
            </p>
            <input type="hidden" name="SubmitHidden0"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden0'])) {$_SESSION['ddhc_user']['4'] = 1;}?>
          <p>INDICE ARTICLE 7</p>
          <form id="FormWithALink1" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Article fondamental qui exprime le "principe de légalité". Seule la loi peut décider si, quand, comment et pour quel motif les agents de l'Etat peuvent exercer la violence contre des citoyens. La loi est d'application stricte : si elle existe, elle possède sa pleine vigueur et l'enfreindre revient à commettre le délit de rébellion (article 433-6 du Code Pénal). En revanche, un ordre contraire à la Loi, ou même simplement non-conforme, c'est-à-dire privé de base légale, viole le "principe d'autorité" et un agent de l'Etat qui exécute un tel ordre se rend coupable d'une atteinte aux libertés individuelles (article 432-4 du Code pénal). L'excuse présentée par les nazis à Nuremberg ("Je n'ai fait qu'exécuter les ordres") est irrecevable selon l'article 7 : même
              <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink1').submit();"> un soldat </a>
              en service doit refuser d'exécuter un ordre exprès si cet ordre est contraire à la loi. Combinons cela avec l'article 5 : un agent de l'Etat qui exerce une violence physique contre une action qui n'est pas nuisible à la société agit de manière illégale. Peut-il, alors, accepter de partir au combat en Irak ? Peut-il expulser des "squatters" ? Peut-il procéder à une vérification d'identité ? Ces questions méritent d'être posées.
            </p>
            <input type="hidden" name="SubmitHidden1"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden1'])) {$_SESSION['ddhc_user']['6'] = 1;}?>
          <p>INDICE ARTICLE 8</p>
          <form id="FormWithALink2" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>La loi pénale n'est pas rétroactive. Si le piratage informatique n'est incriminé qu'à compter du 1er janvier 1994, un copiage illégal de données accompli le 31 décembre 1993 à 23h59 n'est pas répréhensible. Par ailleurs, la loi ne peut établir que des peines "strictement et évidemment nécessaires". La
             <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink2').submit();"> cruauté </a>
             gratuite est exclue du droit pénal, mais également la cruauté "justifiable" qui ne serait pas strictement nécessaire. On peut assurément plaider pour la torture ou la peine de mort : ces violences sont-elles pour autant absolument indispensables ? Sinon, si d'autres méthodes permettent de parvenir à un même résultat, ces violences ne sont pas légales et un agent de l'Etat qui les commettrait devrait être puni, conformément à l'article 7.
          </p>
          <input type="hidden" name="SubmitHidden2"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden2'])) {$_SESSION['ddhc_user']['7'] = 1;}?>
          <p>INDICE ARTICLE 12</p>
          <form id="FormWithALink3" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>Ne nous leurrons pas. Les citoyens ont peut-être, dans une rationnalité stricte, toujours "intérêt" à respecter les droits de l'Homme et la liberté d'autrui ; mais de facto ils cèdent parfois à leurs passions, à leurs haines, à leur soif de vengeance ou à leurs avidités. Pour contenir ces inclinations violentes, l'Etat doit disposer d'une force, d'une violence légale, destinée à préserver l'ordre public et l'intérêt commun. L'armée et la police se révèlent indispensables ; mais elles ne
             <a href="javascript:;" onclick="ShowMessage();document.getElementById('FormWithALink3').submit();"> peuvent </a>
             jamais devenir des milices, bras armé d'un gang de bandits qui serait parvenu à s'emparer du pouvoir. Les ordres de tels individus, arbitraires par nature, seraient toujours illégaux ; et en vertu de l'article 7, les agents de l'Etat se rendraient coupables par l'exécution de tels ordres. Ils auraient le devoir d'y résister.
          </p>
          <input type="hidden" name="SubmitHidden3"/>
          </form>
          <?php
          if (isset($_POST['SubmitHidden3'])) {$_SESSION['ddhc_user']['11'] = 1;}?>
      </div>
</div>
<script src="/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
