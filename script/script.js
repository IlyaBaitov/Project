let container = document.getElementById('container');
let open_btn = document.getElementById('open_form');
let close_btn = document.querySelector('#close_form_btn');

// Открытие формы
open_btn.onclick = function() {
    container.style.display = "block";
}

// Закрытие при нажатии на кнопку #close_form_btn
close_btn.onclick = function() {
    container.style.display = "none";
}

// Закрытие при нажатии вокруг формы
window.onclick = function(event) {
    if(event.target == container)
        container.style.display = "none";
}