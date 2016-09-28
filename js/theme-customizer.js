(function($){
	'use strict';

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

})(jQuery);