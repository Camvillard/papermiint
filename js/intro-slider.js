jQuery(document).ready(function ($) {

  $('#checkbox').change(function(){
    setInterval(function () {
        moveRight();
    }, 3000);
  });

	var slideCount = $('#slider-intro ul li').length;
	var slideWidth = $('#slider-intro ul li').width();
	var slideHeight = $('#slider-intro ul li').height();
	var sliderUlWidth = slideCount * slideWidth;

	$('#slider-intro').css({ width: slideWidth, height: slideHeight });

	$('#slider-intro ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $('#slider-intro ul li:last-child').prependTo('#slider-intro ul');

    function moveLeft() {
        $('#slider-intro ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider-intro ul li:last-child').prependTo('#slider-intro ul');
            $('#slider-intro ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider-intro ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider-intro ul li:first-child').appendTo('#slider-intro ul');
            $('#slider-intro ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});
