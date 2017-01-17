
			<script src="javascript/jquery-1.9.1.min.js"></script>
		    <script src="javascript/owl.carousel.js"></script>

		<script>    
		// scroll to top jquery // 
		$(document).ready(function () {
			// scroll to top // 
		    $(window).scroll(function () {
		        if ($(this).scrollTop() > 100) {
		            $('.scrollup').fadeIn();
		        } else {
		            $('.scrollup').fadeOut();
		        }
		    });

		      // window scroll jquery //
                     $(window).bind('scroll', function(event) {
                        var headerheight = $('nav').height();
                         console.log($(window).scrollTop());
                         if ($(window).scrollTop() > 212) {
                             $('body').addClass('fixed');
                         }
                         else {
                             $('body').removeClass('fixed');
                         }
                     });
                     

		    $('.scrollup').click(function () {
		        $("html, body").animate({
		            scrollTop: 0
		        }, 600);
		        return false;
		    });
			// scroll to top // 


			// navigation menu start // 
	    		$('nav span i').click(function(event) {
	    			$('nav').toggleClass('mobile-menu').removeClass('search-open');
	    		});

	    		$('nav span strong').click(function(event) {
	    			$('nav').toggleClass('search-open').removeClass('mobile-menu');
	    		});
	    		
	    		$('nav  > ul > .m-menu').click(function(event) {
			        $('.submenu-open').removeClass("submenu-open");     
			        $(this).addClass("submenu-open");
	    		});	
			
			// navigation menu end // 		

			// resize jquery //
			var $window = $(window), $ul = $('nav');
	             $(window).on('resize', function () {
	                // when window is less than 979px //
	                if ($window.width() < 987) {
	                   $ul.addClass('hide');
	               }else{
	                $ul.removeClass('hide')};
	         });
			// resize jquery //


			// remove all the class after body click //
					$(document).on('click', 'body', function () {
			 		$('.search-term-wrapper').removeClass('show-option');
			        $('.search-term-wrapper').removeClass('show-option');	
			        $('nav').removeClass('search-open');		
			        $('nav').removeClass('mobile-menu');		
					});
					     $(document).on('click', '.search-term,  .search-open, .mobile-menu',  function(event) {
							  event.stopImmediatePropagation();
						   });
					// remove all the class after body click //	

					 
                // window scroll jquery //	

			});		
					
	</script>	
