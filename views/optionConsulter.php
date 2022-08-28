<?php $title = 'Options de consultation'; ?>

<?php ob_start(); ?>



<br/>

<div class="wrapper2">
	<a href="index.php" class="linkback">Accueil</a>
</div>

<div>
	

	<div id="formu">
		<form action="index.php?action=ancienne" method="post">

			<input type="text" name="agence" id="agence" placeholder="Agence (ex : J02, JPE, JSE, J09, JAX, etc..)">

			<br/>

			<input type="text" name="date_fiche" id="date_fiche" placeholder="AAAA/MM/JJ">

			<input type="submit" value="Valider">
		</form>
	</div>



</div>

<div id="accueil">

	<div id="first">
		<a href="index.php?action=now" class="link"><span>Transmissions d'aujourd'hui</span></a>
	</div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>

