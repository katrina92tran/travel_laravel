//slider images in index page
$(window).load(function(){
	 $('#slider').nivoSlider({
	 	prevText: '',  
    	nextText: '',
    	controlNav:false
	 });
});
//display menu

$(window).load(function(){
  if ($('html').hasClass('desktop')) {
      $('#stuck_container').TMStickUp({
      });
  }
});
$(window).scroll(function(){
	if($(this).scrollTop()>100){
		$("#toTop").fadeIn();
	}else{
		$("#toTop").fadeOut();
	}
});
$("#toTop").click(function(){
	$("html,body").animate({
		scrollTop:0
	},600);
	return false;
});