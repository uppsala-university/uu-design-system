(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		// Toggle function
		$('.toggle').on('click', function(){
			var controlledElementSelector = '#' + $(this).attr('aria-controls');
			if ($(this).attr('aria-expanded') == 'false') {
				$(this).attr('aria-expanded', 'true');
				$(controlledElementSelector).removeClass('d-none');
			} else {
				$(this).attr('aria-expanded', 'false');
				$(controlledElementSelector).addClass('d-none');
			}
		});

	});
	
})(jQuery, this);
