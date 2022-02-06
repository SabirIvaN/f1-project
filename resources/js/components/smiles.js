function blinkSmile(selector, firstElement, secondElement, time) {
    var flag = true;

    setInterval(function () {
        if (flag) {
            selector.textContent = firstElement;
        } else {
            selector.textContent = secondElement;
        }
        flag = !flag;
    }, time);
}

blinkSmile(document.querySelector('.smile-green'), '( ^ ‿ ~ )', '( ~ ‿ ~ )', 650);
blinkSmile(document.querySelector('.smile-yellow'), '( o ‿ o )', '( ᵔ ‿ ᵔ )', 700);
blinkSmile(document.querySelector('.smile-red'), '♡( ◡ ‿ ◡ )', ' ( ◕ ‿ ◕ )', 600);
