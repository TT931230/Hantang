$(function () {
  $("#carousel").responsiveSlides({
		auto: false,
		pager: false,
		nav: true,
		speed: 500,
		namespace: "ptn-callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });

  });
