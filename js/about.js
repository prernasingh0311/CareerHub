var $sidebar   = $("#right"), 
$window    = $(window),
offset     = $sidebar.offset(),
topPadding = 15;

$window.scroll(function() {
if ($window.scrollTop() > offset.top) {
    $sidebar.stop().animate({
        marginTop: $window.scrollTop() - offset.top + topPadding
    }, 400);
} else {
    $sidebar.stop().animate({
        marginTop: 0
    }, 400);
}
