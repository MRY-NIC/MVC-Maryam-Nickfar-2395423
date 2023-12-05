<?php
session_start();?>
<form action="?module=forum&action=insert" method="post">
  <label>Titre de l'article:
    <input type="text" name="titre" minlength="5" maxlength="100" value="" required>
  </label>
  <label>Text de l'article
    <input type="text" name="article"  maxlength="1200" value="" required>
  </label>
  <input type="hidden" name="auteur" value=" <?php echo $_SESSION['id']?>"
  <input type="hidden" name="date" placeholder="aaaa-mm-jj" value="<?php echo date('Y-m-d')?>">su
  <input type="submit" value="Enregistrer">
</form>