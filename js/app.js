/* 
* @Author: sebb
* @Date:   2015-01-14 01:20:23
* @Last Modified by:   sebb
* @Last Modified time: 2015-01-16 14:59:30
*/

(function($) {

	$(document).on('ready', render);
	$(window).on('resize', render);

	function render() {
		$('.fb-comments').attr('data-width', $('.content').width());
		FB.XFBML.parse();
	}

	function md() {
		$('.markdown').each(function() {
			$(this).html( markdown.toHTML($(this).html()) );
		});
	}

	md();

})(jQuery);