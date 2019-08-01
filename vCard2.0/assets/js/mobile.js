$(document).ready(function() {
    $('.toggleOpen').click(function() {
        $("header nav ul").toggleClass("open");
    });
    $('.nav-item').click(function() {
        $("header nav ul").toggleClass("open");
    });
});