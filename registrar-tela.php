<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TeamHost - Join now and play mighty games!</title>
    <meta content="Templines" name="author">
    <meta content="TeamHost" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/libs.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="page-login">
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <? @$pegar = $_GET['resposta'];

    if ($pegar == 'emailjacadastrado') {
        echo '<div class="alert-erro m-0" id="botaoClose">';
        echo '<span class="closebtn" onclick="fechar()">&times;</span>';
        echo 'Já existe um usuário <strong>cadastrado com esse e-mail.</strong> ';
        echo '</div>';
    };
    ?>
    <div class="page-wrapper">
        <main class="page-first-screen">
            <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-flex-middle uk-width-1-1" data-uk-grid>
                <div class="logo-big">
                    <img src="assets/img/logo.png" alt="logo">
                </div>
                <div class="form-login">
                    <div class="form-login__social">
                    </div>
                    <div class="form-login__box">
                        <div class="uk-heading-line uk-text-center"><span>Registre-se na plataforma</span></div>
                        <form action="verificarEmail.php" method="POST">
                            <div class="uk-margin"><input style="background-color: rgba(255,255,255, .15); backdrop-filter: blur(5px); color:white;" class="uk-input" name="email" id="email" type="email" placeholder="Email"></div>
                            <div class="uk-margin"><input style="background-color: rgba(255,255,255, .15); backdrop-filter: blur(5px); color:white;" class="uk-input" name="nome" type="text" placeholder="Nome Completo"></div>
                            <div class="uk-margin"><input style="background-color: rgba(255,255,255, .15); backdrop-filter: blur(5px); color:white;" class="uk-input" name="senha" type="password" placeholder="Senha"></div>
                            <input class="form-control" type="hidden" name="true" value="true">
                            <div class="uk-margin"><button type="submit" id="botao" class="uk-button-disabled uk-width-1-1" type="button" disabled>Registrar</button></div>
                            <div class="uk-text-center"><span>Você já tem uma conta?</span><a class="uk-margin-small-left" href="login.php" style="color:#f35071">Entrar</a></div>
                        </form>
                    </div>

                </div>
            </div>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/verify.js"></script>
    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        function fechar() {
            $("#botaoClose").fadeOut(1100);
        }
    </script>
</body>

</html>