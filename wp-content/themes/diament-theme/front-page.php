<?php
// Template Name: Strona główna
get_header();

get_template_part('parts/layout/modal', 'cv');
?>


<div class="site-wrapper frontpage">

  <?php get_template_part('parts/layout/navigation', 'bar'); ?>

  <?php get_template_part('parts/frontpage/header'); ?>

  <main>

    <?php
      get_template_part('parts/frontpage/cv');

      get_template_part('parts/frontpage/jobs');

      get_template_part('parts/frontpage/services');

      get_template_part('parts/frontpage/blog');

      get_template_part('parts/frontpage/newsletter');
    ?>

  </main>

</div>

<?php get_footer(); ?>