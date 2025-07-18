<?php

function dd($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
  die('DOYEN YA WORR ! ');

}

function redirect($uri){
  header("location:$uri");
  exit;
}