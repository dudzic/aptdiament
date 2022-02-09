<?php

$jobs_query = new WP_Query([
  'post_type'       => 'jobs',
  'posts_per_page'  => 8,
  'orderby'         => 'date',
  'order'           => 'DESC',
  // 'meta_query'      => [
  //   [
  //     'key'         => 'job_place',
  //     'value'       => 'Rzeszów'
  //   ]
  // ]
]);

?>

<section class="frontpage-job-offers">
  <div class="frontpage-job-offers-header container">
    <h2>Najnowsze oferty pracy</h2>
  </div>
  <div class="container">
    <?php if ( $jobs_query->have_posts() ) : ?>
    <div
        class="frontpage-job-offers-slider swiper-container"
    >
      <div class="swiper-wrapper">
        <?php
          while ( $jobs_query->have_posts() ) :
            $jobs_query->the_post();
            $id = get_the_ID();
          
            $job_period = get_field('job_period', $id);

            $is_period_specified = !empty( $job_period );
            
            if ( $is_period_specified ) {
              $job_period_from = $job_period['from'];
              $job_period_to = $job_period['to'];
            }
        ?>
        <div class="swiper-slide">
          <div class="frontpage-job-offers-item">
            <h3><?php the_title(); ?></h3>
            <p title="Miejsce pracy">
              <i class="fas fa-map-marker-alt"></i>
              <?php echo ( !empty(get_field('job_place', $id)) ) ? get_field('job_place', $id) : '-'; ?>
            </p>
            <p title="Okres pracy">
              <i class="fas fa-calendar-alt"></i>
              <?php
                if ( $is_period_specified ) {
                  echo $job_period_from . ' - ' . $job_period_to;
                }
              ?>
            </p>
            <p title="Wynagrodzenie">
                Wynagrodzenie: <?php echo ( !empty(get_field('job_salary', $id)) ) ? get_field('job_salary', $id) : 'niesprecyzowane'; ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn-small"
                >Aplikuj teraz</a
            >
          </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="frontpage-job-offers-slider-navigation">
        <div>
            <div
                class="
                    frontpage-job-offers-slider-navigation__next
                "
            >
                <i class="fas fa-chevron-right"></i>
            </div>
            <div
                class="
                    frontpage-job-offers-slider-navigation__prev
                "
            >
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
      </div>
    </div>
    <?php else : ?>
    <div class="frontpage-job-offers-not-found">
      <p>Nie znaleziono aktywnych ofert pracy</p>
      <a class="btn" href="<?php echo site_url('/#cv'); ?>">Wyślij nam swoje CV</a>
    </div>
    <?php endif; ?>
  </div>
</section>