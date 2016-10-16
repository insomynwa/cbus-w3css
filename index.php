<?php get_header(); ?>

<!-- Navbar -->
<div id="cbusnavi" class="w3-top">
 <ul class="w3-navbar w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-large w3-padding-16" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#cbusslideshow" class="w3-padding-16 navilogo ascroll"><i class="fa fa-home w3-margin-right"></i>CBUS</a></li>
  <li class="w3-hide-small"><a href="#services" class="w3-padding-16 ascroll">SERVICES</a></li>
  <li class="w3-hide-small"><a href="#clients" class="w3-padding-16 ascroll">CLIENTS</a></li>
  <li class="w3-hide-small"><a href="#gallery" class="w3-padding-16 ascroll">GALLERY</a></li>
  <li class="w3-hide-small"><a href="#about" class="w3-padding-16 ascroll">ABOUT</a></li>
  <li class="w3-hide-small"><a href="#contact" class="w3-padding-16 ascroll">CONTACT</a></li>
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top w3-padding-16" style="margin-top:43px;">
  <ul class="w3-navbar w3-left-align w3-large">
    <li><a class="ascroll" href="#services">SERVICES</a></li>
    <li><a class="ascroll" href="#clients">CLIENTS</a></li>
    <li><a class="ascroll" href="#gallery">GALLERY</a></li>
    <li><a class="ascroll" href="#about">ABOUT</a></li>
    <li><a class="ascroll" href="#contact">CONTACT</a></li>
  </ul>
</div>

<!-- Main Slideshow -->
<div id="cbusslideshow" class="w3-display-container w3-animate-opacity">
  <img id="slide01" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow1']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide02" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow2']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide03" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow3']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide04" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow4']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide05" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow5']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide06" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow6']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div id="cbusslogan" class="w3-padding w3-tag w3-margin-bottom w3-opacity">
    <p class=""><?php echo get_option('cbusw3css_theme_option')['slogan_text']; ?></p>
  </div>
</div>

<!-- Services -->
<div id="services" class="w3-row-padding w3-padding-64 w3-center w3-theme-d5">
  <div class="w3-container">
    <h2>SERVICES</h2>
    <h5>With technology advancing at a rapid pace and constant changes taking place in the development community, we continuously evaluate the most recent trends that are creating a buzz in the development community. Therefore, CBUS offers various types of multimedia services such as</h5>
  </div>
  <?php
    if(get_query_var('paged') ) $paged = get_query_var('paged');
    if(get_query_var('page') ) $paged = get_query_var('page');

    $query = new WP_Query(
      array(
        'post_type' => 'cbus_services',
        'paged'     => $paged
        )
      );

    if( $query->have_posts() ) : ?>
      <?php 
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="w3-third">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>

    <?php endif; ?>
</div>

<!-- Clients -->
<div id="clients" class="w3-row-padding w3-center w3-padding-64">
  <div class="w3-container">
    <h2>CLIENTS</h2>
    <h5>Here, at CBUS, we create a one-stop shop solution for clients, which enables us to provide multimedia services from conceptto execution and delivery.</h5>
  </div>
  <?php
    if(get_query_var('paged') ) $paged = get_query_var('paged');
    if(get_query_var('page') ) $paged = get_query_var('page');

    $query = new WP_Query(
      array(
        'post_type' => 'cbus_clients',
        'paged'     => $paged
        )
      );
    $max_col = 5;
    $step_post = 1;
    $n_post = wp_count_posts('cbus_clients')->publish;
    //var_dump($n_post);
    if( $query->have_posts() ) : ?>
      <?php 
      while ( $query->have_posts() ) : ?>
      <div class="w3-row-padding">
      <?php for( $i=0; $i<$max_col; $i++): $query->the_post(); ?>
        <div id="cbusclient-img" class="w3-col" style="width:20%">
          <?php the_content(); ?>
          <?php $step_post ++; ?>
        </div>
        <?php if($step_post>$n_post) break; ?>
      <?php endfor; ?>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>

    <?php endif; ?>
  <!-- <div class="w3-row-padding">
    <div class="w3-col m3">
      <img src="http://localhost:81/CBUS/wp-content/uploads/2016/09/aA1KAop_460s-200x300.jpg" style="width:100%">
    </div>
    <div class="w3-col m3">
      <img src="http://localhost:81/CBUS/wp-content/uploads/2016/09/a0pq3ed_460s-300x291.jpg" style="width:100%">
    </div>
    <div class="w3-col m3 w3-card">
      <img src="http://localhost:81/CBUS/wp-content/uploads/2016/09/aA1KAop_460s-200x300.jpg" style="max-height:100px;">
    </div>
    <div class="w3-col m3 w3-card">
      <img src="http://localhost:81/CBUS/wp-content/uploads/2016/09/a0pq3ed_460s-300x291.jpg" style="max-height:100px;">
    </div>
    <div class="w3-col m3">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="max-height:100px;">
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-col w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-card" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-col" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
    <div class="w3-col" style="width:20%">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    </div>
  </div> -->
</div><!-- end #clients -->

<!-- Gallery -->
<div id="gallery" class="w3-row w3-center w3-padding-64 w3-theme-d5">
  <div class="w3-container">
    <h2>GALLERY</h2>
  </div>
  <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '51' ); } ?>
</div>

<!-- Clear floats -->
<div class="w3-clear"></div><br><br>

<!-- ABOUT -->
<div id="about" class="w3-row-padding w3-center w3-padding-64">
  <div class="w3-container">
    <h2>ABOUT</h2>
  </div>
  <div class="w3-threequarter">
    <p>You might have always wondered as to how to make simple messages interesting, and complex messages simple to communicate. The answer lies at the heart of Multimedia technology. By using the creative magic of Voice, Video, Music, Images, Thought, and Creativity, simple messages can be made captivating, and extremely complex or technical messages can be communicated effectively.
    Here, at CBUS, we create a one-stop shop solution for clients, which enables us to provide multimedia services from conceptto execution and delivery.</p>
    <p>CBUS is made up of creative talent from a variety of disciplines and life experiences. We listen, we think, we strategize. We realize every one is unique and that key insights can come from anyone. Together, we work hard with an unstoppable dedication to integrity and creating success for our clients</p>
  </div>
  <div class="w3-quarter">
    <div class="w3-card-4">
      <img src="https://static.wixstatic.com/media/bc7053_1cddd04e254043f0986ef0959d4b44aa~mv2_d_3264_2448_s_4_2.jpg/v1/crop/x_682,y_541,w_1906,h_1354/fill/w_330,h_235,al_c,q_80,usm_0.66_1.00_0.01/bc7053_1cddd04e254043f0986ef0959d4b44aa~mv2_d_3264_2448_s_4_2.jpg" style="width:100%" >
    </div>
  </div>
</div>

<!-- Contact -->

<!-- Container -->
<div id="contact" class="w3-container w3-padding-64 w3-theme-l1">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-home w3-xlarge cbus-color-orange"></i> Komplek Tytyan Kencana </p>
      <!-- <p><i class="fa fa-phone w3-xlarge cbus-color-orange"></i>  +00 1515151515</p> -->
      <p>&nbsp;&nbsp;&nbsp;&nbsp; Kavling Haji Ukar No. 24</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp; Marga Mulya</p>
      <p>&nbsp;&nbsp;&nbsp;&nbsp; 17126, Bekasi Utara</p>
      <p><i class="fa fa-envelope-o w3-xlarge cbus-color-orange"></i> seagate80kg@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <!-- <form class="w3-container w3-card-4 w3-padding-16 w3-white">
      <div class="w3-group">      
        <label class="w3-label">Name</label>
        <input class="w3-input" type="text">
      </div>
      <div class="w3-group">      
        <label class="w3-label">Email</label>
        <input class="w3-input" type="text">
      </div>
      <div class="w3-group">      
        <label class="w3-label">Subject</label>
        <input class="w3-input" type="text">
      </div>  
      <input class="w3-check" type="checkbox" checked>
      <label class="w3-validate">I Like it!</label>
      <button type="button" class="w3-btn w3-right w3-theme-l1">Send</button>
      </form> -->
      <?php echo do_shortcode('[pirate_forms]'); ?>
    </div>
  </div>
</div>

<!-- Google Maps -->
<?php  echo do_shortcode('[wpgmza id="1"]'); ?>
<!-- <div id="googleMap" style="width:100%;height:420px;"></div >-->
<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
<script>
// var myCenter = new google.maps.LatLng(41.878114, -87.629798);

// function initialize() {
// var mapProp = {
//   center: myCenter,
//   zoom: 5,
//   scrollwheel: false,
//   draggable: false,
//   mapTypeId: google.maps.MapTypeId.ROADMAP
//   };

// var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

// var marker = new google.maps.Marker({
//   position: myCenter,
// });

// marker.setMap(map);
// }

// google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php get_footer(); ?>
