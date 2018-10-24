<div class="container container--narrow page-section">                                                      
<div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Events Home</a> <span class="metabox__main"><?php
                  $the_event_date = get_field( 'event_date', false, false );
                  $eventDate = new DateTime($the_event_date);
                  echo $eventDate->format('d'),' ', $eventDate->format( 'M' ); ?></span></p>
                </div>
    <div class="generic-content">
        <h3 class="page-banner__title titlepost"><?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>

    <hr>

</div>