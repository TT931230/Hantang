var videocount=0;
$(function () {


  // Slideshow 4
  $("#carousel1").responsiveSlides({
	auto: true,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "music-callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	},
	fuck: true
  });
  $("#carousel5").responsiveSlides({
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
  $("#carousel2").responsiveSlides({
	auto: false,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });
    $("#carousel3").responsiveSlides({
	auto: false,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });
    $("#carousel4").responsiveSlides({
	auto: false,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });
  });
function clock(){
	var processdevDivwidth = $('.processdev').width();
	if(videocount==0){
		var vid1 = document.getElementById("video1");
		var persent1 = vid1.currentTime/vid1.duration;
		var progress = processdevDivwidth*persent1 +'px';
		$('#process2').css('width',progress);
	}
	if(videocount==1){
		var vid2 = document.getElementById("video2");
		var persent2 = vid2.currentTime/vid2.duration;
		var progress = processdevDivwidth*persent2 +'px';
		$('#process3').css('width',progress);
	}
	if(videocount==2){
		var vid3 = document.getElementById("video3");
		var persent3 = vid3.currentTime/vid3.duration;
		var progress = processdevDivwidth*persent3 +'px';
		$('#process4').css('width',progress);
	}
	if(videocount==0 && persent1 == 1){
			$('.videolist div').css('left','9999px');
			$('#videolist2').css('left','0');
			var vid2 = document.getElementById("video2");
			vid2.play();
			videocount=1;
	}
	if(videocount==1 && persent2 == 1){
			$('.videolist div').css('left','9999px');
			$('#videolist3').css('left','0');
			var vid3 = document.getElementById("video3");
			vid3.play();
			videocount = 2;
	}
	if(videocount==2 && persent3 == 1){
			$('.videolist div').css('left','9999px');
			$('#videolist1').css('left','0');

			$('#process2').css('width',0);
			$('#process3').css('width',0);
			$('#process4').css('width',0);
			var vid1 = document.getElementById("video1");
			vid1.play();
			videocount = 0;
	}
	setTimeout(clock,100);
}
$(function(){
	var vid1 = document.getElementById("video1");
	if(vid1 != null){
		$('#videolist1').css('left','0');
		var divWidth = $('#process1').width();
		var processdevWidth = (divWidth-6)/3+'px';
		$('.processdev').css('width',processdevWidth);

		vid1.play();
		$("#video1").on('ended', function(){
			setTimeout(function(){
				$("#video1")[0].load();
			}, 500);
		})
		$("#video2").on('ended', function(){
			setTimeout(function(){
				$("#video2")[0].load();
			}, 500);
		})
		$("#video3").on('ended', function(){
			setTimeout(function(){
				$("#video3")[0].load();
			}, 500);
		})
		clock();
	}
})