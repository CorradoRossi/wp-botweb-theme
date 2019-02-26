/*
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			xlarge:  [ '1281px',  '1680px' ],
			large:   [ '981px',   '1280px' ],
			medium:  [ '737px',   '980px'  ],
			small:   [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Dropdowns.
	//	$('#nav > ul').dropotron({
	//		mode: 'fade',
	//		noOpenerFade: true,
	//		hoverDelay: 150,
	//		hideDelay: 350
	//	});

	// Nav.

//Add favicons next to all href's

	$(".toplist a[href^='http']").each(function() {
	  $(this).css({
	     background: "url(http://www.google.com/s2/favicons?domain=" + this.hostname + ") left center no-repeat",
	    "padding-left": "20px", "background-size": "16px 16px;"
	  });
	});



		// Title Bar.
			$(
				'<div id="titleBar">' +
					'<a href="#navPanel" class="toggle"></a>' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

				$(function() {
				$(window).scroll(function () {
				if ($(document).scrollTop() > 20) {
				 $('article').addClass('changeColor')
				}
				if ($(document).scrollTop() < 20) {
				 $('article').removeClass('changeColor')
				}
				});
				});

				$(function() {
				$(window).scroll(function () {
				if ($(document).scrollTop() > 20) {
				 $('.dink').addClass('changeColorr')
				}
				if ($(document).scrollTop() < 400) {
				 $('.dink').removeClass('changeColorr')
				}
				});
				});

				$(function() {
				$(window).scroll(function () {
				if ($(document).scrollTop() > 20) {
				 $('body').addClass('changeBg')
				}
				if ($(document).scrollTop() < 20) {
				 $('body').removeClass('changeBg')
				}
				});
				});

				$(function() {
				$(window).scroll(function () {
				if ($(document).scrollTop() > 20) {
				 $('#dancer').addClass('dance')
				}
				if ($(document).scrollTop() < 200) {
				 $('#dancer').removeClass('dance')
				}
				});
				});

				$(function() {
				$(window).scroll(function () {
				if ($(document).scrollTop() > 20) {
				 $('.monster').addClass('dance')
				}
				if ($(document).scrollTop() < 200) {
				 $('.monster').removeClass('dance')
				}
				});
				});

})(jQuery);
