<?php get_header(); ?>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>


            <div class="event-summary page">
              <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php
                $the_event_date = get_field( 'event_date', false, false );
                $eventDate = new DateTime($the_event_date);
                echo $eventDate->format( 'M' );
                ?></span>
                <span class="event-summary__day"><?php echo $eventDate->format('d'); ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php echo wp_trim_words(get_the_content(),50); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
              </div>
            </div>

    <?php 
    }
    ?>
    
    		<!-- paginate-links -->
		<div class="paginate-links">
  <?php 
  echo paginate_links();
  ?>
    </div><!-- /paginate-links -->
</div>

<?php get_footer(); ?>