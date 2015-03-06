
  function lightbox(largePortrait, captionText){

    //setup
	if($("#lightbox").size() == 0){
		var theLightbox = $('<div id="lightbox" />');
		var theCaption = $('<div id="caption" />');
		var theShadow = $('<div id="lightbox-shadow" />');
		$(theShadow).click(function(e){
			closeLightbox();
		});
		$('body').append(theShadow);
		$('body').append(theLightbox);
		$("#lightbox").append(theCaption);
		
	}
	
	
	//append image
	if(largePortrait != null){
		$("#lightbox").append(largePortrait);
	}
	
	
	//ajax request for caption text
	if(captionText != null){
		$.ajax({
			type: 'GET',
			dataType: 'html',
			url: captionText,
			cache: false,
			success:function(data){
		    	$("#caption").empty();
				
				$("#caption").append(data);
				$("#lightbox").append(theCaption);
				
			},
		});
	}

	
	//intelligently align	
    $('#lightbox').css('marginLeft', '-' + $('#lightbox').width() / 2 + 'px');
	$('#lightbox').css('marginTop', '-' + $('#lightbox').height() / 2 + 'px');

	
    //spawn and fade in
	$('#lightbox-shadow').fadeIn('fast', function(){
		$('#lightbox').fadeIn(3000);
		$('#caption').fadeIn(3000);
		
		$('body').css('overflow-y','hidden');
	});
}


// close the lightbox
function closeLightbox(){


	// hide lightbox, caption, and shadow
	$('#caption').hide();
	$('#lightbox').hide();
	$('#lightbox-shadow').fadeOut(375);
	$('body').css('overflowY','scroll');

	
	// clear contents
	$('#lightbox').remove();
  }

