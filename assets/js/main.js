$(document).ready(function() {
    let blockSearchBtn = $('#block-search-btn');
    blockSearchBtn.attr('disabled', true)
    $('#block-field').keyup(function () {
        if($(this).val().length !== 0 && /\S/.test($(this).val()))
            blockSearchBtn.attr('disabled', false);
        else
            blockSearchBtn.attr('disabled', true);
    });
    let navSearchBtn = $('#nav-search-btn');
    navSearchBtn.attr('disabled', true);
    $('#nav-field').keyup(function () {
        if($(this).val().length !== 0 && /\S/.test($(this).val()))
            navSearchBtn.attr('disabled', false);
        else
            navSearchBtn.attr('disabled', true);
    });
});