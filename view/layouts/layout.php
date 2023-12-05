<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
<ul class="navigation">
<?php
    if(isset($_SESSION['logOn'])  && !empty($_SESSION['logOn'])){
        echo'<li class= "welcome"> <b>Bonjour '. ucfirst($_SESSION['nom']).' !</b></li>';
    }
?>
<?php
    if(isset($_SESSION['logOn'])  && !empty($_SESSION['logOn'])){?>
      <li><a href="?module=forum&action=create">Créer Article</a></li>
      <li><a href="?module=user&action=index">Liste des utilisateurs</a></li>
      <li><a href="?module=forum&action=index">Liste des forums</a></li>
      <li><a href="?module=user&action=create">Créer un utilisateur</a></li>
      <li><a href="?module=user&action=logout">Logout</a></li>
<?php
}else{?>

    <li><a href="?module=user&action=login">Login</a></li>
    <li><a href="?module=user&action=index">Utilisateurs</a></li>
    <li><a href="?module=forum&action=index">Forums</a></li>
    <li><a href="?module=user&action=create">Créer un utilisateur</a></li>
<?php
}?>
    </ul>
    <div class='container'>
        <?php echo $content; ?>
    </div>
</body>
</html>