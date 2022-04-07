<?
#Verifica se tem um email para pesquisa
include "conn.php";

$email = $_POST['email'];

$select = $DB->query("SELECT * FROM usuario WHERE email = '$email'");
$result = $select->fetch(PDO::FETCH_ASSOC);
$rowCount = $select->rowCount();

if ($rowCount > 0) {
    header('Location: ' . SITE_URL . 'registrar-tela.php?resposta=emailjacadastrado');
} else {
    header('Location: ' . SITE_URL . 'registrar.php');
};
