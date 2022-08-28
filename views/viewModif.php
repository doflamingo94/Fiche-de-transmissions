<?php $title = 'MODIFICATION DE TRANSMISSION'; ?>

<?php ob_start(); ?>



<br/>

<div id="formu">
	<form action="index.php?action=change&amp;id=<?= $req['id'] ?>" method="post">

		<div>
			<input type="text" name="agence" id="agence" placeholder="Agence" value="<?= $req['agence'] ?>">
		</div>

		<div>
			<input type="text" name="client" id="client" placeholder="Client" value="<?= $req['client'] ?>">
		</div>

		<div>
			<input type="text" name="interlocuteur" id="interlocuteur" placeholder="Interlocuteur" value="<?= $req['interlocuteur'] ?>">
		</div>

		<div>
			<textarea id="message" name="message" rows="7" cols="60" placeholder="Message" ><?php echo $req['message']; ?></textarea>
		</div>

		<div>
			<input type="number" name="code" id="code" placeholder="Code" value="<?= $req['code'] ?>">
		</div>

		<div>
			<input type="text" name="signature" id="signature" placeholder="Signature" value="<?= $req['signature'] ?>">
		</div>

		<input type="submit" value="Enregistrer">
		
	</form>
</div>





<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>