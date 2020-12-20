var prevLeft = 0;
$(document).scroll( function(evt) {
    var currentLeft = $(this).scrollLeft();
    if(prevLeft != currentLeft) {
        prevLeft = currentLeft;
        console.log("I scrolled horizontally.");
    }
});
