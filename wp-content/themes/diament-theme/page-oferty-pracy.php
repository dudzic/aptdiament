<?php
// Template Name: Oferty pracy
get_header();
$paged = get_query_var('paged', 1);

$jobs_query = new WP_Query([
  'post_type'       => 'jobs',
  'posts_per_page'  => 8,
  'orderby' => 'date',
  'order' => 'DESC',
  'paged' => $paged
]);

?>

<div class="site-wrapper">

  <?php get_template_part('parts/layout/navigation', 'bar'); ?>

  <div style="background-image: url('https://via.placeholder.com/1920x1080');">
    <header class="job-offers-header" style="background-image: url('https://via.placeholder.com/1920x1920');">
      <div class="container">
        <h1>Oferty pracy APT Diament</h1>
        <h2>Mamy to czego szukasz</h2>
      </div>
    </header>
    <div class="job-offer-wrapper container">
      <!-- <aside class="job-offers-sidebar">
        <h4>Filtry</h4>
        <div>
            <form action="" id="job-offers-filter-form"></form>
        </div>
      </aside> -->
      <main class="job-offers-main-content">
        <section class="job-offers-list">
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
          <div class="job-offers-item">
            <div class="job-offers-item__grid">
              <div>
                <h3><?php the_title(); ?></h3>
                <?php
                  if ( !empty(get_field('job_excerpt', $id)) ) {
                    echo '<p>' . get_field('job_excerpt', $id) . '</p>';
                  }
                ?>
                <a href="<?php the_permalink(); ?>" class="btn-small">Zobacz ofertę pracy</a>
              </div>
              <div>
                <ul class="job-offers-item__specification">
                  <li>
                      <i class="fas fa-map-marker-alt"></i>
                      <?php echo ( !empty(get_field('job_place', $id)) ) ? get_field('job_place', $id) : '-'; ?>
                  </li>
                  <li>
                    <i class="fas fa-calendar-alt"></i>
                    <?php
                      if ( $is_period_specified ) {
                        echo $job_period_from . ' - ' . $job_period_to;
                      }
                    ?>
                  </li>
                  <li>
                      <i class="fas fa-euro-sign"></i>
                      <?php echo ( !empty(get_field('job_salary', $id)) ) ? get_field('job_salary', $id) : 'niesprecyzowane'; ?>
                  </li>
                  <li>
                    Nr ref.:&nbsp;<strong><?php echo ( !empty(get_field('job_reference', $id)) ) ? get_field('job_reference', $id) : 'brak'; ?></strong>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php
          endwhile;
          wp_reset_postdata();  
        ?>
        </section>
      </main>
    </div>
  </div>

</div>

<?php get_footer(); ?>