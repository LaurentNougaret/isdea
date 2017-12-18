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

// jQuery(document).ready(function($){
//
//     //portfolio - show link
//
//     $('.mypicture').hover(
//
//     function () {
//
//         $('.fdw-background').animate({opacity:'1'},300);
//
//     },
//
//         function () {
//
//         $('.fdw-background').animate({opacity:'0'});
//
//     }
//
//     );
//
//     $('.fdw-background').hover(
//
//         function () {
//
//             $('.fdw-background').animate({opacity:'1'});
//
//         },
//
//         function () {
//
//             $('.fdw-background').animate({opacity:'0'});
//
//         }
//
//     );
//
// });
//
//
