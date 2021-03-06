<?php
// begin the session
session_start();
$SCORE_USER=0;
$HAS_WIN=0;
$DDHCARTICLE= array("Art. 1. Les hommes naissent et demeurent libres et égaux en droits. Les distinctions sociales ne peuvent être fondées que sur l'utilité commune.",
		            "Art. 2. Le but de toute association politique est la conservation des droits naturels et imprescriptibles de l'Homme. Ces droits sont la liberté, la propriété, la sûreté, et la résistance à l'oppression.",
				    "Art. 3. Le principe de toute Souveraineté réside essentiellement dans la Nation. Nul corps, nul individu ne peut exercer d'autorité qui n'en émane expressément.",
					"Art. 4. La liberté consiste à pouvoir faire tout ce qui ne nuit pas à autrui : ainsi, l'exercice des droits naturels de chaque homme n'a de bornes que celles qui assurent aux autres Membres de la Société la jouissance de ces mêmes droits. Ces bornes ne peuvent être déterminées que par la Loi.",
					"Art. 5. La Loi n'a le droit de défendre que les actions nuisibles à la Société. Tout ce qui n'est pas défendu par la Loi ne peut être empêché, et nul ne peut être contraint à faire ce qu'elle n'ordonne pas.  ",
					"Art. 6. La Loi est l'expression de la volonté générale. Tous les Citoyens ont droit de concourir personnellement, ou par leurs Représentants, à sa formation. Elle doit être la même pour tous, soit qu'elle protège, soit qu'elle punisse. Tous les Citoyens étant égaux à ses yeux sont également admissibles à toutes dignités, places et emplois publics, selon leur capacité, et sans autre distinction que celle de leurs vertus et de leurs talents. ",
					"Art. 7. Nul homme ne peut être accusé, arrêté ni détenu que dans les cas déterminés par la Loi, et selon les formes qu'elle a prescrites. Ceux qui sollicitent, expédient, exécutent ou font exécuter des ordres arbitraires, doivent être punis ; mais tout citoyen appelé ou saisi en vertu de la Loi doit obéir à l'instant : il se rend coupable par la résistance. ",
					"Art. 8. La Loi ne doit établir que des peines strictement et évidemment nécessaires, et nul ne peut être puni qu'en vertu d'une Loi établie et promulguée antérieurement au délit, et légalement appliquée.  ",
					"Art. 9. Tout homme étant présumé innocent jusqu'à ce qu'il ait été déclaré coupable, s'il est jugé indispensable de l'arrêter, toute rigueur qui ne serait pas nécessaire pour s'assurer de sa personne doit être sévèrement réprimée par la loi.  ",
					"Art. 10. Nul ne doit être inquiété pour ses opinions, même religieuses, pourvu que leur manifestation ne trouble pas l'ordre public établi par la Loi.",
					"Art. 11. La libre communication des pensées et des opinions est un des droits les plus précieux de l'Homme : tout Citoyen peut donc parler, écrire, imprimer librement, sauf à répondre de l'abus de cette liberté dans les cas déterminés par la Loi.",
					"Art. 12. La garantie des droits de l'Homme et du Citoyen nécessite une force publique : cette force est donc instituée pour l'avantage de tous, et non pour l'utilité particulière de ceux auxquels elle est confiée.",
					"Art. 13. Pour l'entretien de la force publique, et pour les dépenses d'administration, une contribution commune est indispensable : elle doit être également répartie entre tous les citoyens, en raison de leurs facultés.",
					"Art. 14. Tous les Citoyens ont le droit de constater, par eux-mêmes ou par leurs représentants, la nécessité de la contribution publique, de la consentir librement, d'en suivre l'emploi, et d'en déterminer la quotité, l'assiette, le recouvrement et la durée.",
					"Art. 15. La Société a le droit de demander compte à tout Agent public de son administration.",
					"Art. 16. Toute Société dans laquelle la garantie des Droits n'est pas assurée, ni la séparation des Pouvoirs déterminée, n'a point de Constitution.",
					"Art. 17. La propriété étant un droit inviolable et sacré, nul ne peut en être privé, si ce n'est lorsque la nécessité publique, légalement constatée, l'exige évidemment, et sous la condition d'une juste et préalable indemnité.");
?>
<html>
<head>
  <title>ACCUEIL</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
          <a class="navbar-brand" href="/index.php">DDHC-GAME</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index.php">DDHC-GAME</a></li>
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
			<div class="jumbotron">
				<div class="container">
	        <h1>Le grand jeu de la DDHC</h1>
					<p class="lead">Nous sommes en 1780 et la révolution fait rage. Les Lumières tente en vain d'éclairer le monde, mais ils ont perdus les fragments de la lumière.</p>
					<p class="lead">Tentez de retrouver les fragments de la Déclaration des Droits de l'Homme et du Citoyen pour retrouver la lumière et terminer la révolution.</p>
					<p>Bonne Chance !</p>
				</div>
				<!-- The Modal -->
				<div id="myModal" class="modal">

				  <!-- Modal content -->
				  <div class="modal-content">
				    <span class="close">&times;</span>
				    <h1>Bravo ! Tu as réussis !</h1>
						<p>Tu fais maintenant parti de la brave liste des révolutionnaires de l'époque des Lumières !</p>
					  <p>Grâce à toi, en 1789 ils réussirent à diffuser la DDHC, et le brouillard commenca à se dissiper !</p>
				  </div>

				</div>
				<script>
				// Get the modal
				var modal = document.getElementById("myModal");
				var btn = document.getElementById("myBtn");
				var span = document.getElementsByClassName("close")[0];
				function YouHaveWin() {
				  modal.style.display = "block";
				}
				span.onclick = function() {
				  modal.style.display = "none";
				}
				window.onclick = function(event) {
				  if (event.target == modal) {
				    modal.style.display = "none";
				  }
				}
				</script>
			</div>
					<?php
					if(isset($_SESSION['ddhc_user']) == FALSE) {
						  // create an array
						  $ddhc_complete_user=array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
							// put the array in a session variable
							$_SESSION['ddhc_user']=$ddhc_complete_user;
							// a little message to say we have done it
							//echo 'Putting array into a session variable';
					} else {
						//$_SESSION['ddhc_user']['0'] = 0;
						//$_SESSION['ddhc_user']['1'] = 0;
						//echo $_SESSION['ddhc_user']['0'];
						foreach($_SESSION['ddhc_user'] as $key=>$value){
					    // and print out the values
					    //echo 'The value of $_SESSION['."'".$key."'".'] is '."'".$value."'".' <br />';
							if($value == 1){
								echo '<p style="border-style: double;">'.$DDHCARTICLE[$key].'</p><br>';
								$SCORE_USER += 1;

							}
					  }
						if($SCORE_USER == 17){
							$HAS_WIN = 1;
						}
					}
					echo '<p>Vous avez trouvé : '.$SCORE_USER.'/17 amendements</p>';
					?>
	        <?php
					if($HAS_WIN == 1){
						echo "<script>YouHaveWin()</script>";
					}
					 ?>
		</div>
</div>
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

<script>
$(function() {
	var numberOfStars = 45;

	for (var i = 0; i < numberOfStars; i++) {
	  $('.modal').append('<div><i class="fa fa-star blob ' + i + '"></i></div>');
	}

	animateText();

	animateBlobs();
});

$('.modal').click(function() {
	reset();

	animateText();

	animateBlobs();
});

function reset() {
	$.each($('.blob'), function(i) {
		TweenMax.set($(this), { x: 0, y: 0, opacity: 1 });
	});

	TweenMax.set($('h1'), { scale: 1, opacity: 1, rotation: 0 });
}

function animateText() {
		TweenMax.from($('h1'), 0.8, {
		scale: 0.4,
		opacity: 0,
		rotation: 15,
		ease: Back.easeOut.config(4),
	});
}

function animateBlobs() {

	var xSeed = _.random(350, 380);
	var ySeed = _.random(120, 170);

	$.each($('.blob'), function(i) {
		var $blob = $(this);
		var speed = _.random(1, 5);
		var rotation = _.random(5, 100);
		var scale = _.random(0.8, 1.5);
		var x = _.random(-xSeed, xSeed);
		var y = _.random(-ySeed, ySeed);

		TweenMax.to($blob, speed, {
			x: x,
			y: y,
			ease: Power1.easeOut,
			opacity: 0,
			rotation: rotation,
			scale: scale,
			onStartParams: [$blob],
			onStart: function($element) {
				$element.css('display', 'block');
			},
			onCompleteParams: [$blob],
			onComplete: function($element) {
				$element.css('display', 'none');
			}
		});
	});
}
</script>
</body>
</html>
