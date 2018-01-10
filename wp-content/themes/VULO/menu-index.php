<div class="header">
	<div class="container">
		<div class="logo">
		<h1 class=""><a href="<?php echo get_bloginfo( 'wpurl' );?>">VULO</h1> <?php /*echo get_bloginfo( 'name' ); */?>
		</div>
          
		<nav class="blog-nav">
			<li><a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
			<?php wp_list_pages( '&title_li=' ); ?> 
            <span class="socialmedia">
                <li>
                    <a href="https://www.facebook.com/vulo.se" target="_blank"><img src="/vulo/wp-content/uploads/2018/01/facebook-logo.png"></a>
                </li>
                 <li>
                     <a href="https://www.instagram.com/vulo.se/" target="_blank">
                         <img src="/vulo/wp-content/uploads/2018/01/instagram-social-network-logo-of-photo-camera.png"></a></li>
            </span>
		</nav>
	</div>