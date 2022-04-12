
<?php
include '../conn.php';
$condicao = false;
$cpf = str_replace(array('.', '-', '(', ')', '/'), '', $_POST['cpf']);
$cep = str_replace(array('.', '-', '(', ')', '/'), '', $_POST['cep']);

$resultado = Funcoes::validacpf($cpf);

$idUser = $_SESSION['idUser'];

$infos =  CRUD::SELECT('', 'tabela_infos', 'id_usu=:qualUser', array('qualUser' => $idUser), 'order by id desc');
foreach ($infos as $key => $value) {
    $cpf = $value['cpf'];
    $cep = $value['cep'];
    $bairro = $value['bairro'];
    $estado = $value['estado'];
    $endereco = $value['endereco'];
    $numero = $value['numero'];
    $cidade = $value['cidade'];

    if ($cpf && $cidade && $cep && $bairro && $estado && $numero && $endereco) {
        $condicao = true;
    }
}

//UPDATE 
if ($condicao) {
    if ($resultado) {
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];
        $numero = $_POST['numero'];
        $parametros = array('cpf' => $cpf, 'endereco' => $endereco, 'cidade' => $cidade, 'bairro' => $bairro, 'estado' => $estado, 'cep' => $cep, 'numero' => $numero);

        CRUD::UPDATE('tabela_infos', $parametros, 0);
        header('Location: ' . SITE_URL . 'dash/profile.php?resposta=atualizado');
    } else {
        header('Location: ' . SITE_URL . 'dash/profile.php?resposta=cpfinvalido');
    }
    //INSERIR
} else {
    if ($resultado) {
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];
        $numero = $_POST['numero'];
        $parametros = array('id_usu' => $idUser, 'cpf' => $cpf, 'endereco' => $endereco, 'cidade' => $cidade, 'bairro' => $bairro, 'estado' => $estado, 'cep' => $cep, 'numero' => $numero);
        CRUD::INSERT('tabela_infos', $parametros);
        header('Location: ' . SITE_URL . 'dash/profile.php?resposta=inserido');
    } else {
        header('Location: ' . SITE_URL . 'dash/profile.php?resposta=cpfinvalido');
    }
}
