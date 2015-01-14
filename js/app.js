/* 
* @Author: sebb
* @Date:   2015-01-14 01:20:23
* @Last Modified by:   sebb
* @Last Modified time: 2015-01-14 18:12:22
*/

(function($) {

	$(document).on('ready', function() {

		$('.markdown').each(function() {
			$(this).html( markdown.toHTML($(this).html()) );
		});

		
	})

})(jQuery);