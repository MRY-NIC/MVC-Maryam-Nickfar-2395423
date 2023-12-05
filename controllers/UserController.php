<?php

function utilisateur_controller_index(){
   require_once(MODEL_DIR."/user.php");
   $data = utilisateur_model_list();
  render(VIEW_DIR.'/user/index.php', $data);
}

function utilisateur_controller_create()
{
  require_once(MODEL_DIR.'/user.php');
  $data = utilisateur_model_list();
  render(VIEW_DIR.'/user/create.php', $data);
}

function utilisateur_controller_insert($request)
{
  require_once(MODEL_DIR.'/user.php');
  utilisateur_model_insert($request);
  header("Location: ?module=user&action=index");
}

function utilisateur_controller_edit($request){
  require_once(MODEL_DIR.'/user.php');
  utilisateur_model_edit($request);
  header("Location: ?module=user&action=index");
}

function utilisateur_controller_view($request)
{
  require_once(MODEL_DIR.'/user.php');
  $user = utilisateur_model_view($request);
  require_once(MODEL_DIR.'/forum.php');
  $forum = forum_model_list();
  $data= array_merge(array('user => $user'), array('forum' => $forum));
  render(VIEW_DIR.'/user/view.php', $data);
}

function utilisateur_controller_delete($request){
  require_once(MODEL_DIR.'/user.php');
  utilisateur_model_delete($request);
  header("Location: ?module=user&action=index");
}

function utilisateur_controller_login()
{
 require_once(MODEL_DIR.'/user.php');
 $data=utilisateur_model_list();
 render(VIEW_DIR.'/user/login.php',$data);
}

function utilisateur_controller_logout(){
  require_once(MODEL_DIR.'/user.php');
  utilisateur_model_logout();
  render(VIEW_DIR.'/user/login.php');
}

function utilisateur_controller_authenticate($request){
  require_once(MODEL_DIR.'/user.php');
  utilisateur_model_authenticate($request);
  if($_SESSION['logOn'] = true){
    header("Location: ?module=forum&action=index");
  }else{
    header("Location: ?module=user&action=login.php?msg2");
  }
}
?>