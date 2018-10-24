<?php get_header(); ?>

<div class="container container--narrow page-section">
<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="post-item">
    <h3 class="page-banner__title titlepost"><a class="title-a-tag" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p class="post-info">Posted on <?php the_time('F j, Y'); ?> | by <?php the_author_posts_link(); ?> | in <?php echo get_the_category_list(', '); ?> </p>

      <div class="generic-content">
      <p><?php echo wp_trim_words(get_the_content(),50); ?>
        <a href="<?php the_permalink(); ?>">Find out more &raquo;</a>
        </p>
      </div>

    </div>
    		<!-- paginate-links -->
		<div class="paginate-links">
  <?php }
  echo paginate_links();
?>
</div><!-- /paginate-links -->
</div>

<?php get_footer(); ?>