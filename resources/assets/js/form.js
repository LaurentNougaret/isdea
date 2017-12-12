var compteur = 0;

$('.forms_label').on('click', function(e) {
    compteur = parseInt($(this).prev().val())
});

$('.btn-outline-success').click(() => {
    compteur++;
$(':radio:eq(' + compteur + ')').trigger('click');
});

$('button#btnreturn').click(() => {
    compteur--;
$(':radio:eq(' + compteur + ')').trigger('click');
});

jQuery(document).ready(function($){

    //portfolio - show link

    $('.fdw-background').hover(

    function () {

        $(this).animate({opacity:'1'});

    },

    function () {

        $(this).animate({opacity:'0'});

    }

    );

});

