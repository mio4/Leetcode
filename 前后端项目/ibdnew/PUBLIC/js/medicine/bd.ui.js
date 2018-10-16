(function ($) {

	$(document).ready(function () {

		$('.demo').each(function () {

			var tabs = $(this).find('.tabs a'),
					apanels = $(this).find('.Apanel').hide(),
					hash = window.location.hash;

			$(this).find('.tabs a:first').addClass('active');
			$(this).find('.Apanel:first').show();

			tabs.click(function () {
				var active = $(this).attr("href");

				// Toggle active class
				tabs.parent().removeClass('active');
				$(this).parent().addClass('active');

				// Toggle selected panel
				apanels.hide();
				$(active).show();

				// Prevent default behavior
				return false;
			});

		});
 
		 
		
	});

})(jQuery);

/*-------------------------------------------
	Fin
---------------------------------------------*/