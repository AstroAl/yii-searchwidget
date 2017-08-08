window.onload = function(event) {
    let blockSearchBtn = document.getElementById('block-search-btn'),
        navSearchBtn = document.getElementById('nav-search-btn');
    blockSearchBtn.setAttribute('disabled', true);
    document.getElementById('block-field').onkeyup = function() {
        let blockField = document.getElementById('block-field');
        if(blockField.value !== 0 && /\S/.test(blockField.value))
            blockSearchBtn.setAttribute('disabled', false);
        else
            blockSearchBtn.setAttribute('disabled', true);
    };
    navSearchBtn.setAttribute('disabled', true);
    document.getElementById('nav-field').onkeyup = function() {
        let blockField = document.getElementById('nav-field');
        if(blockField.value !== 0 && /\S/.test(blockField.value))
            navSearchBtn.setAttribute('disabled', false);
        else
            navSearchBtn.setAttribute('disabled', true);
    };
};
