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
            <div class="widjet --filters">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">My Favourites</h3>
                </div>
                <div class="widjet__body">
                    <div class="uk-grid uk-child-width-1-4@xl uk-child-width-1-2@s uk-flex-middle uk-grid-small" data-uk-grid>
                        <div class="uk-width-1-1">
                            <div class="search">
                                <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                                <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                            </div>
                        </div>
                        <div><select class="js-select">
                                <option value="">Sort By: Price</option>
                                <option value="Price 1">Price 1</option>
                                <option value="Price 2">Price 2</option>
                                <option value="Price 3">Price 3</option>
                            </select></div>
                        <div><select class="js-select">
                                <option value="">Category: All</option>
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                            </select></div>
                        <div><select class="js-select">
                                <option value="">Platform: All</option>
                                <option value="Platform 1">Platform 1</option>
                                <option value="Platform 2">Platform 2</option>
                                <option value="Platform 3">Platform 3</option>
                            </select></div>
                        <div class="uk-text-right"><a href="#!">15 items</a></div>
                    </div>
                </div>
            </div>
            <div class="game-card --horizontal favourites-game">
                <div class="game-card__box">
                    <div class="game-card__media"><a href="10_game-profile.html"><img src="<?= SITE_URL ?>assets/img/stronghold.jpg" alt="Stronghold Kingdoms" /></a></div>
                    <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Stronghold Kingdoms</a>
                        <div class="game-card__genre">Strategy * Medieval * City Builder</div>
                        <div class="game-card__rating-and-price">
                            <div class="game-card__rating"><span>3.9</span><i class="ico_star"></i></div>
                            <div class="game-card__price"><span>Free</span></div>
                        </div>
                        <div class="game-card__bottom">
                            <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                        </div>
                    </div>
                    <div class="game-card__more"><a href="10_game-profile.html"><i class="ico_more"></i></a></div>
                </div>
            </div>
            <div class="game-card --horizontal favourites-game">
                <div class="game-card__box">
                    <div class="game-card__media"><a href="10_game-profile.html"><img src="<?= SITE_URL ?>assets/img/pubg.jpg" alt="PUBG: BATTLEGROUNDS" /></a></div>
                    <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> PUBG: BATTLEGROUNDS</a>
                        <div class="game-card__genre">Battle Royal * Survival * Multiplayer</div>
                        <div class="game-card__rating-and-price">
                            <div class="game-card__rating"><span>4.2</span><i class="ico_star"></i></div>
                            <div class="game-card__price"><span>$29.99 USD</span></div>
                        </div>
                        <div class="game-card__bottom">
                            <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                        </div>
                    </div>
                    <div class="game-card__more"><a href="10_game-profile.html"><i class="ico_more"></i></a></div>
                </div>
            </div>
            <div class="game-card --horizontal favourites-game">
                <div class="game-card__box">
                    <div class="game-card__media"><a href="10_game-profile.html"><img src="<?= SITE_URL ?>assets/img/total-war.jpg" alt="Total War: ROME REMASTERED" /></a></div>
                    <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Total War: ROME REMASTERED</a>
                        <div class="game-card__genre">Strategy * Action * Medieval</div>
                        <div class="game-card__rating-and-price">
                            <div class="game-card__rating"><span>4.4</span><i class="ico_star"></i></div>
                            <div class="game-card__price"><span>$29.99 USD</span></div>
                        </div>
                        <div class="game-card__bottom">
                            <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                        </div>
                    </div>
                    <div class="game-card__more"><a href="10_game-profile.html"><i class="ico_more"></i></a></div>
                </div>
            </div>
            <div class="game-card --horizontal favourites-game">
                <div class="game-card__box">
                    <div class="game-card__media"><a href="10_game-profile.html"><img src="<?= SITE_URL ?>assets/img/hunt-showdown.jpg" alt="Hunt: Showdown" /></a></div>
                    <div class="game-card__info"><a class="game-card__title" href="10_game-profile.html"> Hunt: Showdown</a>
                        <div class="game-card__genre">Hunting * Horror * Multiplayer</div>
                        <div class="game-card__rating-and-price">
                            <div class="game-card__rating"><span>4.3</span><i class="ico_star"></i></div>
                            <div class="game-card__price"><span>$39.99 USD</span></div>
                        </div>
                        <div class="game-card__bottom">
                            <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                        </div>
                    </div>
                    <div class="game-card__more"><a href="10_game-profile.html"><i class="ico_more"></i></a></div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-3@l">
            <div class="widjet --my-list">
                <div class="widjet__head">
                    <h3 class="uk-text-lead">My Lists</h3>
                </div>
                <div class="widjet__body">
                    <ul class="my-game-list">
                        <li class="my-game-item">
                            <div class="my-game-item__letter" style="background: #4398E8;">S</div>
                            <div class="my-game-item__title">Strategy Games</div>
                            <div class="my-game-item__more"><a href="#!"><i class="ico_more"></i></a></div>
                        </li>
                        <li class="my-game-item">
                            <div class="my-game-item__letter" style="background: #FF5B5B;">A</div>
                            <div class="my-game-item__title">Action Games</div>
                            <div class="my-game-item__more"><a href="#!"><i class="ico_more"></i></a></div>
                        </li>
                        <li class="my-game-item">
                            <div class="my-game-item__letter" style="background: #C73C00;">M</div>
                            <div class="my-game-item__title">Multiplayer Games</div>
                            <div class="my-game-item__more"><a href="#!"><i class="ico_more"></i></a></div>
                        </li>
                        <li class="my-game-item">
                            <div class="my-game-item__letter" style="background: #939393;">B</div>
                            <div class="my-game-item__title">Best Games</div>
                            <div class="my-game-item__more"><a href="#!"><i class="ico_more"></i></a></div>
                        </li>
                        <li class="my-game-item">
                            <div class="my-game-item__letter" style="background: #FF3ED4;">R</div>
                            <div class="my-game-item__title">Racing Games</div>
                            <div class="my-game-item__more"><a href="#!"><i class="ico_more"></i></a></div>
                        </li>
                    </ul><button class="creat-list-btn" href="#!"><i class="ico_add-square"></i><span>Create New List</span></button>
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
</body>

</html>