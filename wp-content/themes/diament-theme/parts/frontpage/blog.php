<?php

$blog_query = new WP_Query([
  'post_type'       => 'post',
  'posts_per_page'  => 6,
]);

?>

<section class="frontpage-blog">
  <header class="frontpage-blog-header">
      <div class="container">
          <h3>Najnowsze wpisy na blogu</h3>
          <p class="paragraph">
              Lorem ipsum dolor sit amet consectetur
              adipisicing elit. Eaque alias aspernatur dicta
              dolores voluptatem illo consectetur, illum
              nesciunt dolore ab.
          </p>
          <a href="<?php echo site_url('/blog'); ?>" class="btn">Przejdź do bloga</a>
      </div>
  </header>

  <?php if ( $blog_query->have_posts() ) : ?>
  <div class="frontpage-blog-grid container">
    <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
      <article class="frontpage-blog-item">
          <div class="frontpage-blog-item__image">
              <img
                  src="<?php echo (has_post_thumbnail()) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/800x600'; ?>"
                  alt=""
              />
          </div>
          <div>
              <h4><?php the_title(); ?></h4>
              <p class="paragraph">
                  Lorem ipsum dolor sit amet consectetur
                  adipisicing elit. Voluptatem illo cupiditate
                  quos quae corporis distinctio quibusdam
                  enim, delectus eum, earum, perspiciatis
                  error cum nemo.
              </p>
              <a href="<?php the_permalink(); ?>">Czytaj więcej</a>
          </div>
      </article>
    <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </div>
  <?php endif; ?>

  <div>
      <div class="frontpage-blog-see-more container">
          <a href="<?php echo site_url('/blog'); ?>" class="btn">Zobacz więcej postów</a>
      </div>
  </div>
</section>