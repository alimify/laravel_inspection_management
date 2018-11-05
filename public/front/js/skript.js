(function($) {
    "use strict"

  /*  var win_withd = $(window).width();
    var menu_triger = "<span class='caret caret_up'></span>";
    var has_submenu = $("ul li").has("ul").addClass("has_submenu").find(">a").prepend(menu_triger);
    $(".caret").on("click", function() {
        $(this).toggleClass("caret_down").closest("li").siblings().find(".caret").removeClass("caret_down");
        $(this).closest("li").find(">ul").stop(true, true).slideToggle("slow");
    })*/

var win_width=$(window).width();
if(win_width>767){
var windowH = $(window).height();
$(".thanks_area").css("height", windowH + "px");
}
})(jQuery);
