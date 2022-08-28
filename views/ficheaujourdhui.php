<?php $title = 'TRANSMISSIONS DU JOUR'; ?>

<?php ob_start(); ?>


<div class="wrapper2">
  <a href="index.php" class="linkback">Retour</a>
</div>

<div>
	<table id="transmissions">
   
     <tr>
       <th>AGENCE</th>
       <th>CLIENT</th>
       <th>INTERLOCUTEUR</th>
       <th>MESSAGE</th>
       <th>CODE</th>
       <th>SIGNATURE</th>
       <th>MODIFICATION</th>
     </tr>
   
   
     <?php while($fiche = $req->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($fiche['agence']); ?></td>
       <td><?php echo htmlspecialchars($fiche['client']); ?></td>
       <td><?php echo htmlspecialchars($fiche['interlocuteur']); ?></td>
       <td><?php echo htmlspecialchars($fiche['message']); ?></td>
       <td><?php if ($fiche['code'] == 1){echo "Positionnement";} elseif ($fiche['code'] == 2){echo 'Annulation';} else {echo 'Autres';} ?></td>
       <td><?php echo htmlspecialchars($fiche['signature']); ?></td>
       <td id="first"><a href="index.php?action=modif&amp;id=<?= $fiche['id'] ?>"><span>modifier</span></a> <br/> <a href="index.php?action=delete&amp;id=<?= $fiche['id'] ?>"><span>supprimer</span></a> </td>
     </tr>
     <?php endwhile; ?>
   
 </table>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('views/template.php'); ?>

