<?php

function utilisateur_model_list() {
    require(CONNEX_DIR);
    $sql = "SELECT * FROM utilisateur ORDER BY nom";
    $result = mysqli_query( $connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $result;
}

function utilisateur_model_insert($request) {
    require(CONNEX_DIR);
    foreach($request as $key=>$value){
        $$key = mysqli_real_escape_string($connex, $value);
    }
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO utilisateur (nom, nomUtilisateur, motPass, dateNaissance) VALUES ('$nom', '$nomUtilisateur', '$motPass', '$dateNaissance')";
    $result = mysqli_query($connex, $sql);
    mysqli_close($connex);
}

function utilisateur_model_view($request)
{
  require (CONNEX_DIR);
  $userId = mysqli_real_escape_string($con, $request['id']);
  $sql = "SELECT * FROM utilisateur WHERE id = '$id'";
  $result = mysqli_query($connex, $sql);
  $result = mysqli_fetch_assoc($result);
  mysqli_close($connex);
  return $result;
}

function utilisateur_model_edit($request)
{
  require (CONNEX_DIR);
  foreach ($request as $key => $value) {
    $$key = mysqli_real_escape_string($connex, $value);
  }
  $sql="UPDATE utilisateur SET nom='$nom', nomUtilisateur='$nomUtilisateur', motPass= '$motPass', dateNaissance='$dateNaissance'  WHERE utilisateur.id = '$id'";
  $result = mysqli_query($connex, $sql);
  mysqli_close($connex);
}

function utilisateur_model_delete($request)
{
  require (CONNEX_DIR);
  $id = mysqli_real_escape_string($connex, $_POST['id']);
  $sql = "DELETE FROM utilisateur WHERE id = '$id'";
  $result = mysqli_query($connex, $sql);
  mysqli_close($connex);
}

function utilisateur_model_authenticate($request){

    session_start();
    require(CONNEX_DIR); 
    foreach($request as $key=>$value){
        $$key=mysqli_real_escape_string($connex, $value);
    }
    $sql = "SELECT * FROM utilisateur WHERE nomUtilisateur = '$nomUtilisateur'";
    $result = mysqli_query($connex, $sql);
    $count =  mysqli_num_rows($result);
    if($count == 1){
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dbPassword=$user['password'];
        if(password_verify($password, $dbPassword)){
            session_regenerate_id();
            $_SESSION['logOn'] = true;
            $_SESSION['userId']  = $user['id'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['finger_print'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);  
        }
      }
    }

    function user_model_logout(){
        session_start();
        unset($_SESSION['logOn']);
        unset($_SESSION['userId']);
        unset($_SESSION['nom']);
        unset($_SESSION['finger_print']);
        session_destroy();
        header("Location:?module=user&action=login");
      }
?>
