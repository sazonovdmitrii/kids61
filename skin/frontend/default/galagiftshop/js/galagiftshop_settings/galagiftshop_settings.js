/**
 * EM ThemeFramework
 *
 * @license commercial software
 * @copyright (c) 2012 Codespot Software JSC - EMThemes.com. (http://www.emthemes.com)
 */

jQuery(window).load(function () {
	var $ = jQuery;
	$('body').addClass('cms-index-index');
	$('.debug').each(function () {
		var p = $(this).parent();
		$(this).css('width', p.outerWidth()-4);	// 2 for the red border, 2 for margin
		$(this).css('height', p.outerHeight()-4);
		if (p.outerHeight()<1) $(this).hide();
	});
	$('.galagiftshop_settings_previewblock').each(function() {
		if (!$(this).hasClass('empty')) {
			var block = $(this).prev();
			$(this).css({
				position: 'absolute',
				left: block.position().left + (block.outerWidth(true) - block.width())/2 + 'px',
				top: block.position().top + (block.outerHeight(true) - block.height())/2 + 'px'
			}).show();
		}
		else {
			$(this).show();
		}
	});
});
