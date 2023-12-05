<table class='listing'>
  <tr>
    <th>id</th>
    <th>Nom</th>
    <th>Nom d'utilisateur</th>
    <th>Mot de pass</th>
    <th>Show</th>
    <th>Effacer</th>
    <th>editer</th>
  </tr>
  <?php 
  foreach($data as $row){
  ?>
    <tr>
    <td><?= $user['id']?></td>
      <td><?= $user['nom']?></td>
      <td><?= $user['nomUtilisateur']?></td>
      <td><?= $user['motPass']?></td>
      <td><?= $user['dateNaissance']?></td>
      <td><a href="?module=user&action=view&id=<?php echo $row['id']; ?>">Editer</a></td>
      <td><form action="?module=user&action=delete" method="post"><input type="hidden" name="id" value="<?php echo $row['id'] ?>"><input type="submit" Value="Effacer"></form></td>
    </tr>
  <?php 
  }
  ?>
  <tbody>
  </table>

  