<div class="container container--narrow page-section">                                                      
<div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> <span class="metabox__main">Posted on <?php the_time('F j, Y'); ?> | by <?php the_author_posts_link(); ?> | in <?php echo get_the_category_list(', '); ?> </span></p>
                </div>
    <div class="generic-content">
        <h3 class="page-banner__title titlepost"><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>

    <hr>

</div>