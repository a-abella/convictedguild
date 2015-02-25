
  function lightbox(insertContent, ajaxContentUrl){


	if($('#lightbox').size() == 0){
		var theLightbox = $('<div id="lightbox"/>');
		var theShadow = $('<div id="lightbox-shadow"/>');
		$(theShadow).click(function(e){
			closeLightbox();
		});
		$('body').append(theShadow);
		$('body').append(theLightbox);
	}


	$('#lightbox').empty();

	if(insertContent != null){
		$('#lightbox').append(insertContent);
	}



	// move the lightbox to the current window top + 100px
	//$('#lightbox').css('top', $(window).scrollTop() + 100 + 'px');		
    $('#lightbox').css('marginLeft', '-' + $('#lightbox').width() / 2 + 'px');

// display the lightbox
$('#lightbox-shadow').fadeIn('fast', function(){
$('#lightbox').fadeIn('fast');
$('body').css('overflow-y','hidden');
});

}

// close the lightbox
function closeLightbox(){

	// hide lightbox and shadow <div/>'s
	$('#lightbox').hide();
	$('#lightbox-shadow').fadeOut(375);
	$('body').css('overflowY','scroll');

	// remove contents of lightbox in case a video or other content is actively playing
	$('#lightbox').empty();
  }

