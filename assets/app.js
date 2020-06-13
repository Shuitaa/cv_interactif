"use strict";

$(function () {
    $(".skill-content").css({
        "transform": "translateX(-42.98px)" // résolution d'un bug graphique
    });
    slider(); //appelle de la fonction slider
    $(".circle-skill").each(function () { //ajout de l'animation à tous les cercles
        var idSkill = $(this).attr("id");
        $(this).toggleClass("circle-anim-" + idSkill);
    });


    $(".experience-icon").on("click", function () { //détection du clic sur le bouton like
        var getid = $(this).attr("id") //récupération du bouton like
        $.get("assets/app.php", {
            id: getid
        }, function (likes) { //utilisation d'une API qui récupére le nombre de like encoder en json par la page app.php
            var likesSplit = likes.split(',');
            likes = likesSplit[0];
            var likes_heart = likesSplit[1];
            $("#like-" + getid).empty(); //On vide le contenu du span qui contient le nombre de like
            $("#like-" + getid).append(likes + " "); //on rajoute le nombre de like à ce span
            if (likes_heart == 1) { //test qui met le bouton en rouge si il est like
                $("#" + getid).html('<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><path fill="#ed4956" d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>');
            } else {
                $("#" + getid).html('<svg fill="#262626" id="heart-' + getid + '" xmlns="http://www.w3.org/2000/svg" width="24"height="24" viewBox="0 0 48 48"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>');
            }
        });
    });
});

//fonction slider
function slider() {
    $(".button-next").on("click", function () { //au clic sur le bouton suivant, déplacement des cercles vers la gauche dans la div
        $(".button-previous").show(); //apparition du bouton précédent
        $(".skill-content").css({
            "transform": "translateX(-501px)",
            "transition": "transform 0.6s ease"
        });
        $(".button-next").hide(); //dispparition du bouton suivant
    });
    $(".button-previous").on("click", function () { //au clic sur le bouton précedent, déplacement des cercles vers la droite dans la div
        $(".button-next").show(); // apparition du bouton suivant
        $(".skill-content").css({
            "transform": "translateX(-42.98px)",
            "transition": "transform 0.6s ease"
        });
        $(".button-previous").hide(); //disparition du bouton précédent
    });
}