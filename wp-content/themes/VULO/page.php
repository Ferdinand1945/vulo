<?php get_header(); ?>
<?php include 'menu.php'; ?>
<div class="container">

		<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
				endwhile; endif; 
			?>
</div>


<?php get_footer(); ?>