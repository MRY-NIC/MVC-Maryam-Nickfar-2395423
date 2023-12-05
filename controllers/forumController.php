<?php
function forum_controller_index()
{
  require_once(MODEL_DIR.'/forum.php');
  $data = forum_model_list();
  render(VIEW_DIR.'/forum/index.php', $data);
}

function forum_controller_insert($request)
{
  require_once(MODEL_DIR."/forum.php");
  forum_model_insert($request);
  header("Location: ?module=user&action=index");
}

function forum_controller_edit($request)
{
  require_once(MODEL_DIR."/forum.php");

}

function forum_controller_delete($request)
{
  require_once(MODEL_DIR."/forum.php");
  forum_model_delete($request);
  header("Location: ?module=user&action=index");
}

