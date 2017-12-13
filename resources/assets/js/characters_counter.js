$(document).ready(function(e) {
    ///////// Section 1 //////////
    $('#title').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 100 max';
        $('#compteur1').text(msg);
    });

    $('#mandatory').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 100 max';
        $('#compteur2').text(msg);
    });

    $('#designer').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur3').text(msg);
    });
    
    $('#sponsor').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur4').text(msg);
    });
    
    $('#manager').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('#compteur5').text(msg);
    });
    
    $('#other').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('#compteur6').text(msg);
    });
    ///////// Section 2 ////////////
    $('#missing').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur7').text(msg);
    });
    //////// Section 3 //////////////
    $('#recall').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur8').text(msg);
    });
    
    $('#vigilance').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur9').text(msg);
    });

    $('#plu').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1400 max';
        $('#compteur10').text(msg);
    });
    //////// Section 4 //////////////
    $('#analysis-offer').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur11').text(msg);
    });

    $('#evo-candidacy1').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur12').text(msg);
    });

    $('#adv-prog').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur13').text(msg);
    });

    $('#urban').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur14').text(msg);
    });

    $('#advice').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur15').text(msg);
    });

    $('#character-innovative').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur16').text(msg);
    });

    $('#evo-candidacy2').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur17').text(msg);
    });

    $('#adv-innovative').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur18').text(msg);
    });

    $('#global-warning').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur19').text(msg);
    });

    $('#evo-candidacy3').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur20').text(msg);
    });

    $('#sections').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur21').text(msg);
    });

    $('#legal-assembly').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur22').text(msg);
    });

    $('#adv-assembly').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur23').text(msg);
    });
    
    $('#financial-arrangement').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 800 max';
        $('#compteur24').text(msg);
    });

    $('#adv-financial').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur25').text(msg);
    });
    
    $('#sale-price').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('#compteur26').text(msg);
    });

    $('#adv-price').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur27').text(msg);
    });
    //////// Section 5 //////////////
    $('#section-summary').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur28').text(msg);
    });
    //////// Section 7 //////////////
    $('#section-summary').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur38').text(msg);
    });
    $('#adv-summary').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur39').text(msg);
    });
    $('#commentaries').focus(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur40').text(msg);
    });
});
