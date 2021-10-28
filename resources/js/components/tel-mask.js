const phones    = document.querySelectorAll('input[type="tel"]');
const phoneMask = new Inputmask("+7 (999) 999-99-99");

phones.forEach(function(item) {
    phoneMask.mask(item);
});
