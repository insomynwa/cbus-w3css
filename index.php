<?php get_header(); ?>

<!-- Navbar -->
<div id="cbusnavi" class="w3-top">
 <ul class="w3-navbar w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-large w3-padding-16" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-padding-16 navilogo"><i class="fa fa-home w3-margin-right"></i>CBUS</a></li>
  <li class="w3-hide-small"><a href="#services" class="w3-padding-16">SERVICES</a></li>
  <li class="w3-hide-small"><a href="#clients" class="w3-padding-16">CLIENTS</a></li>
  <li class="w3-hide-small"><a href="#gallery" class="w3-padding-16">GALLERY</a></li>
  <li class="w3-hide-small"><a href="#about" class="w3-padding-16">ABOUT</a></li>
  <li class="w3-hide-small"><a href="#contact" class="w3-padding-16">CONTACT</a></li>
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top w3-padding-16" style="margin-top:43px;">
  <ul class="w3-navbar w3-left-align w3-large">
    <li><a href="#services">SERVICES</a></li>
    <li><a href="#clients">CLIENTS</a></li>
    <li><a href="#gallery">GALLERY</a></li>
    <li><a href="#about">ABOUT</a></li>
    <li><a href="#contact">CONTACT</a></li>
  </ul>
</div>

<!-- Main Slideshow -->
<div class="w3-display-container w3-animate-opacity">
  <img id="slide01" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow1']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide02" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow2']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img id="slide03" class="testimg w3-animate-fading" src="<?php echo get_option('cbusw3css_theme_option')['main_slideshow3']; ?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
</div>

<!-- Services -->
<div id="services" class="w3-row-padding w3-padding-64 w3-theme-d5">
  <div class="w3-container w3-center">
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
      // $max_n_col = 3;
      // $n_post = wp_count_posts('cbus_services')->publish;
      // $max_post_pcol = 0;
      while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="w3-third">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    <?php else: ?>

    <?php endif; ?>
  <!-- <div class="w3-third">
    <div class="">
      <h3>MULTIMEDIA SOLUTION</h3>
      <p>CBUS has a fully integrated production team who are prepared to create brilliance for you. Computer Graphics specialists are available to design and create on-screen presentations for any part of your event. From initial background looks and designs to full presentation</p>
    </div>
    <div class="">
      <h3>VIDEO PRODUCTION</h3>
      <p>In house video crew who shoot on location as well as edit content ensures continuity of service in both standard and high definition.</p>
    </div>
    <div class="">
      <h3>WEB PROGRAMMING</h3>
      <p>CBUS offers a wide array of web programming services specifically tailored to meet clients’ business needs.  Our programmers will guide you every step of the way to determine the primary aim of your website, target audience and how to maintain your website.</p>
    </div>
  </div>
  <div class="w3-third">
    <div class="">
      <h3>MULTIMEDIA</h3>
      <h4>EQUIPMENT RENTAL</h4>
      <p>Whether you need immediate solutions, comprehensive responses to Requests for Proposals (RFPs) or something in between, CBUS will provide a premium solution.   As a nimble, boutique business, CBUS will continue to grow and adapt to serve the equipment rental and production needs of the entire live event industry.</p>
    </div>
    <div class="">
      <h3>LIVE STREAMING</h3>
      <p>In house Video Conference is available using IP transmission. Full HD transmission is also available. Additional units are available for off site use in boardroom environment or within a large conference setup.</p>
    </div>
    <div class="">
      <h3>PROJECTION MAPPING</h3>
      <p>The right projector will lend extra authenticity and professionalism to any lecture or speech. Make sure you get only the best A/V equipment to secure your valuable moments.</p>
    </div>
  </div>
  <div class="w3-third">
    <div class="">
      <h3>MOTION GRAPHIC</h3>
      <p>Our talented designers are specialists in stylising creative corporate presentations.</p>
    </div>
    <div class="">
      <h3>EDGE BLENDING SYSTEM</h3>
      <p>Do you want to display videos and images using more than one projector? Do you want to adapt contents on various projection screens, but you don’t need the overhead of a “big media server”? CBUS offers a timeline based media server</p>
    </div>
    <div class="">
      <h3>3D ANIMATION</h3>
      <p>I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.​</p>
    </div>
    <div class="">
      <h3>AERIAL FOTO & VIDEO</h3>
      <p>Using radio controlled drone aircraft we supply superb quality images and video to provide a complete overview of the commercial and residential property.  This will make them much more attractive to potential clients.</p>
    </div>
  </div> -->
</div>

<!-- Clients -->
<div id="clients" class="w3-row-padding w3-center w3-padding-64">
  <div class="w3-container">
    <h2>CLIENTS</h2>
    <h5>Here, at CBUS, we create a one-stop shop solution for clients, which enables us to provide multimedia services from conceptto execution and delivery.</h5>
  </div>
  <div class="w3-quarter">
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
  </div>
  <div class="w3-quarter">
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
  </div>
  <div class="w3-quarter">
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
  </div>
  <div class="w3-quarter">
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
    <div class="w3-col">
      <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif">
    </div>
  </div>
</div>

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
      <p><i class="fa fa-map-marker w3-xlarge cbus-color-orange"></i> Komplek Tytyan Kencana</p>
      <p><i class="fa fa-phone w3-xlarge cbus-color-orange"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-xlarge cbus-color-orange"></i>  seagate@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white">
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
      </form>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 5,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php get_footer(); ?>
