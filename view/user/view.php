
<p> <strong>Nom : </strong><?= $data['nom']; ?></p>
<p> <strong>Nom d'utilisateur : </strong><?= $data['nomUtilisateur']; ?></p>
<p> <strong>Mot de pass : </strong><?= $data['motPass']; ?></p>
<p> <strong>Date de naissance : </strong><?= $data['dateNaissance']; ?></p>
<a href="index.php?controller=user&function=edit&id=<?= $data['id']; ?>" class="btn">Modifier</a>
<form action="?controller=user&function=delete" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    <input type="submit" class="btn-danger" value="Effacer">
</form>