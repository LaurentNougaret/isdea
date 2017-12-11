$(document).ready(function(e) {

    $('.max100').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 100 max';
        $('.compteur100').text(msg);
        if (nombreCaractere > 100) { $('.compteur100').addClass("mauvais"); } else { $('.compteur100').removeClass("mauvais"); }
    });

    $('.max200').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('.compteur200').text(msg); 
        if (nombreCaractere > 200) { $('.compteur200').addClass("mauvais"); } else { $('.compteur200').removeClass("mauvais"); }
    });
    
    $('.max300').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('.compteur300').text(msg); 
        if (nombreCaractere > 300) { $('.compteur300').addClass("mauvais"); } else { $('.compteur300').removeClass("mauvais"); }
    });
    
    $('.max500').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('.compteur500').text(msg); 
        if (nombreCaractere > 500) { $('.compteur500').addClass("mauvais"); } else { $('.compteur500').removeClass("mauvais"); }
    });
    
    $('.max800').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 800 max';
        $('.compteur800').text(msg);
        if (nombreCaractere > 800) { $('.compteur800').addClass("mauvais"); } else { $('.compteur800').removeClass("mauvais"); }
    });
    
    $('.max1000').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('.compteur1000').text(msg);
        if (nombreCaractere > 1000) { $('.compteur1000').addClass("mauvais"); } else { $('.compteur1000').removeClass("mauvais"); }
    });
    
    $('.max1400').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1400 max';
        $('.compteur1400').text(msg);
        if (nombreCaractere > 1400) { $('.compteur1400').addClass("mauvais"); } else { $('.compteur1400').removeClass("mauvais"); }
    });
    
    $('.max1600').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('.compteur1600').text(msg);
        if (nombreCaractere > 1600) { $('.compteur1600').addClass("mauvais"); } else { $('.compteur1600').removeClass("mauvais"); }
    });


});