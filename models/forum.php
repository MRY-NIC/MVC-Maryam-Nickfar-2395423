<?php

function forum_model_list(){
    require (CONNEX_DIR);
    $sql = "Select * FROM forum join utilisateur on (utilisateur.id = forum.utilisateur_id)order by utilisateur_id";
    $result = mysqli_query($connex, $sql);
    $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connex);
    return $result;
}

function forum_model_insert($request)
{
  session_start();
  require (CONNEX_DIR);
  foreach ($request as $key => $value) {
    $$key = mysqli_real_escape_string($connex, $value);
  }
  $sql = "INSERT INTO forum (titre, article, date, utilisateur_id) VALUES ('$titre', '$article', '$date', '$utilisateur_id')";
  $result = mysqli_query($connex, $sql);
  mysqli_close($connex);

}

function forum_model_view($request)
{
  require (CONNEX_DIR);
  $userId = mysqli_real_escape_string($connex, $_POST['id']);
  $sql = "SELECT * FROM forum WHERE  utilisateur_id= '$id'";
  $result = mysqli_query($connex, $sql);
  $result = mysqli_fetch_assoc($result);
  mysqli_close($connex);
  return $result;

}

function forum_model_edit($request)
{
  session_start();
  require (CONNEX_DIR);
  foreach ($request as $key => $value) {
    $$key = mysqli_real_escape_string($connex, $value);
  }
  $sql = "UPDATE forum SET titre ='$titre', article= '$article'  WHERE utilisateur.id = '$id'";
  $result = mysqli_query($connex, $sql);
  mysqli_close($connex);

}

function forum_model_delete($request)
{
  session_start();
  require (CONNEX_DIR);
  $userId = mysqli_real_escape_string($connex, $_POST['id']);
  $sql = "DELETE FROM forum WHERE  utilisateur= '$id'";
  $result = mysqli_query($connex, $sql);
  mysqli_close($connex);

}

function article_model_checkSession(){
  require(CONNEX_DIR);
  if(isset($_SESSION['finger_print']) && $_SESSION['finger_print']== md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'])){
    header("LOCATION: login.php");
  }
}

?>