<?php 
    get_header();

    while (have_posts()) {
        the_post();
        ?>
        <div class="page-banner">
          <div class="page-banner__bg-image" style="background-image: url('<?php echo get_theme_file_uri('/images/ocean.jpg')?>')"></div>
          <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title()?></h1>
            <div class="page-banner__intro">
              <p>We'll get back to this later!</p>
            </div>
          </div>
        </div>
        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                    <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program')?>">
                     All Programs</a> 
                    <span class="metabox__main"><?php echo the_title() ?></span>
                </p>
            </div>
            <p><?php the_content() ?></p>




            <?php 
                $today = date('Ymd');
                $relatedPrograms = new WP_Query(array(
                    'post_type' => 'event',
                    'posts_per_page' => -1,
                    'meta_key' => 'event_date',
                    'order' => 'ASC',
                    'orderby' => 'meta_value_num',
                    'meta_query' => array(
                      array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                      ),
                      array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"'.get_the_ID().'"',
                      )
                    )
                ));

                if ($relatedPrograms->have_posts()) {
                  echo '<hr class="section-break"/>';

                echo '<h2>Upcoming '.get_the_title().' Events</h2>';

                while($relatedPrograms->have_posts()) {
                    $relatedPrograms->the_post();
    
                    $date = new DateTime(get_field('event_date'));
                    
                    ?>
                    
    
                    <div class="event-summary">
                        <a class="event-summary__date t-center" href="<?php the_permalink()?>">
                          <span class="event-summary__month"><?php echo $date->format('M')?></span>
                          <span class="event-summary__day"><?php echo $date->format('d')?></span>
                        </a>
                        <div class="event-summary__content">
                          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink()?>"><?php the_title() ?></a></h5>
                          <p><?php echo wp_trim_words(get_the_content(),20) ?><a href="<?php the_permalink()?>" class="nu gray">Read more</a></p>
                        </div>
                    </div>
    
                    <?php
                }
                }
    
              ?>
        </div>
        <?php
    }

    get_footer();
?>