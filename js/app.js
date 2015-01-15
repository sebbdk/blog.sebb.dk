/* 
* @Author: sebb
* @Date:   2015-01-14 01:20:23
* @Last Modified by:   sebb
* @Last Modified time: 2015-01-15 11:24:32
*/

(function($) {

	$(document).on('ready', function() {
		//md();
	});

	function md() {
		$('.markdown').each(function() {
			$(this).html( markdown.toHTML($(this).html()) );
		});
	}

	md();

})(jQuery);