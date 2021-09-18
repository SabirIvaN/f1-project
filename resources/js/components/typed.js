import Typed from 'typed.js';

const startBannerRu = document.querySelector('#start-banner-ru');
const startBannerEn = document.querySelector('#start-banner-en');
const endBannerRu = document.querySelector('#end-banner-ru');
const endBannerEn = document.querySelector('#end-banner-en');

const startBannerRuText = startBannerRu.textContent;
const startBannerEnText = startBannerEn.textContent;
const endBannerRuText = endBannerRu.textContent;
const endBannerEnText = endBannerEn.textContent;

startBannerRu.textContent = '';
startBannerEn.textContent = '';
endBannerRu.textContent = '';
endBannerEn.textContent = '';

function typed (element, firstElement, secondElement) {
    var typed = new Typed(element, {
        strings: [firstElement, secondElement],
        backDelay: 3000,
        typeSpeed: 30,
        backSpeed: 30,
        loop: true,
    });
}

typed(startBannerRu, startBannerRuText, startBannerEnText);
typed(endBannerRu, endBannerRuText, endBannerEnText);
