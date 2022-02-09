<header
    class="frontpage-header"
    style="
        background-image: url('<?php echo get_theme_file_uri('/images/frontpage/header_background.jpg'); ?>');
    "
>
    <div class="container">
        <img
            class="frontpage-header__image"
            src="<?php get_theme_file_uri('/images/logo/navbar_illustration.png'); ?>"
            alt=""
        />
        <h1 class="frontpage-header__subtitle">
            Agencja Pracy Tymaczowej APT Diament - Nowy Sącz
        </h1>
        <h2 class="frontpage-header__title">
            Znajdź stanowisko idealnie dopasowane do Twoich potrzeb.
        </h2>
        <div class="frontpage-header-form">
            <form class="frontpage-header-form__form">
                <input
                    type="text"
                    name="search_occupation"
                    id="search_occupation"
                    placeholder="Szukam pracy na stanowisku..."
                />
                <input
                    type="submit"
                    class="btn"
                    name="search_submit"
                    id="search_submit"
                    value="Szukaj"
                />
            </form>
        </div>
        <a class="frontpage-header-cv" href="<?php echo site_url('/#cv'); ?>">
            Wyślij nam swoje CV
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</header>