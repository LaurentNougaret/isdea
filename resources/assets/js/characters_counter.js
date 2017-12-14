$(document).ready(function(e) {
    ///////// Section 1 //////////
    $('#title').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 100 max';
        $('#compteur1').text(msg);
    });

    $('#mandatory').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 100 max';
        $('#compteur2').text(msg);
    });

    $('#designer').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur3').text(msg);
    });
    
    $('#sponsor').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur4').text(msg);
    });
    
    $('#manager').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('#compteur5').text(msg);
    });
    
    $('#other').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('#compteur6').text(msg);
    });
    ///////// Section 2 ////////////
    $('#missing').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur7').text(msg);
    });
    //////// Section 3 //////////////
    $('#recall').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur8').text(msg);
    });
    
    $('#vigilance').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur9').text(msg);
    });

    $('#plu').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1400 max';
        $('#compteur10').text(msg);
    });
    //////// Section 4 //////////////
    $('#analysis-offer').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur11').text(msg);
    });

    $('#evo-candidacy1').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur12').text(msg);
    });

    $('#adv-prog').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur13').text(msg);
    });

    $('#urban').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur14').text(msg);
    });

    $('#advice').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur15').text(msg);
    });

    $('#character-innovative').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur16').text(msg);
    });

    $('#evo-candidacy2').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur17').text(msg);
    });

    $('#adv-innovative').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur18').text(msg);
    });

    $('#global-warning').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur19').text(msg);
    });

    $('#evo-candidacy3').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur20').text(msg);
    });

    $('#sections').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur21').text(msg);
    });

    $('#legal-assembly').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1600 max';
        $('#compteur22').text(msg);
    });

    $('#adv-assembly').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur23').text(msg);
    });
    
    $('#financial-arrangement').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 800 max';
        $('#compteur24').text(msg);
    });

    $('#adv-financial').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur25').text(msg);
    });
    
    $('#sale-price').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 500 max';
        $('#compteur26').text(msg);
    });

    $('#adv-price').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 200 max';
        $('#compteur27').text(msg);
    });
    //////// Section 5 //////////////
    $('#section-summary').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur28').text(msg);
    });
    //////// Section 7 //////////////
    $('#section-summary').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur38').text(msg);
    });
    $('#adv-summary').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 300 max';
        $('#compteur39').text(msg);
    });
    $('#commentaries').keyup(function() {
        var nombreCaractere = $(this).val().length;
        var msg = ' ' + nombreCaractere + ' / 1000 max';
        $('#compteur40').text(msg);
    });
});