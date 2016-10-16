(function($){
	'use strict';

	// SLOGAN
	wp.customize('cbusw3css_theme_option[slogan_text]', function (value) {
		value.bind(function(to){
			$("#cbusslogan p").text(to);
		});
	});

	// SLIDESHOW
	wp.customize('cbusw3css_theme_option[main_slideshow1]', function( value ) {
		value.bind(function(to) {
			// console.log(to);
			$("#slide01").attr('src', to );
		});
	});
	wp.customize('cbusw3css_theme_option[main_slideshow2]', function( value ) {
		value.bind(function(to) {
			//console.log(to);
			$("#slide02").attr('src', to );
		});
	});
	wp.customize('cbusw3css_theme_option[main_slideshow3]', function( value ) {
		value.bind(function(to) {
			//console.log(to);
			$("#slide03").attr('src', to );
		});
	});
	wp.customize('cbusw3css_theme_option[main_slideshow4]', function( value ) {
		value.bind(function(to) {
			//console.log(to);
			$("#slide04").attr('src', to );
		});
	});
	wp.customize('cbusw3css_theme_option[main_slideshow5]', function( value ) {
		value.bind(function(to) {
			//console.log(to);
			$("#slide05").attr('src', to );
		});
	});
	wp.customize('cbusw3css_theme_option[main_slideshow6]', function( value ) {
		value.bind(function(to) {
			//console.log(to);
			$("#slide06").attr('src', to );
		});
	});

})(jQuery);