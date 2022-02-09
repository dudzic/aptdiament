<?php
get_header();
get_template_part('parts/layout/navigation', 'bar');
?>

<div class="site-wrapper">
  <div class="page-404 container">
    <h1>404 - Strony nie znaleziono</h1>
    <a class="btn" href="<?php echo site_url('/') ?>">Strona główna</a>
  </div>
</div>

<?php get_footer(); ?>