(function ($) {
	$(document).ready(function(){
		$("<div class='backg-top'></div>").appendTo("#zone-header-wrapper");

		$(document).ready(function () {  
		var top = $('#zone-branding-wrapper').offset().top - parseFloat($('#zone-branding-wrapper').css('marginTop').replace(/auto/, 0));
		$(window).scroll(function (event) {
		// what the y position of the scroll is
		var y = $(this).scrollTop();
		// whether that's below the form
		if (y >= top) {
		// if so, ad the fixed class
		$('#zone-branding-wrapper').addClass('fixed');
		} else {
		// otherwise remove it
		$('#zone-branding-wrapper').removeClass('fixed');

		}

	});
}); 
	})	
})(jQuery);
(function($){
 $.fn.extend({
 	customStyle : function(options) {
	  if(!$.browser.msie || ($.browser.msie&&$.browser.version>6)){
	  return this.each(function() {
			var currentSelected = $(this).find(':selected');
			$(this).after('<span class="styleselect"><span class="styleselectInner">'+currentSelected.text()+'</span></span>').css({position:'absolute', opacity:0,fontSize:$(this).next().css('font-size')});
			var selectBoxSpan = $(this).next();
			var selectBoxWidth = parseInt($(this).width()) - parseInt(selectBoxSpan.css('padding-left')) -parseInt(selectBoxSpan.css('padding-right'));			
			//var selectBoxWidth = 118;	
			var selectBoxSpanInner = selectBoxSpan.find(':first-child');
			selectBoxSpan.css({display:'inline-block'});
			selectBoxSpanInner.css({width:selectBoxWidth, display:'inline-block'});
			var selectBoxHeight = parseInt(selectBoxSpan.height()) + parseInt(selectBoxSpan.css('padding-top')) + parseInt(selectBoxSpan.css('padding-bottom'));
			$(this).height(selectBoxHeight).change(function(){
			// selectBoxSpanInner.text($(this).val()).parent().addClass('changed');   This was not ideal
			selectBoxSpanInner.text($(this).find(':selected').text()).parent().addClass('changed');
				// Thanks to Juarez Filho & PaddyMurphy
			});
	  });
	  }
	}
 });
 $(document).ready(function(){
	$('#block-block-10 .half select').customStyle(); 
}); 
})(jQuery);
(function ($) {

$(function(){
 $('a[href*=#]').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
             var $target = $(this.hash);
             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
             if ($target.length) {
                 var targetOffset = $target.offset().top;
                 $('html,body').animate({scrollTop: targetOffset}, 1000);
                 return false;
            }
       }
   });
});
}(jQuery));