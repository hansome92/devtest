jQuery(document).ready(function() {
	jQuery("#form1").submit(function() {
		if (jQuery("#txt").length > 0) {
			if (jQuery("#txt").val() == "") {
				jQuery("#txt").removeClass("error");
				jQuery("#txt").addClass("error");
				return false;
			}
		}
	});
});