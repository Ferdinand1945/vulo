<div class="header">
	<div class="container">
		<div class="logo">
		<h1 class=""><a href="<?php echo get_bloginfo( 'wpurl' );?>">VULO</h1> <?php /*echo get_bloginfo( 'name' ); */?>
		</div>
		<nav class="blog-nav">
			<li><a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
			<?php wp_list_pages( '&title_li=' ); ?> 
            
		</nav>
	</div>