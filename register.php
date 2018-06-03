<?php

  session_start();

  require_once './models/user.php';

  if (empty($_POST)) {
    require_once './views/register.php';
    exit();
  }

  $userModel = new UserModel();
  if ($userModel->getUserByEmail($_POST['email'])) {
    echo 'user exists!';
  } else {
    $userModel->create($_POST['email'], $_POST['password']);
  }
  header('location: /');
