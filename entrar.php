<?php
include 'conn.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = md5($senha . 'eadblock');

$select = $DB->query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
$result = $select->fetch(PDO::FETCH_ASSOC);
$rowCount = $select->rowCount();
if ($rowCount > 0) {

    if ($result['status'] == 0) {
        $_SESSION["idUser"] = $result["id"];

        $_SESSION["nome"] = $result["nome"];

        $_SESSION["nivel"] = $result["nivel"];

        $_SESSION["email"]  = $result["email"];

        $_SESSION["senha"] = $result["senha"];

        if ($result['nivel'] == 3) {
            header('Location: ' . SITE_URL . 'adm/index.php');
            die();
        } elseif ($result['nivel'] == 2) {
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
            header('Location: ' . SITE_URL . 'instrutor/index.php');
            exit;
        } else {
            header('Location: ' . SITE_URL . 'dash/index.php');
            exit;
        }
    }
} else {
    // Salva os dados encontados na variável $resultado
    header('Location: ' . SITE_URL . 'login.php?resposta=erro');
}
