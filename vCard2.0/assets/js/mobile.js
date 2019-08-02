$(document).ready(function() {
    $('.toggleOpen').click(function() {
        $("header nav ul").toggleClass("open");
    });
    $('.toggleOpen').click(function() {
        $(".fa-bars").toggleClass("open");
    });
    $('.toggleOpen').click(function() {
        $(".fa-times").toggleClass("open");
    });
    $('.button').click(function(){
        location.reload();
        alert("E-Mail wurde Versendet!");
    });
});