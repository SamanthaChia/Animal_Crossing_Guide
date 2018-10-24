<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Welcome!</h1>
      <h2 class="headline headline--medium">We think you&rsquo;ll find it helpful here.</h2>
      <h3 class="headline headline--small">Not sure where to begin? How about a short introduction of what we do?</h3>
      <a href="<?php echo site_url('/welcome-to-animal-crossing-guide') ?>" class="btn btn--large btn--green">Let&rsquo;s Begin!</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming 2 Events</h2>
        
          <?php
            $today = date('Ymd');
            $frontpageEvents = new WP_Query(array(
              'posts_per_page'=>2,
              'post_type' => 'event',
              'meta_key' => 'event_date',
              //meta data -> extra or custom data associated with the post.
              'orderby'=> 'meta_value_num',
              'order'=>'ASC',
              'meta_query'=> array(
                array(
                  'key'=> 'event_date',
                  'compare' => '>=',
                  'value'=> $today,
                  'type'=>'numeric'
                )
              )
            ));

            while($frontpageEvents->have_posts()) {
              $frontpageEvents->the_post(); ?>

            <div class="event-summary">
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
                <p><?php echo wp_trim_words(get_the_content(),25); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
              </div>
            </div>

            <?php }
            

          ?>
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/event'); ?>" class="btn btn--dark-orange">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Latest 2 Posts From Our Blog!</h2>
        <?php 
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));
          

          while($homepagePosts->have_posts()) {
            $homepagePosts->the_post();?>
         <div class="event-summary">
          <a class="event-summary__date event-summary__date--green t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M');
            ?></span>
            <span class="event-summary__day"><?php the_time('d');
            ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(),25); ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
          <?php }
          wp_reset_postdata();
        ?>

        
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog') ?>" class="btn btn--green">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/animalcrossing-anime.png') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Animal Crossing Anime</h2>
        <p class="t-center">Get more information on the Animal Crossing Anime!</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/anime') ?>" class="btn btn--orange">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/animalcrossing-pocketcamp.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Pocket Camp</h2>
        <p class="t-center">Get more details about the mobile application!</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/pocket-camp') ?>" class="btn btn--orange">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/animalcrossing-newleaf.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Animal Crossing : New Leaf</h2>
        <p class="t-center">Details on the 3DS game, Animal Crossing New Leaf!</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/new-leaf') ?>" class="btn btn--orange">Learn more</a></p>
      </div>
    </div>
  </div>
</div>

<?php  get_footer(); ?>