

	jQuery(document).ready(function() {
		
		
		
		jQuery('#play').masonry({
  			itemSelector: '.box',
 			columnWidth: 100,
 			gutterWidth: 20,
 			isAnimated: true		
		});
		$('#play').infinitescroll({
 
			navSelector  : "div.navigation",            
						   // selector for the paged navigation (it will be hidden)
			nextSelector : "div.navigation a:first",    
						   // selector for the NEXT link (to page 2)
			itemSelector : "#play div.box"          
						   // selector for all items you'll retrieve
		  },
		  function( newElements ) {
    		var $newElems = $( newElements );
    		jQuery('#play').masonry( 'appended', $newElems );
		  	jQuery('.close').click(function() {
			
			jQuery('.open').fadeOut();
			jQuery('.close').fadeOut();
		});	
		  	jQuery('.play-thumb').click(function(event) {
//			event.preventDefault();
//			jQuery(this).parent('.box').find('.open').fadeIn();
//			jQuery(this).parent('.box').find('.close').fadeIn();
//			var open = jQuery(this).parent('.box').find('.open').height();
//			console.log(open);
			
			
		 });
		  });
		setTimeout(function(){ 
			jQuery(".content").addClass("in");
			jQuery('#play').masonry( 'reload' );
		 	jQuery("body").animate({
 				'background-position-x': '-900px',
  				'background-position-y': '0'
			}, 750, 'linear');
			jQuery("html").animate({
 				'background-position-x': '-900px',
  				'background-position-y': '0'
			}, 750, 'linear');
			
		}, 10);
		
		var h = jQuery(window).height();
		var w = jQuery(window).width();
	
		jQuery(".content").height(h).width(w);
		jQuery("#global").height(h).width(w);
		jQuery("#wrapper").height(h);
		jQuery(".content").hide();
 		jQuery(".content").fadeIn();
		jQuery(".close").height(h).hide();
		jQuery(".open").hide();
		jQuery("body").css("overflow", "auto");
		var biobigh = h / 1.5;
		var biobigw = biobigh * .82;
	//	jQuery(".biobig").height(biobigh).width(biobigw);
	//	jQuery(".open p").width(biobigw);
	//	jQuery(".open h2").width(biobigw);

			
		

		
		jQuery(window).resize(function() {
			var h = jQuery(window).height();
			var w = jQuery(window).width();
			jQuery(".content").height(h).width(w);
			jQuery("#global").height(h).width(w);
			jQuery("#wrapper").height(h);

		});
		
		
		
		jQuery("a.runload").click(function(event) {
			event.preventDefault();
			var addressValue = jQuery(this).attr("href");
			setTimeout(function(){ 
				window.location.href = addressValue;
			}, 500);
			jQuery(".content").addClass("out").removeClass("in");
			// jQuery("body").addClass("fono");
			
		});
		
			
			
		
		
		jQuery(".close").hide();
		jQuery(".open").hide();
		
		 jQuery('.bio-thumb').click(function(event) {
			event.preventDefault();
			jQuery(this).parent('.bio').find('.open').fadeIn();
			jQuery(this).parent('.bio').find('.close').fadeIn();
			jQuery('#sidebar').css({"z-index":"0"});
			var open = jQuery(this).parent('.bio').find('.open').height();
			console.log(open);
			
	
			
		 });
 		jQuery('.rslides').responsiveSlides({
			auto: false,
			nav: true
		});
		  jQuery('.play-thumb').click(function(event) {
//			event.preventDefault();
//			jQuery('#sidebar').css({"z-index":"0"});
//			jQuery(this).parent('.box').find('.open').fadeIn();
//			jQuery(this).parent('.box').find('.close').fadeIn();
			
			
			
//			var open = jQuery(this).parent('.box').find('.open').height();
//			console.log(open);
			
	
			
		 });
		 
		jQuery('.close').click(function() {
			jQuery('#sidebar').css({"z-index":"1"});
			jQuery('.open').fadeOut();
			jQuery('.close').fadeOut();
		});	
		
		
		
			
		 });
		
			
	
