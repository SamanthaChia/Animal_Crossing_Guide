<?php get_header(); ?>

<!-- site-content -->
<div class="site-content clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', get_post_format());

				endwhile;

				else :
					echo '<p class="error-msg">Uh Oh ! No content was found :(</p>';

				endif;
				?>
	

		</div><!-- /main-column -->
		
		<!-- paginate-links -->
		<div class="paginate-links">
		<?php 
			echo paginate_links();
		?>
		</div><!-- /paginate-links -->

	</div><!-- /site-content -->

<?php  get_footer(); ?>