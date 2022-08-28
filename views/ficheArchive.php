<?php $title = 'FICHES ARCHIVÉES'; ?>

<?php ob_start(); ?>

<?php 

$test = $req->fetch(); 
if (empty($test)) { ?>
  <div class="wrapper2">
  <a href="index.php?action=consulter" class="linkback">Retour</a>
</div>
  <p id="erreur">Aucune transmission correspondante</p>
<?php }

else {

?>
<div class="wrapper2">
  <a href="index.php?action=consulter" class="linkback">Autres options</a>
</div>

<div>
	<table id="transmissions">
   
     <tr>
       <th>CLIENT</th>
       <th>INTERLOCUTEUR</th>
       <th>MESSAGE</th>
       <th>CODE</th>
       <th>SIGNATURE</th>
     </tr>
   
   
     <?php while($fiche = $req->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($fiche['client']); ?></td>
       <td><?php echo htmlspecialchars($fiche['interlocuteur']); ?></td>
       <td><?php echo htmlspecialchars($fiche['message']); ?></td>
       <td><?php if ($fiche['code'] = 1){echo "Positionnement";} elseif ($fich['code'] = 2){echo 'Annulation';} else {echo 'Autres';} ?></td>
       <td><?php echo htmlspecialchars($fiche['signature']); ?></td>
     </tr>
     <?php endwhile; ?>
   
 </table>
</div>

<?php } ?>

<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>