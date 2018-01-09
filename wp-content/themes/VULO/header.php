<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
	<script src="../js/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
	<script>
	jQuery(window).on("scroll", function() {
    if(jQuery(window).scrollTop() > 50) {
        jQuery(".header").addClass("active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       jQuery(".header").removeClass("active");
    }
});
	</script>
	<script>
	jQuery(function () {
  count = 0;
  wordsArray = ["hemsida", "webbservice", "branch", "idé"];
  setInterval(function () {
    count++;
    jQuery("#word").fadeOut(400, function () {
      jQuery(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    });
  }, 2000);
});
	</script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
	<div class="header">
	<div class="container">
		<div class="logo">
		<h1 class=""><a href="<?php echo get_bloginfo( 'wpurl' );?>"><img src=""></a></h1> <?php /*echo get_bloginfo( 'name' ); */?>
			<p class=""><?php echo get_bloginfo( 'description' ); ?></p>
		</div>
		<nav class="blog-nav">
			<li><a class="blog-nav-item active" href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
			<?php wp_list_pages( '&title_li=' ); ?> 
            
		</nav>
	</div>
		
