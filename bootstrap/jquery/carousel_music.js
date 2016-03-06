$(function () {

  // Slideshow 4
  $("#carousel").responsiveSlides({
	auto: false,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "musicpage-callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });

  });