<nav class="main-nav">
  <div class="main-nav__container container--fluid">
    <div class="main-nav-logo">
      <a href="<?php echo site_url('/') ?>">
        <img src="<?php echo get_theme_file_uri('/images/logo/navbar_text.png'); ?>" alt="" />
      </a>
    </div>
    <div class="main-nav__menu">
      <ul>
        <li>
          <a href="<?php echo site_url(); ?>">Start</a>
        </li>
        <li>
          <a href="<?php echo site_url('/oferty-pracy'); ?>">Oferty pracy</a>
        </li>
        <li>
          <a href="<?php echo site_url('/dla-pracownika'); ?>">Dla pracownika</a>
        </li>
        <li>
          <a href="<?php echo site_url('/dla-pracodawcy'); ?>">Dla pracodawcy</a>
        </li>
        <li>
          <a href="<?php echo site_url('/blog'); ?>">Blog</a>
        </li>
        <li>
          <a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a>
        </li>
      </ul>
    </div>
    <div class="main-nav-mobile">
      <a class="js-open-menu"><i class="fas fa-bars"></i></a>
    </div>
  </div>
</nav>