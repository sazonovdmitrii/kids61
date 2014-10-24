/**
 * EMThemes
 *
 * @license commercial software
 * @copyright (c) 2012 Codespot Software JSC - EMThemes.com. (http://www.emthemes.com)
 */
 
(function($) {

if (typeof EM == 'undefined') EM = {};
if (typeof EM.tools == 'undefined') EM.tools = {};

var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);

var domLoaded = false, 
	windowLoaded = false, 
	last_adapt_i,
	last_adapt_width;
/**
 * Auto positioning product items in products-grid *
 */
EM.tools.decorateProductsGrid = function (productsGridEl) {
	var $productsGridEl = $(productsGridEl);
	if ($productsGridEl.length == 0) return;
		
	var maxHeight = 0;
    $('.products-grid', $productsGridEl).each(function() {
        $('.item', $(this)).each(function() {
            $(this).removeAttr('style');
            if ($(this).outerHeight(true) > maxHeight) {
                maxHeight = $(this).outerHeight(true);                
            }
    	});
        $('.item', $(this)).each(function() {
    	   $(this).css({'min-height': maxHeight + 5 + 'px'});
    	});
	});
};

EM.tools.decorateProductCollateralTabs = function() {   
	$(window).load(function() {
        $('.product-collateral').addClass('tab_content').each(function(i) {
            $(this).wrap('<div class="tabs_wrapper_details collateral_wrapper" />');
            var tabs_wrapper = $(this).parent();
            var tabs_control = $(document.createElement('ul')).addClass('tabs_control').insertBefore(this);
            
            $('.box-collateral', this).addClass('tab-item').each(function(j) {
            	var id = 'box_collateral_'+i+'_'+j;
            	$(this).addClass('content_'+id);
            	tabs_control.append('<li><h2><a href="#'+id+'">'+$('h2', this).html()+'</a><div class="icon_tab"></div></h2></li>');
            });            
            initToggleTabs(tabs_wrapper);
        });
		
	});
};


/**
 * Fix iPhone/iPod auto zoom-in when text fields, select boxes are focus
 */
function fixIPhoneAutoZoomWhenFocus() {
	var viewport = $('head meta[name=viewport]');
	if (viewport.length == 0) {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>');
		viewport = $('head meta[name=viewport]');
	}	
	var old_content = viewport.attr('content');	
	function zoomDisable(){
		viewport.attr('content', old_content + ', user-scalable=0');
	}
	function zoomEnable(){
		viewport.attr('content', old_content);
	}	
	$("input[type=text], textarea, select").mouseover(zoomDisable).mousedown(zoomEnable);
};



/**
 * Adjust elements to make it responsive
 *
 * Adjusted elements:
 * - Image of product items in products-grid scale to 100% width
 */
function responsive() {		
	var img = $('.products-grid .item .product-image img');
	img.each(function() {
		img.data({
			'width': $(this).width(),
			'height': $(this).height()
		})
	});
	img.removeAttr('width').removeAttr('height').css('width', '100%');
	
	// responsive:
	// - image 
	// - custom logo on sidebar
	// - category image
	$('.sidebar img, .category-image img, .cloud-zoom-gallery img, .img-lightbox img, .img-default img, .related-img img').each(function() {
		if (!$(this).hasClass('fluid')) {
			$(this).css({
                'width': '100%'
			});
		}
	});
};


/**
 * Function called when layout size changed by adapt.js
 */
function whenAdapt(i, width) {	
	$('body').removeClass('adapt-0 adapt-1 adapt-2 adapt-3 adapt-4 adapt-5 adapt-6')
		.addClass('adapt-'+i);
};



/**
 * Callback function called when stylesheet is changed by adapt.js
 */
ADAPT_CONFIG.callback = function(i, width) {
	last_adapt_i = i;
	last_adapt_width = width;	
	whenAdapt(last_adapt_i, last_adapt_width);
};


$(document).ready(function() {
	domLoaded = true;
    if($('body').viewPC()){toolbar();}
    backToTop();        
	isMobile && fixIPhoneAutoZoomWhenFocus();	
	alternativeProductImage();
    setupReviewLink();	
	// safari hack: remove bold in h5, .h5
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		$('h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-weight', 'normal');
	}
    addClassMobile();
	toogleColorVariation();
    toogleStore();    
});

$(window).bind('load', function() {
    //alert('load');
	windowLoaded = true;     
    tabReview();
	responsive(); 
	whenAdapt(last_adapt_i, last_adapt_width);
    setTimeout(function(){setTopLeft();},300);
    
});

$(window).bind('orientationchange', function () {
    setTimeout(function(){setTopLeft();},300);
});

$(window).bind('emadaptchange', function () {
    setTimeout(function(){setTopLeft();},300);
});

$(window).bind('resize', function () {
});

})(jQuery);

function doCarouFredSel(e,nmin,nmax,isauto,isscroll,nprev,nnext,wli){
    if(jQuery(e).length){
        var wli = wli || null;
        var $percent = Math.floor((0.9/nmax)*100);
        if(jQuery(e).children().length<nmax)
            wli = $percent+'%';
        jQuery(e).addClass('slides');
		jQuery(e).carouFredSel({
			responsive: true,
            onCreate: data = function(){
    		var _loc = 	jQuery(this).children();
    			if(jQuery(this).parent().width()==0){
    				jQuery(this).parent().css("cssText", "width: 100% !important;");
    				jQuery(this).css("cssText", "width: 100% !important;");
    				for(var i=0;i<_loc.length;i++)
    					jQuery(_loc[i]).css("cssText", "width:"+$percent+"% !important;");
    			}
    		},
			width: '100%',
			scroll:isscroll,
			items: {
				width: wli,
				visible: {
					min: nmin,
					max: nmax
				}
			},
			prev: nprev,
			next: nnext,
            mousewheel: true,
			swipe: {
				onMouse: false,
				onTouch: true
			},
			auto: isauto
		},{onWindowResize:"debounce"});	
	}
};


/** 
*   Back to top
**/
function backToTop(){
    // hide #back-top first
	jQuery("#back-top").hide();
	
	// fade in #back-top
	
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('#back-top').fadeIn();
		} else {
			jQuery('#back-top').fadeOut();
		}
	});

	// scroll body to 0px on click
	jQuery('#back-top a').click(function () {
		jQuery('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

};


/**
*   toolbar
**/
function toolbar(){
	var $ = jQuery;
	$('.show').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
	$('.sortby').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
    $('#select-store').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
	$('.cat-search').each(function(){
		$(this).insertUlCategorySearch();
		$(this).selectUlCategorySearch();
	});
};

/**
*   Tabs
**/
function initToggleTabs($selector){
	if(jQuery($selector).length > 0){
		var timeout = new Array(jQuery($selector).length);
		var div = new Array(jQuery($selector).length);
		jQuery($selector).addClass('ui-tabs ui-widget ui-widget-content ui-corner-all');
		jQuery($selector).each(function(index,value){
			timeout[index] = null;
			div[index] = jQuery(this);
			div[index].addClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');
			//When page loads...
			div[index].find(".tab-item").slideUp('fast'); //Hide all content
			div[index].children('ul').find("li:first").addClass("ui-tabs-selected").slideDown('fast'); //Activate first tab
			div[index].children('ul').addClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');
			div[index].children('ul').find('li').addClass('ui-state-default ui-corner-top');	
			div[index].find(".tab-item:first").slideDown('fast'); //Show first tab content
			//On Click Event
			div[index].children('ul').find("li").click(function() {
				var currentTab = jQuery(this);
				if(currentTab.hasClass('ui-tabs-selected'))
					return false;
				if (timeout[index])
					clearTimeout(timeout[index]);
				timeout[index] = setTimeout(function() {
					timeout[index] = null;	
					// Hide old content tab
					var oldIndex = div[index].children('ul').find('li.ui-tabs-selected a').attr('href').replace(/.*?#/,'');
					div[index].find('div.content_' + oldIndex).hide();
					
					div[index].children('ul').find("li").removeClass("ui-tabs-selected"); //Remove any "ui-tabs-selected" class
					currentTab.addClass("ui-tabs-selected"); //Add "active" class to selected tab
					
					var activeIndex = currentTab.find("a").attr("href").replace(/.*?#/,''); //Find the href attribute value to identify the active tab + content
					div[index].find('div.content_' + activeIndex).fadeToggle('fast').trigger('emtabshow'); //Fade in the active ID content
					return false;
				}, 10);
				return false;
			});	
		});
		
	}
};

/**
*   showReviewTab
**/
function showReviewTab() {
	var $ = jQuery;
	if ($('#customer-reviews').size()) {
		// scroll to customer review
		$('html, body').animate({ scrollTop: $('#customer-reviews').offset().top }, 500);
	} else {
		return false;
	}
	return true;
};

function setupReviewLink() {
	jQuery('.r-lnk').click(function (e) {
		if (showReviewTab())
			e.preventDefault();
	});
};

function addClassMobile(){
    if(isMobile == true){
        jQuery('body').addClass('mobile-view');
    }
};

/**
 * Change the alternative product image when hover
 */
function alternativeProductImage() {
    var $=jQuery;
	var tm;
	function swap() {
		clearTimeout(tm);
		setTimeout(function() {
			el = $(this).find('img[data-alt-src]');
			var newImg = $(el).data('alt-src');
			var oldImg = $(el).attr('src');
			$(el).attr('src', newImg).data('alt-src', oldImg);
		}.bind(this), 200);
	}	
	$('.item .product-image img[data-alt-src]').parents('.item').bind('mouseenter', swap).bind('mouseleave', swap);
};

/**
*   Toogle Color Variation
**/
function toogleColorVariation(){
    if(isMobile == false){
        var $ = jQuery;
        var screen = "<div id='bg_fade_color'></div>";
    	$(document.body).append(screen);
    			
    	$(".btn_color_variation").click(function() {
    		var bg	=	$("#bg_fade_color");
    		bg.css("opacity",0.5);
    		bg.css("display","block");
            var left = ( $(window).width() - $(".colordiv").width() ) / 2;
    		$(".colordiv").show();    		
    		$(".colordiv").css('top', Math.max($(document).scrollTop(), Math.min($(this).offset().top, $(document).scrollTop() + $(window).height() - $(".colordiv").outerHeight())) + 20 + 'px');
            $(".colordiv").css('left',left);    		
    	});
    	
    	$(".btn_color_close").click(function() {
    		color_hide();
    	});
    	
    	function color_hide(){
    		var bg	=	$("#bg_fade_color");
    		$(".colordiv").hide();
    		bg.css("opacity",0);
    		bg.css("display","none");
    	}
    }
};

function tabReview(){            	
	jQuery('#tab-review').addClass('tab_content').each(function(i) {
	    jQuery(this).wrap('<div class="tabs_wrapper_review review_wrapper" />');
	    var tabs_wrapper = jQuery(this).parent();
	    var tabs_control = jQuery(document.createElement('ul')).addClass('tabs_control').insertBefore(this);
	    
	    jQuery('.reviews', this).addClass('tab-item').each(function(j) {
		var id = 'reviews_'+i+'_'+j;
		jQuery(this).addClass('content_'+id);
		tabs_control.append('<li><h2><a href="#'+id+'">'+jQuery('h2', this).html()+'</a><div class="icon_tab"></div></h2></li>');
	    });            
	    initToggleTabs(tabs_wrapper);
	});
};

function toogleStore(){
    if(isMobile == false){
        var $=jQuery;
        $countItem = $('#slider_storeview ul.slider-store li').size();
        if($countItem>=3){doCarouFredSel('#slider_storeview ul.slider-store',1,3,false,1,"#prev_store","#next_store",306)};
        $('.storediv').hide(); 
        $(".btn_storeview").click(function() {
    		store_show();        
    	});
    	
    	$(".btn_storeclose").click(function() {
    		store_hide();
    	});
    	
    	function store_show(){            
    		var bg	=	$("#bg_fade_color");
    		bg.css("opacity",0.5);
    		bg.css("display","block");    		
            var top =( $(window).height() - $(".storediv").height() ) / 2;
            var left = ( $(window).width() - $(".storediv").width() ) / 2;
			$(".storediv").show();
            $(".storediv").css('top', top+'px');
            $(".storediv").css('left', left+'px');
    	}
    	
    	function store_hide(){
    		var bg	=	$("#bg_fade_color");
    		$(".storediv").hide();
    		bg.css("opacity",0);
    		bg.css("display","none");
    	}
    }
};

function setTopLeft(){	
	var $ = jQuery;
	
	$('.set-top-left .products-grid').find('.item').each(function(){
		var getImg = $(this).find('.product-image').find('img');
        var getOffset = getImg.offset();
        var selector = $(this).find('.js-addcart');
        selector.removeAttr('style');
        
		var setTop = (getImg.height() - selector.outerHeight(true) + 10)/2;
		var setLeft = (getImg.width() - selector.outerWidth(true) +8)/2;
        var qs = 0;
		if (EM.QuickShop!=null)
			qs += EM.QuickShop.QS_BTN_HEIGHT + 10;
        if(isPhone == false){
		  setTop = setTop + qs;
        }
		selector.css({
			'top': setTop+'px',
			'left': setLeft+'px'
		});
	});
    if(isMobile == true){
        $('.set-top-left .products-grid li.item a.product-image').attr('href','javascript:void(0)');
    }
    $('.set-top-left .products-grid li.item').slideUpDown({
		divHover : '.hover-slide'
	});
};