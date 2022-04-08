<?php
include 'conn.php';
$true = isset($_POST['true']) ? ($_POST['true']) : '';

$nome = ($_POST['nome']);
$email = ($_POST['email']);
$senha = md5($_POST['senha'] . 'eadblock');

echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Senha: $senha <br>";

$parametros = array('nome' => $nome, 'email' => $email, 'senha' => $senha);
$meuResultado = CRUD::INSERT('usuario', $parametros);
//montando o email
$to = $email;
$de = 'contato@blockacademy.com.br';
$fromNAme = "Confirmação - Block Academy";

$headers = "MIME-Version: 1.1\n"; // Certifique-se de utilizar o MIME 1.1, pois é o mais atual. A versão 1.0 não é recomendado.
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= 'From: ' . $fromNAme . ' <' . $de . '>' . "\n"; // Remetente precisa ser uma caixa postal do mesmo dominio da hospedagem
$headers .= "Return-Path: $nome <$email>\n";
$headers .= "Reply-To: $nome <$email>\n";
$headers .= 'Cc: <' . $email . '>' . "\n"; // Com cópia para
// $headers .= 'Bcc: Teste Suporte <'.$to.'>' . "\n"; // Cópia oculta para
$subject = $nome . " - " . $fromNAme; //subject
$message = 'tests';
// mail($to, $subject, $message, $headers);
header('Location: ' . SITE_URL . 'login.php?resposta=cadastrado');
