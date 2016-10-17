(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		// Add smooth scrolling to all links in navbar + footer link
		  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top
		      }, 900, function(){
		   
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		    } // End if
		  });
		  
		  $(window).scroll(function() {
		    $(".slideanim").each(function(){
		      var pos = $(this).offset().top;

		      var winTop = $(window).scrollTop();
		        if (pos < winTop + 600) {
		          $(this).addClass("slide");
		        }
		    });
		  });
		// $("a.ascroll").click( function(e) {
		// 	e.preventDefault();
		// 	if( $("#navDemo").hasClass('w3-show') ) {
		// 		$("#navDemo").removeClass('w3-show');
		// 	}
		// 	var targetID = $(this).attr('href');
		// 	$("html, body").animate( {
		// 		scrollTop: $(""+targetID).offset().top
		// 	}, 1500);
		// });
		$("#clients img").removeAttr('width height sizes alt srcset').css({'width':'100%','max-height':'250px'});
		
	});

	
	
})(jQuery, this);