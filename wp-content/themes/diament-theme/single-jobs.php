<?php get_header(); ?>

<div class="site-wrapper">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<pre>
<?php print_r(get_post_meta(get_the_ID())); ?>
</pre>

<?php get_footer(); ?>