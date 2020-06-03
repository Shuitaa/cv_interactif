"use strict";

$(function () {
    $(".skill-content").css({
        "transform": "translateX(0px)"
    });
    slider();
    console.log("ça marche")
    $(".circle-skill").each(function () {
        var idSkill = $(this).attr("id");
        $(this).toggleClass("circle-anim-" + idSkill);
    });

});

function slider() {
    $(".button-next").on("click", function () {
        $(".button-previous").show();
        $(".skill-content").css({
            "transform": "translateX(-456px)",
            "transition": "transform 0.6s ease"
        });
        $(".button-next").hide();
    });
    $(".button-previous").on("click", function () {
        $(".button-next").show();
        $(".skill-content").css({
            "transform": "translateX(0px)",
            "transition": "transform 0.6s ease"
        });
        $(".button-previous").hide();
    });
}