<?
include '../conn.php';
$pagina = 'loja';
$titulo =  'Loja'; ?>

<? include '_head.php' ?>
<? include '_nav.php' ?>

<body class="page-store">

    <!-- Loader-->
    <!-- Loader end-->
    <main class="page-main">
        <div class="widjet --filters">
            <div class="widjet__head">
                <h3 class="uk-text-lead">Games Store</h3>
            </div>
            <div class="widjet__body">
                <div class="uk-grid uk-child-width-1-6@xl uk-child-width-1-3@l uk-child-width-1-2@s uk-flex-middle uk-grid-small" data-uk-grid>
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
                            <option value="">Category: Strategy</option>
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
                    <div><select class="js-select">
                            <option value=""># of Players: All</option>
                            <option value="Platform 1">Platform 1</option>
                            <option value="Platform 2">Platform 2</option>
                            <option value="Platform 3">Platform 3</option>
                        </select></div>
                    <div>
                        <div class="price-range"><label>Price</label><input class="uk-range" type="range" value="2" min="0" max="10" step="0.1"></div>
                    </div>
                    <div class="uk-text-right"><a href="#!">25 items</a></div>
                </div>
            </div>
        </div>
        <div class="uk-grid uk-child-width-1-6@xl uk-child-width-1-3@l uk-child-width-1-2@s uk-flex-middle uk-grid-small" data-uk-grid>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-5.jpg" alt="Hell is other demons" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Hell is other demons</a>
                            <div class="game-card__genre">Shooter * Platformer</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.8</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$4.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-6.jpg" alt="Curse of the Dead Gods" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Curse of the Dead Gods</a>
                            <div class="game-card__genre">Action * Adventure</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.6</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$9.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-7.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-8.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-9.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-10.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-11.jpg" alt="Hell is other demons" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Hell is other demons</a>
                            <div class="game-card__genre">Shooter * Platformer</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.8</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$4.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-12.jpg" alt="Curse of the Dead Gods" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Curse of the Dead Gods</a>
                            <div class="game-card__genre">Action * Adventure</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.6</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$9.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-1.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-2.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-3.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-4.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-5.jpg" alt="Hell is other demons" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Hell is other demons</a>
                            <div class="game-card__genre">Shooter * Platformer</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.8</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$4.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-6.jpg" alt="Curse of the Dead Gods" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Curse of the Dead Gods</a>
                            <div class="game-card__genre">Action * Adventure</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.6</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$9.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-7.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-8.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-9.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-10.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-11.jpg" alt="Hell is other demons" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Hell is other demons</a>
                            <div class="game-card__genre">Shooter * Platformer</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.8</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$4.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-12.jpg" alt="Curse of the Dead Gods" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Curse of the Dead Gods</a>
                            <div class="game-card__genre">Action * Adventure</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.6</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$9.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-1.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-2.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-3.jpg" alt="Frostpunk" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> Frostpunk</a>
                            <div class="game-card__genre">Survival * Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.7</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$13.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="game-card">
                    <div class="game-card__box">
                        <div class="game-card__media"><a href="loja2.php"><img src="<?= SITE_URL ?>assets/img/game-4.jpg" alt="A Total War Saga: TROY" /></a></div>
                        <div class="game-card__info"><a class="game-card__title" href="loja2.php"> A Total War Saga: TROY</a>
                            <div class="game-card__genre">Strategy</div>
                            <div class="game-card__rating-and-price">
                                <div class="game-card__rating"><span>4.1</span><i class="ico_star"></i></div>
                                <div class="game-card__price"><span>$49.99 </span></div>
                            </div>
                            <div class="game-card__bottom">
                                <div class="game-card__platform"><i class="ico_windows"></i><i class="ico_apple"></i></div>
                                <div class="game-card__users">
                                    <ul class="users-list">
                                        <li><img src="<?= SITE_URL ?>assets/img/user-1.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-2.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-3.png" alt="user" /></li>
                                        <li><img src="<?= SITE_URL ?>assets/img/user-4.png" alt="user" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
    <script>
        function fechar() {
            $("#botaoClose").fadeOut(1100);
        }
    </script>
</body>

</html>