<?
include '../conn.php';
$pagina = 'profile';
$titulo =  'Perfil';
$idUser = $_SESSION["idUser"];

$infos =  CRUD::SELECT('', 'tabela_infos', 'id_usu=:qualUser', array('qualUser' => $idUser), 'order by id desc');
foreach ($infos as $key => $value) {
    $cpf = $value['cpf'];
    $cep = $value['cep'];
    $bairro = $value['bairro'];
    $estado = $value['estado'];
    $endereco = $value['endereco'];
    $numero = $value['numero'];
    $cidade = $value['cidade'];
}
?>

<!-- $cpf != '' ? $cpf : '' -->

<? include '_head.php' ?>
<? include '_nav.php' ?>

<main class="page-main">
    <? @$pegar = $_GET['resposta'];
    if ($pegar == 'inserido') {
        echo '<div class="alert-sucess2 m-0" id="botaoClose">';
        echo '<span class="closebtn" onclick="fechar()">&times;</span>';
        echo '<strong>Informações inseridas </strong> com sucesso.';
        echo '</div>';
    };
    if ($pegar == 'cpfinvalido') {
        echo '<div class="alert-erro m-0" id="botaoClose">';
        echo '<span class="closebtn" onclick="fechar()">&times;</span>';
        echo 'O CPF informado está <strong>inválido!</strong>';
        echo '</div>';
    }
    if ($pegar == 'atualizado') {
        echo '<div class="alert-sucess2 m-0" id="botaoClose">';
        echo '<span class="closebtn" onclick="fechar()">&times;</span>';
        echo 'Suas informações foram <strong>atualizadas!</strong>';
        echo '</div>';
    }
    ?>
    <div class="uk-grid" data-uk-grid>

        <div class="uk-width-2-3@l">
            <div class="widjet --profile">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">Profile</h3>
                </div>

                <div class="widjet__body">

                    <div class="user-info">
                        <!-- <img src="<?= SITE_URL ?>assets/img/profile.png" alt="profile"> -->
                        <div class="user-info__avatar" style="color:white;"><?= Funcoes::iniciais(($_SESSION["nome"])) ?></div>
                        <div class="user-info__box">
                            <div class="uk-margin">

                                <div class="user-info__title"><?= $_SESSION["nome"] ?></div>
                                <div style="font-weight:100;"><?= $_SESSION['email'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div><a class="uk-button uk-button-danger" onclick="editar()" href="#!"><svg xmlns="http://www.w3.org/2000/svg" fill="whi   " width="12" height="12" viewBox="0 0 24 24">
                                <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                            </svg><span class="uk-margin-small-left" id="editar">Adicionar Informações</span></a></div>
                </div>
            </div>

            <div class=" widjet --bio " id="hide">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">Informações</h3>
                </div>

                <div class="widjet__body">
                    <form method="POST" action="inserirInfo.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input data-mask="000.000.000-00" value="<?= @$cpf ?>" name="cpf" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu CPF">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Estado">Estado</label>
                                    <input name="estado" value="<?= @$estado ?>" class="uk-input" style="background-color: #363636; color:white;" placeholder="Digite seu Estado">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Cidade">Cidade</label>
                                    <input name="cidade" value="<?= @$cidade ?>" class="uk-input" style="background-color: #363636; color:white;" placeholder="Digite sua Cidade">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <input name="endereco" value="<?= @$endereco ?>" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Endereço">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <input data-mask="00000-000" value="<?= @$cep ?>" name="cep" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Endereço">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bairro">Bairro</label>
                                    <input name="bairro" value="<?= @$bairro ?>" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Bairro">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero">Número</label>
                                    <input name="numero" value="<?= @$numero ?>" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Numero">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="uk-button uk-button-danger mt-3" name="enviar" style="float: right; background-image:linear-gradient(to bottom, #e40835, #D3029B)" align="right"><svg xmlns="http://www.w3.org/2000/svg" fill="white" style="margin-right: 5px;" width="16" height="12" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>Confirmar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="widjet --activity">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">Recent Activity</h3><a href="#!">View All</a>
                </div>
                <div class="widjet__body">
                    <div class="widjet-game">
                        <div class="widjet-game__media"><a href="10_game-profile.html"><img src="<?= SITE_URL ?>assets/img/activity-1.jpg" alt="image"></a></div>
                        <div class="widjet-game__info"><a class="widjet-game__title" href="10_game-profile.html"> Grand Theft Auto V</a>
                            <div class="widjet-game__record">3 hours on record</div>
                            <div class="widjet-game__last-played">last played on 18 Feb, 2021</div>
                        </div>
                    </div>
                    <div class="widjet-game-info">
                        <div class="widjet-game-info__title">Achievement Progress</div>
                        <div class="widjet-game-info__progress"><span>50 of 150</span>
                            <div class="progress-box">
                                <div class="progress-line" style="width: 80%"></div>
                            </div>
                        </div>
                        <div class="widjet-game-info__acheivement">
                            <ul>
                                <li><img src="<?= SITE_URL ?>assets/img/acheivement-1.png" alt="acheivement"></li>
                                <li><img src="<?= SITE_URL ?>assets/img/acheivement-2.png" alt="acheivement"></li>
                                <li><img src="<?= SITE_URL ?>assets/img/acheivement-3.png" alt="acheivement"></li>
                                <li><img src="<?= SITE_URL ?>assets/img/acheivement-4.png" alt="acheivement"></li>
                                <li><img src="<?= SITE_URL ?>assets/img/acheivement-5.png" alt="acheivement"></li>
                                <li><span>+10</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widjet__body">
                    <div class="widjet-game">
                        <div class="widjet-game__media"><a href="10_game-profile.html"><img src="<?= SITE_URL ?>assets/img/activity-2.jpg" alt="image"></a></div>
                        <div class="widjet-game__info"><a class="widjet-game__title" href="10_game-profile.html"> Counter-Strike: Global Offensive</a>
                            <div class="widjet-game__record">0.2 hours on record</div>
                            <div class="widjet-game__last-played">last played on 25 Apr, 2021</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-3@l">
            <div class="widjet --upload">
                <?
                $select = $DB->query("SELECT id_usu FROM tabela_infos WHERE id_usu='$idUser'");
                $result = $select->fetch(PDO::FETCH_ASSOC);
                $rowCount = $select->rowCount();
                if (!($rowCount >= 1)) {
                    echo '<div class="widjet__head warning">';
                    echo '<div class="row">';
                    echo '<div class="col-12">';
                    echo '<h3 class="uk-text-lead border-white">Aviso<svg xmlns="http://www.w3.org/2000/svg" class="svg" fill="white" width="40" height="40" viewBox="0 0 24 24">';
                    echo '<path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.5 6h3l-1 8h-1l-1-8zm1.5 12.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" />';
                    echo '</svg>';
                    echo '</h3>';
                    echo '</div>';
                    echo '<div class="col-12 mt-3">';
                    echo '<p> Você não preenchou os campos ao lado, por favor insira suas informações.</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    $condicao = true;
                }
                ?>
            </div>
            <div class="widjet --badges">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">Badges</h3><a href="#!">View All</a>
                </div>
                <div class="widjet__body">
                    <ul class="badges-list">
                        <li><img src="<?= SITE_URL ?>assets/img/badge-1.png" alt="badge"></li>
                        <li><img src="<?= SITE_URL ?>assets/img/badge-2.png" alt="badge"></li>
                        <li><img src="<?= SITE_URL ?>assets/img/badge-3.png" alt="badge"></li>
                    </ul>
                </div>
            </div>
            <div class="widjet --games">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">Games</h3><a href="#!">View All</a>
                </div>
                <div class="widjet__body">
                    <ul class="games-list">
                        <li><img src="<?= SITE_URL ?>assets/img/game-1.png" alt="game"></li>
                        <li><img src="<?= SITE_URL ?>assets/img/game-2.png" alt="game"></li>
                        <li><img src="<?= SITE_URL ?>assets/img/game-3.png" alt="game"></li>
                        <li><img src="<?= SITE_URL ?>assets/img/game-4.png" alt="game"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
</div>
</div>
<div class="page-modals">
    <div class="uk-flex-top" id="modal-report" data-uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h2 class="uk-modal-title">Report</h2>
            <form class="uk-form-stacked" action="#">
                <div class="uk-margin">
                    <div class="uk-form-label">Subject</div>
                    <div class="uk-form-controls"><select class="js-select">
                            <option value="">Choose Subject</option>
                            <option value="Subject 1">Subject 1</option>
                            <option value="Subject 2">Subject 2</option>
                            <option value="Subject 3">Subject 3</option>
                        </select></div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-label">Details</div>
                    <div class="uk-form-controls"><textarea class="uk-textarea" name="details" placeholder="Try to include all details..."></textarea></div>
                    <div class="uk-form-controls uk-margin-small-top">
                        <div data-uk-form-custom><input type="file"><button class="uk-button uk-button-default" type="button" tabindex="-1"><i class="ico_attach-circle"></i><span>Attach File</span></button></div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-grid uk-flex-right" data-uk-grid>
                        <div><button class="uk-button uk-button-small uk-button-link">Cancel</button></div>
                        <div><button class="uk-button uk-button-small uk-button-danger">Submit</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="uk-flex-top" id="modal-help" data-uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close></button>
            <h2 class="uk-modal-title">Help</h2>
            <div class="search">
                <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
            </div>
            <div class="uk-margin-small-left uk-margin-small-bottom uk-margin-medium-top">
                <h4>Popular Q&A</h4>
                <ul>
                    <li><img src="<?= SITE_URL ?>assets/img/svgico/clipboard-text.svg" alt="icon"><span>How to Upload Your Developed Game</span></li>
                    <li><img src="<?= SITE_URL ?>assets/img/svgico/clipboard-text.svg" alt="icon"><span>How to Go Live Stream</span></li>
                    <li><img src="<?= SITE_URL ?>assets/img/svgico/clipboard-text.svg" alt="icon"><span>Get in touch with the Creator Support Team</span></li>
                </ul>
                <ul>
                    <li><a href="#!">browse all articles</a></li>
                    <li><a href="#!">Send Feedback</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="<?= SITE_URL ?>assets/js/libs.js"></script>
<script src="<?= SITE_URL ?>assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js" integrity="sha512-hAJgR+pK6+s492clbGlnrRnt2J1CJK6kZ82FZy08tm6XG2Xl/ex9oVZLE6Krz+W+Iv4Gsr8U2mGMdh0ckRH61Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function submit() {
        $("input").each(function() {
            var input = $(this); // This is the jquery object of the input, do what you will
        });
    }

    var par = $('#hide');
    $(par).hide();

    function editar() {
        $('#hide').slideToggle();
    }

    function fechar() {
        $("#botaoClose").fadeOut(1100);
    }
</script>
</body>

</html>