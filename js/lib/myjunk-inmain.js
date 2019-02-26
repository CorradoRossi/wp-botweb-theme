$(function() {
$(window).scroll(function () {
if ($(document).scrollTop() > 50) {
 $('article').addClass('changeColor')
}
if ($(document).scrollTop() < 50) {
 $('article').removeClass('changeColor')
}
});
});
