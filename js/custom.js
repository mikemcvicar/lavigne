function loadProcess() {
		
		
		jQuery('.content').addClass("moving").delay(500).queue(function () {
        	jQuery(this).remove();
    	});
    	
		jQuery('#wrapper').append('<div class="content new"></div>').delay(0).queue(function () {
        	jQuery('.new').removeClass("new").html('<div class><img src="../images/ajax-loader.gif" /></p>').load('process .content *');
    	});
    	var h = jQuery(window).height();
		var w = jQuery(window).width();
		jQuery(".content").height(h).width(w);
		jQuery("#global").height(h).width(w);
		jQuery("#wrapper").height(h);
	 
	}