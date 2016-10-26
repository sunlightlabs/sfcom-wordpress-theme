(function ($, root, undefined) {

	$(function () {
		$('.navbar-toggle').click(function(e) {
      e.preventDefault();

      var target = $(this).data('target');
      $(target).toggleClass('in');
    });

		'use strict';

		// DOM ready, take it away

	});

})(jQuery, this);
