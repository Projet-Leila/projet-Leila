jQuery(document).ready(function($) {

	$(".headroom").headroom({
		"tolerance": 0,
		"offset": 50,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});

});