<?
session_start();

unset($_SESSION['idUser']);

unset($_SESSION['nome']);

unset($_SESSION['nivel']);

unset($_SESSION['email']);

unset($_SESSION['senha']);

session_unset();
session_destroy();

header('Location: login.php?resposta=deslogado');
