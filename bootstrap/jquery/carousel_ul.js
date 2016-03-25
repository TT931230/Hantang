$(function () {
  $("#carousel").responsiveSlides({
	auto: true,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "ul-callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });

  });
