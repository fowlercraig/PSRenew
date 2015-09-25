//SmartAjax_load('/assets/javascripts', function(){

$(document).ready(function() {

	// Innovate Stuff

	var wh = $(window).height();

	$('#inno-header').css({
		height: wh,
	});

	$('#inno-header_content').animate({
		opacity:1
	}, 2000);

	$('.accordion-wrapper').accordion();

	// var visited = $.cookie("visited")

	// if (visited == null) {
	// 	$.magnificPopup.open({
	// 		items: {
	// 			src: '#subscribe-box',
	// 			type: 'inline'
	// 		},
	// 		removalDelay: 300,
	// 		mainClass: 'yooolo my-mfp-slide-bottom'
	// 	}, 0);
	// }

	// $.cookie('visited', 'yes', { expires: 1, path: '/' });

});

function thangs(){

	$('.menu li').click(function(){
		$(this).parent().find('li').removeClass('current-menu-item');
		$(this).addClass('current-menu-item');
	});

	// if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
	//   var s = skrollr.init({
	// 		forceHeight: false,
	// 	});
	// }

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {} else {

  $window = $(window);

  $('.hero, .page-header, .simple-header, .simple-header .inner').each(function(){
    var $bgobj = $(this);
    $(window).scroll(function() {
      var yPos = ($window.scrollTop() / $bgobj.data('speed'));
      var coords = '50% '+ yPos + 'px';
      $bgobj.css({ backgroundPosition: -coords });
    });

  });

  }

	$('.popup').magnificPopup({
		type: 'inline',
		removalDelay: 300,
		preloader: false,
		mainClass: 'yooolo my-mfp-slide-bottom'
	});


	$('.launchevent').magnificPopup({
		type: 'ajax',
		callbacks : {
			parseAjax: function(mfpResponse) {
				mfpResponse.data = $(mfpResponse.data).find('#content');
			},
		},
		//alignTop: center,
		overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
	});



	$(".section").fitVids();

	$(".tabbed").tabber();
	$("#header .menu").naver();
	$("#tab-4 .sized").sizer()

	$(".fw_gallery .royalSlider").royalSlider({
		keyboardNavEnabled: true,
		imageScaleMode: 'fill',
		transitionType: 'fade'
	});

	$("#home--slider .slider").royalSlider({
		keyboardNavEnabled: true,
		imageScaleMode: 'fill',
		transitionType: 'fade',
		autoPlay: {
    		// autoplay options go gere
  		enabled: true,
  		delay: 4000,
  		pauseOnHover: true
  	}
	});

	$('#home--slider .next').click(function(){
		$("#home--slider .slider").royalSlider('next');
	});

	$('#home--slider .prev').click(function(){
		$("#home--slider .slider").royalSlider('prev');
	});

	$(".hero .royalSlider").royalSlider({
		keyboardNavEnabled: true,
		imageScaleMode: 'fill',
		transitionType: 'fade',
		autoPlay: {
    		// autoplay options go gere
  		enabled: true,
  		delay: 4000,
  		pauseOnHover: true
  	}
	});

	var slider = $(".fw_gallery .royalSlider").data('royalSlider');

	$('.gallery-nav .slide-1').click(function(){
		slider.goTo(0);
	});

	$('.gallery-nav .slide-2').click(function(){
		slider.goTo(1);
	});

	$('.gallery-nav .slide-3').click(function(){
		slider.goTo(2);
	});

	$('.gallery-nav .slide-1').addClass('active');

	$('.gallery-nav a').click(function(){
		$('.gallery-nav a').removeClass('active');
		$(this).addClass('active');
	});

	$(".section input[type=checkbox]").picker({
		toggle: true,
		labels: {
			on: "Before",
			off: "After"
		}
	});

	$(function($) {
		var scrollElement = 'html, body';
		$('html, body').each(function () {
			var initScrollTop = $(this).attr('scrollTop');
			$(this).attr('scrollTop', initScrollTop + 1);
			if ($(this).attr('scrollTop') == initScrollTop + 1) {
				scrollElement = this.nodeName.toLowerCase();
				$(this).attr('scrollTop', initScrollTop);
				return false;
			}
		});

		// Smooth scrolling for internal links
		$("a[href^='#']").click(function(event) {
			event.preventDefault();

			var $this = $(this),
			target = this.hash,
			$target = $(target);

			$(scrollElement).stop().animate({
				'scrollTop': $target.offset().top - 200
			}, 300, 'swing', function() {
				window.location.hash = target;
			});

		});
	});

	config = {
    ui: {
	    flyout: 'middle',            // change the flyout direction of the shares. chose from `top left`, `top center`, `top right`, `bottom left`, `bottom right`, `bottom center`, `middle left`, or `middle right` [Default: `top center`]
	    //button_font:       // include the Lato font set from the Google Fonts API. [Default: `true`]
	    //button_text:       // change the text of the button, [Default: `Share`]
	    icon_font:    true,     // include the minified Entypo font set. [Default: `true`]
	  },
	  networks:  {
	  	pinterest: {
	  		enabled: false
	  	}
	  }
	}

	var share = new Share('.share-button', config);

}

thangs();

// SmartAjax.isDebug = false;
// 	SmartAjax.setOptions({
// 		cache: false,
// 		reload: false,
// 		containers:[{selector: '#content > div'}],

// 		before: function() {
// 			SmartAjax.proceed();
// 		},
// 		success: function() {
// 			$('#content').velocity({
// 			  opacity:0,
// 			},300, SmartAjax.proceed);
// 		},
// 		done: function(){
// 			$('#content').velocity({
// 			  opacity: 1,
// 			},300);
// 			thangs();
// 			$("html, body").animate({ scrollTop: "0" }, 200);
// 		}
// 	});

// 	SmartAjax.bind('a, a:not([href^="mailto:"])');
// 	SmartAjax.bindForms('form');

// }, true);
