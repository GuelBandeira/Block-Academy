<body class="page-home dark-theme">

    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->

    <div class="page-wrapper">
        <header class="page-header">
            <div class="page-header__inner">
                <div class="page-header__sidebar">
                    <div class="page-header__menu-btn"><button class="menu-btn ico_menu is-active"></button></div>
                    <img src="<?= SITE_URL ?>assets/img/logo.png" alt="logo"><span class="page-header__logo_text">
                </div>
                <div class="page-header__content">
                    <div class="page-header__search">
                        <div class="search">
                            <div class="search__input"><i class="ico_search"></i><input type="search" name="search" placeholder="Search"></div>
                            <div class="search__btn"><button type="button"><i class="ico_microphone"></i></button></div>
                        </div>
                    </div>
                    <div class="page-header__action"><a class="action-btn" href="#!"><i class="ico_message"></i><span></span></a><a class="action-btn" href="#!"><i class="ico_notification"></i><span></span></a>
                        <div> Seja bem vindo, <strong><?= $_SESSION["nome"] ?></strong></div>
                        <a href="../logout.php">
                            <svg id="logout" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                                <path d="M10 9.408l2.963 2.592-2.963 2.592v-1.592h-8v-2h8v-1.592zm-2-4.408v4h-8v6h8v4l8-7-8-7zm6-3c-1.787 0-3.46.474-4.911 1.295l.228.2 1.396 1.221c1.004-.456 2.114-.716 3.287-.716 4.411 0 8 3.589 8 8s-3.589 8-8 8c-1.173 0-2.283-.26-3.288-.715l-1.396 1.221-.228.2c1.452.82 3.125 1.294 4.912 1.294 5.522 0 10-4.477 10-10s-4.478-10-10-10z" />
                            </svg> <a class="profile" href="#!"><img src="<?= SITE_URL ?>assets/img/profile.png" alt="profile"></a>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-content">
            <aside class="sidebar is-show" id="sidebar">
                <div class="sidebar-box">
                    <ul class="uk-nav">
                        <li class="<?= $pagina == 'index' ? 'uk-active' : '' ?>"><a href="<?= SITE_URL ?>dash"><i class="ico_home"></i><span>Home</span></a></li>
                        <li class="uk-nav-header">Principal</li>

                        <li><a href="<?= SITE_URL ?>dash/favourites.php"><i class="ico_favourites"></i><span>Compartilhe e
                                    ganhe</span><span class="count">15</span></a>
                        </li>

                        <li class="<?= $pagina == 'loja' ? 'uk-active' : '' ?>"><a href="loja.php"><i class="ico_store"></i><span>Loja</span></a></li>
                        <li><a href="11_market.html"><i class="ico_market"></i><span>Meus estudos</span></a></li>
                        <li><a href="12_streams.html"><i class="ico_streams"></i><span>Lives</span></a></li>


                        <li class="uk-nav-header">Minha conta</li>
                        <li class="<?= $pagina == 'profile' ? 'uk-active' : '' ?>"><a href="profile.php"><i class="ico_profile"></i><span>Profile</span></a></li>
                        <li><a href="05_favourites.html"><i class="ico_favourites"></i><span>Favourites</span><span class="count">15</span></a></li>

                        <li><a href="08_wallet.html"><i class="ico_wallet"></i><span>Pagamentos</span></a></li>

                        <li class="uk-nav-header">Support</li>
                        <li><a href="#modal-report" data-uk-toggle><i class="ico_report"></i><span>Report</span></a>
                        </li>
                        <li><a href="#modal-help" data-uk-toggle><i class="ico_help"></i><span>Help</span></a></li>
                    </ul>
                </div>
            </aside>