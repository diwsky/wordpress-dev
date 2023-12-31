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
                    <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event')?>">
                     Events Home</a> 
                    <span class="metabox__main"><?php echo the_title() ?></span>
                </p>
            </div>
            <p><?php the_content() ?></p>
            

            <?php 
                $relatedPrograms = get_field('related_programs');

                if ($relatedPrograms) {
                ?>

                <hr class="section-break"/>

                <h1 class="headline headline--medium">Realted Program(s)</h1>

                <ul class="link-list min-list">
                <?php

                foreach($relatedPrograms as $program) {
                ?>

                    <li><a href="<?php echo get_the_permalink($program)?>"><?php echo get_the_title($program)?></a></li>
                <?php

                }
            } 

            ?>
              </ul>  
            
        </div>
        <?php
    }

    get_footer();
?>