/*jQuery('.dropdown-sin-1').dropdown({
	limitCount: 10, 
	limitCountErrorMessage:'Maximum limit reached',
	input: '<input type="text" maxLength="20" placeholder="Search">'
}).on("click",function(){
	jQuery(this).each(function(index, element) {
		jQuery(this).find(".dropdown-chose-list .dropdown-selected").hide();
		if(jQuery(this).find(".dropdown-chose-list .dropdown-selected").length > 0) {
			jQuery(this).find(".dropdown-display b").html('('+ jQuery(this).find(".dropdown-chose-list .dropdown-selected").length+')');
			jQuery(this).find(".dropdown-display").addClass("has_items");
		} else {
			jQuery(this).find(".dropdown-display b").html('');
			jQuery(this).find(".dropdown-display").removeClass("has_items");
		}
	});
});
jQuery(document).ready(function(e) {
	jQuery('.backbtn a').on('click', function (e) {
		e.preventDefault();
		jQuery('.dropdown-single,.dropdown-multiple,.dropdown-multiple-label').removeClass('active');
	});

});*/


jQuery(window).on("load",function(){
	'use strict';
	//jQuery(".dropdown-main ul").mCustomScrollbar();
});

jQuery(document).ready(function(e) {
	new WOW().init();
	$('.select2').select2({width: 'resolve'});


	// Hittesh - 26/07/2021
	$("input[name='maritalstatus']").change(function(){
		$(".showifmarried").hide();
		if($(this).val()!=='Single') {
			$(".showifmarried").show();
		}
	});
	jQuery(".multi-select").bsMultiSelect({});
	
	if(jQuery(".w3ndatepicker").length > 0)
	{
		jQuery( ".w3ndatepicker" ).datepicker({ dateFormat: 'dd/mm/yy',changeMonth: true,			
		changeYear: true,maxDate: '0',});
		
		jQuery( ".w3ndatepickerexp" ).datepicker({ dateFormat: 'dd/mm/yy',changeMonth: true,			
		changeYear: true, minDate: 0});
		
		
	}
	
	
	jQuery('#nav-icon4').click(function(){
		jQuery(this).toggleClass('open');
		jQuery(".header_bottom_main").toggleClass("is-active");
	  jQuery("body").toggleClass("hiddenscroll");
	});
	
});



jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 160) {
        jQuery('.header_bottom').addClass('fixed-header');
        
    }
    else {
       jQuery('.header_bottom').removeClass('fixed-header');
        
    }
});


 jQuery(document).ready( function(){
	if(jQuery(window).width() < 1024 ){
		jQuery( "<div class='icon fa fa-angle-down'></div>" ).insertAfter( ".main_nav > ul > li.has-child > a" );
		jQuery(".main_nav > ul > li .icon").on('click', function(e) {
		  jQuery(this).parent().children('ul').slideToggle(500);
		  jQuery(this).parent().siblings('li').find('ul').slideUp(500);
		  jQuery(this).parent().siblings('li').removeClass('active');
		  jQuery(this).parent().siblings('li').find('li').removeClass('active');
		  jQuery(this).parent().toggleClass('active');
		  e.stopPropagation();
		});
	}
});
