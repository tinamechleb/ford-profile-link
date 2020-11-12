$(document).ready(function(){
    $('.slider-container').slick();
});

$(function(){
    setTimeout(myTimer,4000)
})

function myTimer() {
    $('.slick-arrow').trigger('click');

    setTimeout(myTimer,4000);
}