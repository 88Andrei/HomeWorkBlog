<?php

session_start();

require_once './models/user.php';

if (empty($_POST)) {
  require_once './views/login.php';
  exit();
}

$userModel = new UserModel();
$user = $userModel->getUser($_POST['email'], $_POST['password']);

if ($user) {
$_SESSION['user'] = $_POST ['email'];
  header('location: /');
} else {
  header('location: /login.php');
}
