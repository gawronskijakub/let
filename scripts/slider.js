var slideCount = $('#slider1 ul li').length;
var slideWidth = $('#slider1 ul li').width();
var slideHeight = $('#slider1 ul li').height();

const moveLeft = () => {
    $('#slider1 ul').animate({
        left: + slideWidth
    }, 750, () => {
        $('#slider1 ul li:last-child').prependTo('#slider1 ul');
        $('#slider1 ul').css('left', '');
    });
    $('#slider2 ul').animate({
        left: + slideWidth
    }, 750, () => {
        $('#slider2 ul li:last-child').prependTo('#slider2 ul');
        $('#slider2 ul').css('left', '');
    });
    $('#slider2 form').animate({
        left: + slideWidth
    }, 750, () => {
        $('#slider2 form input:last-child').prependTo('#slider2 form');
        $('#slider2 form').css('left', '');
    });
};

const moveRight = () => {
    $('#slider1 ul').animate({
        left: - slideWidth
    }, 750, () => {
        $('#slider1 ul li:first-child').appendTo('#slider1 ul');
        $('#slider1 ul').css('left', '');
    });
    $('#slider2 ul').animate({
        left: - slideWidth
    }, 750, () => {
        $('#slider2 ul li:first-child').appendTo('#slider2 ul');
        $('#slider2 ul').css('left', '');
    });
    $('#slider2 form').animate({
        left: - slideWidth
    }, 750, () => {
        $('#slider2 form input:first-child').appendTo('#slider2 form');
        $('#slider2 form').css('left', '');
    });
};

$('a.control_prev').on("click", () => {
    moveLeft();
});

$('a.control_next').on("click", () => {
    moveRight();
});