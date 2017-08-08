window.onload = function(event) {
    let blockSearchBtn = document.getElementById('block-search-btn'),
        navSearchBtn = document.getElementById('nav-search-btn');
    blockSearchBtn.setAttribute('disabled', true);
    document.getElementById('block-field').onkeyup = function() {
        let blockField = document.getElementById('block-field');
        blockSearchBtn.disabled = !(blockField.value !== 0 && /\S/.test(blockField.value));
    };
    navSearchBtn.setAttribute('disabled', true);
    document.getElementById('nav-field').onkeyup = function() {
        let navField = document.getElementById('nav-field');
        navSearchBtn.disabled = !(navField.value !== 0 && /\S/.test(navField.value));
    };
};

