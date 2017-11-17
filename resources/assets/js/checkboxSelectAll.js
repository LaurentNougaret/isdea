$(function() {
    $('.js-group-checkable').click(function() {
        if ($(this).prop('checked')) {
            $('.js-checkbox-selected').prop('checked', true);
        } else {
            $('.js-checkbox-selected').prop('checked', false);
        }
    });
});
