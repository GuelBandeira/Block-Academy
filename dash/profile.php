<?
include '../conn.php';
$pagina = 'profile';
$titulo =  'Perfil';
?>
<? include '_head.php' ?>
<? include '_nav.php' ?>
<main class="page-main">
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
                    <div id="edit">⠀</div>
                    <div id="confirmacao">⠀</div>
                    <div><a class="uk-button uk-button-danger" onclick="editar()" href="#!"><svg xmlns="http://www.w3.org/2000/svg" fill="white" width="12" height="12" viewBox="0 0 24 24">
                                <path d="M24 10h-10v-10h-4v10h-10v4h10v10h4v-10h10z" />
                            </svg><span class="uk-margin-small-left" id="editar">Adicionar Informações</span></a></div>
                </div>
            </div>
            <div class=" widjet --bio hidden" id="hide">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">Informações</h3>
                </div>
                <div class="widjet__body">
                    <form method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input data-mask="000.000.000-00" name="cpf" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu CPF">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Estado">Estado</label>
                                    <select name="estado" class="uk-input" style="background-color: #363636; color:white" name="estado">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Cidade">Cidade</label>
                                    <input name="cidade" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite sua Cidade">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <input name="endereco" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Endereço">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <input data-mask="00000-000" name="cep" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Endereço">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="bairro">Bairro</label>
                                    <input name="bairro" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Bairro">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="numero">Número</label>
                                    <input name="numero" class="uk-input" style="background-color: #363636; color:white" placeholder="Digite seu Numero">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="uk-button uk-button-danger mt-3" name="enviar" style="float: right; background-image:linear-gradient(to bottom, #e40835, #D3029B)" align="right"><svg xmlns="http://www.w3.org/2000/svg" fill="white" style="margin-right: 5px;" width="16" height="12" viewBox="0 0 24 24">
                                        <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z" />
                                    </svg>Confirmar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <? if (isset($_POST['enviar'])) {
                $cpf = $_POST['cpf'];
                $endereco = $_POST['endereco'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];
                $estado = $_POST['estado'];
                $cep = $_POST['cep'];
                $numero = $_POST['numero'];
                $parametros = array('cpf' => $cpf, 'endereco' => $endereco, 'cidade' => $cidade, 'bairro' => $bairro, 'estado' => $estado, 'cep' => $cep, 'numero' => $numero);
                CRUD::INSERT('tabela_infos', $parametros);
            } ?>

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
                $idUser = $_SESSION["idUser"];
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js" integrity="sha512-hAJgR+pK6+s492clbGlnrRnt2J1CJK6kZ82FZy08tm6XG2Xl/ex9oVZLE6Krz+W+Iv4Gsr8U2mGMdh0ckRH61Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function editar() {
        $('#hide').removeClass('hidden');
        $('#hide').css({
            -webkit - animation,
            "expand 5s";
        })
    }
</script>
</body>

</html>