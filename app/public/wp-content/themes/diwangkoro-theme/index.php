<?php get_header(); ?>
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
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="post-item">
                <div class="headline headline--medium headline--post-title">
                    <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a></div>
                <div class="metabox">Posted by <?php the_author_posts_link() ?> in <?php the_time('d F Y') ?> in <?php echo get_the_category_list(', ') ?></div>
                <div class="generic-content"><?php the_excerpt(); ?>
                    <p><a class="btn btn--blue" href="<?php the_permalink()?>">Continue reading &raquo;</a></p>
                </div>
            </div>
            
    <?php
        }
    ?>

    </div>
<?php get_footer(); ?>