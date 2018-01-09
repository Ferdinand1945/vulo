<?php get_header(); ?>

 <?php
echo do_shortcode('[smartslider3 slider=1]');
?>
		</div>

	<div class="container">
	<div class="row">

		<div class="">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

	</div> <!-- /.row -->
<nav>
	<ul class="pager">
		<li><?php next_posts_link( 'Previous' ); ?></li>
		<li><?php previous_posts_link( 'Next' ); ?></li>
	</ul>
</nav>
 <div class="row">
    <div class="col">
      <h1>Vi bygger din hemsida</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi maximus, pharetra nulla finibus, efficitur mi. Phasellus at ligula quis nunc varius rhoncus. Sed vitae justo at nisl ornare fermentum at sit amet leo. Donec lobortis elementum faucibus. Vestibulum tempor nec justo in iaculis. Duis tellus mauris, c</p>
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
</div>
  <section class="diagonal">
    <div class="container">
    <h1>Digaonal Section</h1>  
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi maximus, pharetra nulla finibus, efficitur mi. Phasellus at ligula quis nunc varius rhoncus. Sed vitae justo at nisl ornare fermentum at sit amet leo. Donec lobortis elementum faucibus. Vestibulum tempor nec justo in iaculis. Duis tellus mauris, consequat vel dolor sed, volutpat sollicitudin enim. Maecenas velit dolor, efficitur sagittis interdum ac, pellentesque et velit. Nulla odio erat, pharetra non posuere id, sollicitudin sed erat. Nulla vitae est ligula. Ut aliquam porta orci. Nulla faucibus leo in sapien finibus, vel egestas lorem varius.
    </p>
    </div>
 </section>
<section>
<div class="container">
 <h1>Några av våra kunder</h1>
 </div>
</section>
<?php get_footer(); ?>
