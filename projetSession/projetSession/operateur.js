
//test de fonction JQUery pour m'aider à l'apprentissage de son utilisation.

$(document).ready(function(){

    // Permet de cacher et montrer une image selon la position du curseur.
    $(".bandit").hover(function(){
        $(".img").hide();
        $(".banditI").show();
    });
    $(".aruni").hover(function(){
        $(".img").hide();
        $(".aruniI").show();
    });
    $(".doc").hover(function(){
        $(".img").hide();
        $(".docI").show();
    });
    $(".kapkan").hover(function(){
        $(".img").hide();
        $(".kapkanI").show();
    });
    $(".cav").hover(function(){
        $(".img").hide();
        $(".cavI").show();
    });


    $(".ace").hover(function(){
        $(".img").hide();
        $(".aceI").show();
    });
    $(".buck").hover(function(){
        $(".img").hide();
        $(".buckI").show();
    });
    $(".dok").hover(function(){
        $(".img").hide();
        $(".dokI").show();
    });
    $(".thermite").hover(function(){
        $(".img").hide();
        $(".thermiteI").show();
    });




// Bouton permet de voir une interface différente.

    $(".Atk").click(function(){
        $(".Defence").hide();
        $(".Attaquant").show();
    });
    $(".Def").click(function(){
        $(".Attaquant").hide();
        $(".Defence").show();
    });

});

