var phones = document.querySelectorAll('input[type="tel"]');
var phoneMask = new Inputmask("+7 (999) 999-99-99");

phones.forEach(function(item, i, arr) {
    phoneMask.mask(item);
});
