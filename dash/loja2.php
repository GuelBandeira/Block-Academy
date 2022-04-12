<?
include '../conn.php';
$pagina = 'loja';
$titulo =  'Loja'; ?>

<? include '_head.php' ?>
<? include '_nav.php' ?>
<main class="page-main">
    <ul class="uk-breadcrumb">
        <li><a href="09_games-store.html"><span data-uk-icon="chevron-left"></span><span>Back to Store</span></a></li>
        <li><span>Frostpunk</span></li>
    </ul>
    <h3 class="uk-text-lead">Frostpunk</h3>
    <div class="uk-grid uk-grid-small" data-uk-grid>
        <div class="uk-width-2-3@xl">
            <div class="gallery">
                <div class="js-gallery-big gallery-big">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/c0.jpg" alt="image"></div>
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/c1.jpeg" alt="image"></div>
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/c2.jpeg" alt="image"></div>
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/c3.jpeg" alt="image"></div>
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/c4.jpeg" alt="image"></div>
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/c5.jpeg" alt="image"></div>
                            <div class="swiper-slide"><iframe src="https://www.youtube.com/embed/IUYs3mYgEPI" width="1920" height="1080" allowfullscreen data-uk-responsive></iframe></div>

                        </div>
                    </div>
                </div>
                <div class="js-gallery-small gallery-small">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> <img src="<?= SITE_URL ?>assets/img/c0.jpg" alt="image"></div>
                            <div class="swiper-slide"> <img src="<?= SITE_URL ?>assets/img/c1.jpeg" alt="image"></div>
                            <div class="swiper-slide"> <img src="<?= SITE_URL ?>assets/img/c2.jpeg" alt="image"></div>
                            <div class="swiper-slide"> <img src="<?= SITE_URL ?>assets/img/c3.jpeg" alt="image"></div>
                            <div class="swiper-slide"> <img src="<?= SITE_URL ?>assets/img/c4.jpeg" alt="image"></div>
                            <div class="swiper-slide"> <img src="<?= SITE_URL ?>assets/img/c5.jpeg" alt="image"></div>
                            <div class="swiper-slide"><img src="<?= SITE_URL ?>assets/img/cv.jpg" alt="image"></div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-3@xl">
            <div class="game-profile-card">
                <div class="game-profile-card__media"><img src="<?= SITE_URL ?>assets/img/game-profile-card.jpg" alt="game-profile-card"></div>
                <div class="game-profile-card__intro"><span>Frostpunk is a simulation and strategy game of managing a city struggling to survive after apocalyptic global cooling.</span></div>
                <ul class="game-profile-card__list">
                    <li>
                        <div>Reviews:</div>
                        <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i><span class="rating-vote">(433)</span></div>
                    </li>
                    <li>
                        <div>Release date:</div>
                        <div>24 Apr, 2018</div>
                    </li>
                    <li>
                        <div>Developer:</div>
                        <div>11 bit studios</div>
                    </li>
                    <li>
                        <div>Platforms:</div>
                        <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                    </li>
                </ul>
                <ul class="game-profile-card__type">
                    <li><span>Strategy</span></li>
                    <li><span>Survival</span></li>
                    <li><span>City Builder</span></li>
                    <li><span>Dark</span></li>
                </ul>
            </div>
            <div class="game-profile-price">
                <div class="game-profile-price__value">$13.99 USD</div><button class="uk-button uk-button-danger uk-width-1-1" type="button"><span class="ico_shopping-cart"></span><span>Buy Now</span></button><button class="uk-button uk-button-primary uk-width-1-1" type="button"><span class="ico_add-square"></span><span>Add to Favourites</span></button>
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