"use strict";

$(function(){
    $(".button-next").on("click",function(){
        $(".button-previous").show();
        $(".skill-content").css({"transform":"translateX(-240px)","transition":"transform 0.6s ease"});
        $(".button-next").hide();
    });
    $(".button-previous").on("click",function(){
        $(".button-next").show();
        $(".skill-content").css({"transform":"translateX(0px)","transition":"transform 0.6s ease"})
        $(".button-previous").hide();
    });
});

