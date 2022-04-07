<?php
include 'conn.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha =md5($_POST['senha'].'blockaway');

echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Senha: $senha <br>";
$parametros = array('nome' => $nome, 'email'=>$email, 'senha'=>$senha); 
//$result_usuario = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$meuResultado = CRUD::INSERT(usuario,$parametros);

echo $meuResultado;
?>