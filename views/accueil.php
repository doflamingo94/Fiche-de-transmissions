<?php $title = 'Transmission de la permanence'; ?>

<?php ob_start(); ?>



<div id="accueil">
	<div class="wrapper"><p id="first">
		<a  href="index.php?action=creer" class="link"><span>CREER UNE TRANSMISSION</span></a>
	</p>

	<p id="second">
		<a  href="index.php?action=consulter" class="link"><span>CONSULTER DES TRANSMISSIONS</span></a>
	</p></div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>






