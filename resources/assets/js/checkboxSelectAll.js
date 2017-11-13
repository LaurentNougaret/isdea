$(function() {

    $('.group-checkable').click(function() {
        if ($(this).prop('checked')) {
            $('.checkbox').prop('checked', true);
        } else {
            $('.checkbox').prop('checked', false);
        }
    });

});

