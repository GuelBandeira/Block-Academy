<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <title>Login - Block Academy</title>
  <meta content="Templines" name="author" />
  <meta content="Block Academy" name="description" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="format-detection" content="telephone=no" />
  <meta content="IE=edge" http-equiv="X-UA-Compatible" />
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/libs.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="page-login">
  <!-- Loader-->
  <div id="page-preloader">
    <span class="spinner border-t_second_b border-t_prim_a"></span>
  </div>
  <!-- Loader end-->
  <div class="page-wrapper">

    <? @$pegar = $_GET['resposta'];
    if ($pegar == 'cadastrado') {
      echo '<div class="alert-sucess m-0" id="botaoClose">';
      echo '<span class="closebtn" onclick="fechar()">&times;</span>';
      echo '<strong>Um e-mail foi enviado</strong> para sua caixa de entrada.';
      echo '</div>';
    };
    if ($pegar == 'erro') {
      echo '<div class="alert-erro m-0" id="botaoClose">';
      echo '<span class="closebtn" onclick="fechar()">&times;</span>';
      echo '<strong>Erro!</strong> Login inválido.';
      echo '</div>';
    }

    if ($pegar == 'deslogado') {
      echo '<div class="alert-sucess m-0" id="botaoClose">';
      echo '<span class="closebtn" onclick="fechar()">&times;</span>';
      echo 'Sua conta foi <strong>deslogada com sucesso!</strong>';
      echo '</div>';
    }
    ?>

    <main class="page-first-screen">

      <div class="uk-grid uk-grid-small uk-child-width-1-2@s uk-flex-middle uk-width-1-1" data-uk-grid>

        <div class="logo-big">
          <img src="assets/img/logo.png" class='img-fluid' alt="logo" />
        </div>
        <div class="form-login">

          <div class="form-login__box">
            <div class="uk-heading-line uk-text-center">
              <span>Digite suas credenciais</span>
            </div>
            <form action="entrar.php" method="POST">
              <div class="uk-margin">
                <input style="background-color: rgba(255,255,255, .15); backdrop-filter: blur(5px); color:white;" class="uk-input" name="email" type="email" placeholder="Email" />
              </div>
              <div class="uk-margin">
                <input style="background-color: rgba(255,255,255, .15); backdrop-filter: blur(5px); color:white;" class="uk-input" type="password" placeholder="Senha" name="senha" />
              </div>
              <div class="uk-margin">
                <button id="botao" type="submit" class="uk-button-disabled uk-width-1-1" href="03_home.html" disabled>
                  Entrar
                </button>
              </div>
              <div class="uk-margin uk-text-center">
                <a href="index.html" style="color:#f35071; text-decoration:none;">Esqueceu sua senha?</a>
              </div>
              <hr />
              <div class="uk-text-center">
                <span>Não tem uma conta?</span><a class="uk-margin-small-left" href="registrar-tela.php" style="color:#f35071; text-decoration:none;">Registrar</a>
              </div>
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

</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

</script>

</html>