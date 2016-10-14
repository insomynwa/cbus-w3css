(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$("a.ascroll").click( function(e) {
			e.preventDefault();
			if( $("#navDemo").hasClass('w3-show') ) {
				$("#navDemo").removeClass('w3-show');
			}
			var targetID = $(this).attr('href');
			$("html, body").animate( {
				scrollTop: $(""+targetID).offset().top
			}, 1500);
		});
		$("#cbusclient-img img").removeAttr('width height sizes alt srcset').css({'width':'100%','max-height':'250px'});
		
	});

	
	
})(jQuery, this);