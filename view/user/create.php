<form action="?module=user&action=insert" method="post">

  <p><label> Nom </label>
  <input type="text" name="name" maxlength="25" value="" required></p>

  <p><label> Nom d'utilisateur </label>
  <input type="email" name="nomUtilisateur" maxlength="45" value=""></p>

  <p><label> Mot de Pass </label>
  <input type="password" name="motPass" maxlength="20"></p>

  <p><label> Date de naissance </label>
  <input type="text" name="dateNaissance" maxlength="10" placeholder="aaaa-mm-jj" value="">
  </p>

  <p><input type="submit" value="Enregistrer"/></p>

</form>