/* 
* @Author: sebb
* @Date:   2015-01-14 01:20:23
* @Last Modified by:   sebb
* @Last Modified time: 2015-01-18 20:57:01
*/

(function($) {

	$(document).on('ready', function() {
		_track('blog_sebb_dk');
	});

	$(document).on('ready', render);
	$(window).on('resize', render);

	function render() {
		if(typeof FB !== 'undefined') {
			$('.fb-comments').attr('data-width', $('.content').width());
			FB.XFBML.parse();
		}
	}

	function md() {
		$('.markdown').each(function() {
			$(this).html( markdown.toHTML($(this).html()) );
		});
	}

	md();

})(jQuery);