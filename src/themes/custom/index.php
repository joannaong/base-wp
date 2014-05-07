<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php 
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>