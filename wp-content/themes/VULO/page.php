<?php get_header(); ?>
<?php include 'menu.php'; ?>
</div>
<section class="smaller-section">
<div class="container">

   <div class="row">
   <div class="col">
      <h1>Om oss</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi maximus, pharetra nulla finibus, efficitur mi. Phasellus at ligula quis nunc varius rhoncus. Sed vitae justo at nisl ornare fermentum at sit amet leo. Donec lobortis elementum faucibus. Vestibulum tempor nec justo in iaculis. Duis tellus mauris, cLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus nisi maximus, pharetra nulla finibus, efficitur mi. Phasellus at ligul</p>
    </div>
    <div class="col">
        <div class="picEffect">
            <div class="overlay"><img src="/vulo/wp-content/uploads/2018/01/square-linkedin-256.png"><br><br><h3>Michael Vu</h3></div>
        <img style="width: 100%; width:230px; display:inline-block;" src="/vulo/wp-content/uploads/2018/01/mike.png">
            </div>
        <div class="picEffect">
            <div class="overlay"><img src="/vulo/wp-content/uploads/2018/01/square-linkedin-256.png"><br><br><h3>Fernando Lopez</h3></div>
        <img style="width: 100%; width:230px; display:inline-block;" src="/vulo/wp-content/uploads/2018/01/fernando.png">
        </div>
       </div>
  
  </div>
  </div>
 <script>
     
    
    jQuery('.picEffect').on('mouseover',function(){ jQuery(this).find('.overlay').stop().fadeIn();
});
       jQuery('.picEffect').mouseout(function(){ jQuery(this).find('.overlay').stop().fadeOut();
});
    </script>
 </section>
  <section class="diagonal">
    <div class="container">
    <h1>Såhär funkar det</h1>  
        <br><br>
        <div class="row">
            <div class="col img-diagonal"><img src="/vulo/wp-content/uploads/2018/01/037-placeholder.png"><br><br><p>Du behöver inte lämna din arbetsplats.</p></div>
            <div class="col img-diagonal"><img src="/vulo/wp-content/uploads/2018/01/037-handshake.png"><br><br><p>Signera avtal via BankID.</p></div>
            <div class="col img-diagonal"><img src="/vulo/wp-content/uploads/2018/01/037-growth.png"><br><br><p>Uppföjlining ingår alltid.</p></div>
        </div>

    </div>
 </section>
<div class="padding-m" style="background-color:#212121;">
    <div class="container">

   <div class="row">
   <div class="col" style="margin-top:100px; text-align:center; color: #fff;">
      <h1>Låt oss göra ett projekt ihop!</h1>
     <br>
     <h4>info@vulo.se</h4>
     <h4>+46 7007 123 45</h4>
    </div>
    <div class="col">
      	
      <?php echo do_shortcode( '[contact-form-7 id="24" title="Untitled"]' ); ?>
    </div>
  
  </div>
  </div>
    
</div>
<div>
<?php echo do_shortcode("[huge_it_maps id='1']"); ?>
</div>
<?php get_footer(); ?>