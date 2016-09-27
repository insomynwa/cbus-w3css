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
<body id="myPage">