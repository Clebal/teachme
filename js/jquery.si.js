$.fn.si = function() {
	$.support = {
		opacity: !($.browser.msie && /MSIE 6.0/.test(navigator.userAgent))
	};
	if ($.support.opacity) {
		$(this).each(function(i) {
			if ($(this).is(":file")) {
				var $input = $(this);
				$(this).wrap('<label class="cabinet" style="position: absolute; left: 25px;" id="cabinet'+i+'"></label>');
				$("label#cabinet"+i)
					.wrap('<div class="si"></div>')
					.after('<div class="uploadButton"><div></div></div><label class="selectedFile"></label>')
					
				
				$(this).change(function() {
					$container = $(this).closest("div.si");
					$("label.selectedFile", $container).html($(this).val());
				})
			}
		});
	}
};