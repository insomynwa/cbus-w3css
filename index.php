<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('',false)) { echo ' :'; } ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description'); ?>">

<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-black.css"> -->
<!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"> -->
<?php wp_head(); ?>
<script>
// conditionizr.com
// configure environment tests
conditionizr.config({
    assets: '<?php echo get_template_directory_uri(); ?>',
    tests: {}
});
</script>
</head>
<body id="myPage">

<!-- Side Navigation on click -->
<nav class="w3-sidenav w3-white w3-card-2 w3-animate-left" style="display:none;z-index:2" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-xxxlarge w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
  <a href="#">Link 5</a>
</nav>

<!-- Navbar -->
<div id="cbusnavi" class="w3-top">
  <?php // cbusw3css_nav(); ?>
 <ul class="w3-navbar w3-theme-d2 w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="#" class="w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a></li>
  <li class="w3-hide-small"><a href="#services" class="w3-hover-white">SERVICES</a></li>
  <li class="w3-hide-small"><a href="#clients" class="w3-hover-white">CLIENTS</a></li>
  <li class="w3-hide-small"><a href="#gallery" class="w3-hover-white">GALLERY</a></li>
  <li class="w3-hide-small"><a href="#about" class="w3-hover-white">ABOUT</a></li>
  <li class="w3-hide-small"><a href="#contact" class="w3-hover-white">CONTACT</a></li>
  <!-- <li class="w3-hide-small w3-dropdown-hover">
    <a href="#" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a>
    </div>
  </li> -->
 </ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:43px;">
  <ul class="w3-navbar w3-left-align w3-large w3-theme">
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
    <li class="w3-dropdown-hover">
    <a href="#" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-light-grey w3-card-4">
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a>
    </div>
  </li>
  </ul>
</div>

<div class="w3-display-container w3-animate-opacity">
  <img class="testimg w3-animate-fading" src="https://static.wixstatic.com/media/bc7053_b588845759754fa0b85284034f8a0719~mv2_d_2048_1536_s_2.jpg/v1/fill/w_645,h_484,al_c,q_90,usm_0.66_1.00_0.01/bc7053_b588845759754fa0b85284034f8a0719~mv2_d_2048_1536_s_2.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img class="testimg w3-animate-fading" src="https://static.wixstatic.com/media/bc7053_b0762b1ce1e14c088dcadf1814e3e2e3~mv2.jpg/v1/fill/w_796,h_448,al_c,q_90,usm_0.66_1.00_0.01/bc7053_b0762b1ce1e14c088dcadf1814e3e2e3~mv2.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img class="testimg w3-animate-fading" src="https://static.wixstatic.com/media/bc7053_9150e2f6df5940b88987cd450923f468~mv2.jpg/v1/fill/w_645,h_484,al_c,q_90,usm_0.66_1.00_0.01/bc7053_9150e2f6df5940b88987cd450923f468~mv2.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <img class="testimg w3-animate-fading" src="https://static.wixstatic.com/media/bc7053_7a13d61a48c24c6aaa0b49904bcb4faa~mv2.jpg/v1/fill/w_647,h_484,al_c,q_90,usm_0.66_1.00_0.01/bc7053_7a13d61a48c24c6aaa0b49904bcb4faa~mv2.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <!-- <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS</button>
  </div> -->
</div>

<!-- Modal -->
<!-- <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn"><i class="fa fa-remove"></i></span>
        <h4>Oh snap! We just showed you a modal..</h4>
        <h5>Because we can <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-container">
        <p>Cool huh? Ok, enough teasing around..</p>
        <p>Go to our <a class="w3-btn" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal footer</p>
      </footer>
    </div>
</div> -->

<!-- Services -->
<div id="services" class="w3-row-padding w3-padding-64 w3-theme-l1">
  <div class="w3-container w3-center">
    <h2>SERVICES</h2>
    <h5>With technology advancing at a rapid pace and constant changes taking place in the development community, we continuously evaluate the most recent trends that are creating a buzz in the development community. Therefore, CBUS offers various types of multimedia services such as</h5>
  </div>
  <div class="w3-third">
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
      <h3>AERIAL FOTO & vIDEO</h3>
      <p>Using radio controlled drone aircraft we supply superb quality images and video to provide a complete overview of the commercial and residential property.  This will make them much more attractive to potential clients.</p>
    </div>
  </div>
</div>

<!-- Clear floats -->
<div class="w3-clear"></div><br><br>

<!-- Clients -->
<div id="clients" class="w3-row-padding w3-center w3-padding-64">
  <div class="w3-container">
    <h2>CLIENTS</h2>
    <h5>Here, at CBUS, we create a one-stop shop solution for clients, which enables us to provide multimedia services from conceptto execution and delivery.</h5>
  </div>
  <div class="w3-third">
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
  <div class="w3-third">
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
  <div class="w3-third">
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

<!-- Clear floats -->
<div class="w3-clear"></div><br><br>

<!-- Gallery -->
<div id="gallery" class="w3-row w3-center w3-padding-64 w3-theme-l1">
  <div class="w3-container">
    <h2>GALLERY</h2>
  </div>
  <div class="w3-quarter">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
  </div>
  <div class="w3-quarter">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
  </div>
  <div class="w3-quarter">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
  </div>
  <div class="w3-quarter">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
    <img src="http://seeklogo.com/images/T/telkomsel-logo-70552E9308-seeklogo.com.gif" style="width:100%">
  </div>
</div>

<!-- Clear floats -->
<div class="w3-clear"></div><br><br>

<!-- ABOUT -->
<div id="about" class="w3-row-padding w3-center w3-padding-64">
  <div class="w3-threequarter">
    <h2>ABOUT</h2>
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
<!-- <div class="w3-container w3-padding-64 w3-center">
  <h2>OUR TEAM</h2>
  <p>Meet the team - our office rats:</p>

  <div class="w3-row"><br>

  <div class="w3-quarter">
    <img src="img_avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Johnny Walker</h3>
    <p>Web Designer</p>
  </div>

  <div class="w3-quarter">
    <img src="img_avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Rebecca Flex</h3>
    <p>Support</p>
  </div>

  <div class="w3-quarter">
    <img src="img_avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Jan Ringo</h3>
    <p>Boss man</p>
  </div>

  <div class="w3-quarter">
    <img src="img_avatar.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Kai Ringo</h3>
    <p>Fixer</p>
  </div>

  </div>
</div> -->

<!-- Row -->
<!-- <div class="w3-row-padding w3-padding-64 w3-theme-l1">

  <div class="w3-quarter">
    <h2>Our Portfolio</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="w3-quarter">
    <div class="w3-card-2 w3-white">
      <img src="img_fjords.jpg" alt="Vernazza" style="width:100%">
      <div class="w3-container">
        <h3>Customer 1</h3>
        <h4>Trade</h4>
        <p>Blablabla</p>
        <p>Blablabla</p>
        <p>Blablabla</p>
        <p>Blablabla</p>
      </div>
    </div>
  </div>

  <div class="w3-quarter">
  <div class="w3-card-2 w3-white">
    <img src="img_lights.jpg" alt="Cinque Terre" style="width:100%">
    <div class="w3-container">
    <h3>Customer 2</h3>
    <h4>Trade</h4>
    <p>Blablabla</p>
    <p>Blablabla</p>
    <p>Blablabla</p>
    <p>Blablabla</p>
    </div>
    </div>
  </div>

  <div class="w3-quarter">
  <div class="w3-card-2 w3-white">
    <img src="img_mountains.jpg" alt="Monterosso" style="width:100%">
    <div class="w3-container">
    <h3>Customer 3</h3>
    <h4>Trade</h4>
    <p>Blablabla</p>
    <p>Blablabla</p>
    <p>Blablabla</p>
    <p>Blablabla</p>
    </div>
    </div>
  </div>

</div> -->

<!-- Container -->
<!-- <div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-btn-floating-large w3-teal" style="position:absolute;top:-28px;right:24px;z-index:0;">
  <i class="fa fa-plus"></i></a>
</div>

<div class="w3-row-padding w3-center w3-padding-64">
    <h2>PRICING</h2>
    <p>Choose a pricing plan that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Pro</p>
        </li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Premium</p>
        </li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-btn w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
        </li>
      </ul>
    </div>
</div> -->

<!-- Container -->
<div id="contact" class="w3-container w3-padding-64 w3-theme-l1">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Bekasi, Indonesia</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  seagate@test.com</p>
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
      <button type="button" class="w3-btn w3-right w3-theme">Send</button>
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

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="https://www.facebook.com/cbus.multimedia" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="http://www.twitter.com/seagate80kg" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-btn-floating w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-btn w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<!-- Script For Side Navigation -->
<script>
function w3_open() {
    var x = document.getElementById("mySidenav");
    x.style.width = "300px";
    x.style.textAlign = "center";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("testimg");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);
}
</script>
<?php wp_footer(); ?>
</body>
</html>
