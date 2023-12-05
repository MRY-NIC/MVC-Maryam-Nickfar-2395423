<?php 
        session_start();
?>
<?php print_r($data); ?>
<?php print_r($data['article']['utilisateur_id']); ?>

<h2>La mise à jour</h2>
<form action="?module=article&action=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $data['article'] ['auteur'];?>">

    <p><label >Titre</label>
    <input type="text" name="titre" minlength="5" maxlength="100" value="<?php echo $data['article'] ['titre'];?>" required></p>

    <p><label >Article</label>
    <input type="text" name="article"  maxlength="100" value="<?php echo $data['article'] ['article'];?>" required></p>

    <p><input type="submit" value="Enregistrer"></p>
    
</form>