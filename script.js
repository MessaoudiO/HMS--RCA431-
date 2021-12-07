$(document).ready(function () {
    //Exercice 1:

    $("img").hide(0); // premet de cache les images 
    $("img").fadeToggle(1000, function () {
        $("img").show();
        // pour fair la transition (disparaitre + fade in) a la vitesse 1000 et la fonction 
        // qui sexicute apres que le fade et fini ici la fonction 
        // fait apparaitre les image .show()
    });
    //Exercice 2:
    $("#im1").click(function () {
        $("#im1").hide(0);
        $("#im1").fadeToggle(4000, function () {
            $("im1").show();
            // pour fair la transition (disparaitre + fade in) a la vitesse 4000 (4s) et la fonction 
            // qui s'execute apres que le fade et fini ici la fonction 
            // fait apparaitre l'image .show()
        });
    });
    //Exercice 3:
    $(".choix").on({
        mouseenter: function () { // souris sur l'image
            $(this).animate({   // this point vers choix 
                opacity: '1',
            });
        },
        mouseleave: function () { // souris quitte l'image 
            $(this).animate({  // this point vers choix 
                opacity: '0.5',
            });
        }

    })
    // Exercice 4 :
    $("#im2").click(function () {

        var img1 = $("#im2").attr("src"); // varriable pour echanger les images 
        var img2 = $("#im1").attr("src");
        $("#im1").attr("src", img1); // ici on specifie l'attribue source et la valeur img 1 
        $("#im2").attr("src", img2); // ici on specifie l'attribue source et la valeur img 1 
        $("#im2").hide(); // faire diparaitre im2
        $("#im2").fadeToggle(1000, function () { // deja explique
            $("#im2").show(); // deja explique

        });
    });
    // Exercice 5:
    $("#im3").mouseenter(function () {
        $("#im1").animate({ // pour redimensionne l'image
            height: '150px',
            width: '150px',
        });
    });
    $("#im3").click(function () {
        $("#im1").hide();
        var img1 = $("#im3").attr("src");
        var img3 = $("#im1").attr("src");
        $("#im1").attr("src", img1);
        $("#im3").attr("src", img3);
        $("#im1").show();
        $("#im1").fadeToggle(500, function () {
            $("#im3").show();
            $("#im1").animate({  // pour redimensionne l'image
                height: '400px',
                width: '600px',
            });
        });
    });
    // Exercice 6:
    $("#bouton").click(function () {
        var img1 = $("#im2").attr("src"); // ici on specifie l'attribue source de l'image 2 et on la mets dans la variable img1 pour facilite la rotation des images
        var img3 = $("#im4").attr("src"); // meme chose image diferent dans une variable diferent 
        var img2 = $("#im3").attr("src");
        var img4 = $("#im1").attr("src");

        $("#im1").attr("src", img1);
        $("#im3").attr("src", img3);
        $("#im2").attr("src", img2);
        $("#im4").attr("src", img4);

        $("#im1").show(); // afficher
        $("#im2").show();
        $("#im3").show();
        $("#im4").show();
    });
    //Exercice 7:
    $("#im4").click(function () {

        $(".choix").animate({
            left: '197px',
        });


        $("#im1").fadeToggle(1000, function () {
            $("#im1").show();
            var image1 = $("#im4").attr("src");
            var image2 = $("#im1").attr("src");
            $("#im1").attr("src", image1);
            $("#im4").attr("src", image2);
            $("#im1").show();
            $("#im4").show();
            $(".choix").animate({
                left: '0px',
            });
        });
    });


});