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

