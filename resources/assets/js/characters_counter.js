$(document).ready(function(e) {

    $('.small_textarea').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + caractere(s) / 200;
        $('#compteur').text(msg);
        if (nombreCaractere > 200) { $('#compteur').addClass("mauvais"); } else { $('#compteur').removeClass("mauvais"); }
    });
    $('.middle_textarea').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + caractere(s) / 100;
        $('#compteur').text(msg);
        if (nombreCaractere > 100) { $('#compteur').addClass("mauvais"); } else { $('#compteur').removeClass("mauvais"); }
    })
    $('.high_textarea').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + caractere(s) / 200;
        $('#compteur').text(msg);
        if (nombreCaractere > 200) { $('#compteur').addClass("mauvais"); } else { $('#compteur').removeClass("mauvais"); }
    })
    $('.very_high_textarea').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + caractere(s) / 200;
        $('#compteur').text(msg);
        if (nombreCaractere > 200) { $('#compteur').addClass("mauvais"); } else { $('#compteur').removeClass("mauvais"); }
    })

});