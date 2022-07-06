<nav class="navbar navbar-expand-md navbar-light">

    <header>
        <!-- <a href="<?php echo esc_url(home_url('')); ?>"> -->
        <a href="http://localhost:3000/saveinvest/dzialki/enklawadziwnowek/home-enklawa-dziwnowek/">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/logo-black.svg" alt="Logo" />
        </a>
    </header>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
        <div class="enkalwa-dziwnowek-nav__container__burger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>

    <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawadziwnowek/o-enklawie") !== false) {; ?> active  <?php }; ?>" href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/o-enklawie">O Enklawie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawadziwnowek/lokalizacja") !== false) {; ?> active  <?php }; ?>" href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/lokalizacja">Lokalizacja</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawadziwnowek/ceny-dzialek") !== false) {; ?> active  <?php }; ?>" href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/ceny-dzialek">Ceny działek</a>
            </li>
            <li class="nav-logo">
                <a href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/strona-glowna">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/invest-enklawa-dziwnowek/logo-black.svg" alt="Logo" />
                </a>
            </li>
            <li class="nav-item nav-item-hidden">
                <a class="nav-link<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawadziwnowek/finansowanie") !== false) {; ?> active  <?php }; ?>" href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/finansowanie">Finansowanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawadziwnowek/galeria") !== false) {; ?> active  <?php }; ?>" href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/galeria">Galeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if (strpos($_SERVER['REQUEST_URI'], "/dzialki/enklawadziwnowek/kontakt") !== false) {; ?> active  <?php }; ?>" href="<?php echo esc_url(home_url('')); ?>/dzialki/enklawadziwnowek/kontakt">Kontakt</a>
            </li>

        </ul>
    </div>
</nav>