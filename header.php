<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('',false)) { echo ' :'; } ?><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description'); ?>">

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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Navbar -->
<nav id="cbusnavi" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">CBUS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#gallery">GALLERY</a></li>
        <li><a href="#clients">CLIENTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>