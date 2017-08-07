$(document).ready(function() {
    $('.search-btn').attr('disabled', true);
    $('.search-query').keyup(function () {
        if($(this).val().length !== 0 && /\S/.test($(this).val()))
            $('.search-btn').attr('disabled', false);
        else
            $('.search-btn').attr('disabled', true);
    });
    console.log("Clicked");
});
