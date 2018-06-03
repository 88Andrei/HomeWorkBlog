<?php

  session_start();

  require_once './models/post.php';

  if (!isset($_SESSION['user'])) {
    header('location: /login.php');
    exit();
  }

  if(empty($_POST['title'])  ||
     empty($_POST['text']))
   {
   echo "Вы не заполнили одно из полей! Вернитесь обратно и заполните форму полностью!";
   return false;
   }

$postModel = new PostModel ();
$postModel->create($_POST['title'], $_POST['text'], $_SESSION ['user']);

header('location: /');
