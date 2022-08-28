<?php $title = 'CREER UNE TRANSMISSION'; ?>

<?php ob_start(); ?>

<div class="wrapper2">
	<a href="index.php" class="linkback">Accueil</a>
</div>

<div id="formu">
	<form action="index.php?action=inserer" method="post">

		<div>
			<input type="text" name="agence" id="agence" placeholder="*Agence (en majuscule ex : J02, JPE, etc...)">
		</div>

		<div>
			<input type="text" name="client" id="client" placeholder="Client">
		</div>

		<div>
			<input type="text" name="interlocuteur" id="interlocuteur" placeholder="Interlocuteur">
		</div>

		<div>
			<textarea id="message" name="message" rows="7" cols="60" placeholder="*Message"></textarea>
		</div>

		<div>
			<input type="number" name="code" id="code" placeholder="*Code : 1 positionnement, 2 annulation, 3 autres">
		</div>

		<div>
			<input type="text" name="signature" id="signature" placeholder="*Signé par">
		</div>

		<input type="submit" value="Enregistrer">
		
	</form>
</div>
<div >
<?php 

$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (strpos($fullURL, "erreur=empty") == true)
{?>
<p id="erreur">Les cases commençants par un "*" doivent toutes êtres renseignées</p>
<?php
}

elseif (strpos($fullURL, "erreur=badcode") == true)
{?>
<p id="erreur">Les codes ne peuvent être que 1 (positionnement), 2 (annulation) ou 3 (autres)</p>
<?php
}
?>


</div>
<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>