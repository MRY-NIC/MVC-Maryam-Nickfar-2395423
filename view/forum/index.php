<?php
  session_start();
?>

<table class='listing'>
    <tr>
      <th>Titre de l'Article</th>
      <th>Text de l'Article</th>
      <th>Date de l'Article</th>
      <th>Auteur de l'Article</th>
    </tr>
  <?php foreach($data as $ligne){?>
    <tr>
        <td><?= $ligne['titre'] ?></td>
        <td><?= $ligne['article'] ?></td>
        <td><?= $ligne['date'] ?></td>
        <td><?= $ligne['nom'] ?></td>
    </tr>
  <?php }?>
</table>