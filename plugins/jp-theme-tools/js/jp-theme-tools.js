;
jQuery(function ($) {

	/** Tab navigation */
	$('.jptt-nav-tab-wrapper a').click(function (e) {
		e.preventDefault();
		$('.data-tab').hide();
		$('.nav-tab-wrapper a').removeClass('nav-tab-active');
		var tabContent = $(this).data('target');
		$(tabContent).stop().show();
		$(this).addClass('nav-tab-active');
	});
	$('a.nav-tab-active').trigger('click');

	/** Toggle featured posts */
	$('.jptt-toggle-featured').click(function (e) {
		e.preventDefault();
		var postId = $(this).data('id');
		var item = this;
		$(item).addClass('hidden').removeClass('dashicons-star-empty dashicons-star-filled');
		$.post(ajaxurl, {action: 'toggle_featured_post', post_id: postId}, function (response) {
			if (response.featured) {
				$(item).addClass('dashicons-star-filled').removeClass('hidden');
			} else {
				$(item).addClass('dashicons-star-empty').removeClass('hidden');
			}
		});
	});
	
});