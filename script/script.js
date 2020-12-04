// Форма
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





// Валидация формы
let name = document.getElementById('name'),
    surename = document.getElementById('surename'),
    status = document.getElementById('status'),
    residence = document.getElementById('residence'),
    frequent_visit = document.getElementById('frequent_visit');


// Для того чтобы в реал тайме выдавать красные бордеры у инпутов

// name (имя)
name.onchange = function() {
    if(name.value === "" || name.value.length < 2) {
        name.style.border = "2px solid red";
    } else {
        name.style.border = "2px solid black";
    }
}

// surename (фамилия)
surename.onchange = function() {
    if(surename.value === "" || surename.value.length < 3) {
        surename.style.border = "2px solid red";
    } else {
        surename.style.border = "2px solid black";
    }
}

// status (статус болезни)
status.onchange = function() {
    if(status.value === "default") {
        status.style.border = "2px solid red";
    } else {
        status.style.border = "2px solid black";
    }
}

// residence (место проживания)
residence.onchange = function() {
    if(residence.value === "" || residence.value.length < 3) {
        residence.style.border = "2px solid red";
    } else {
        residence.style.border = "2px solid black";
    }
}

// frequent_visit (частое посещение)
frequent_visit.onchange = function() {
    if(frequent_visit.value === "" || frequent_visit.value.length < 3) {
        frequent_visit.style.border = "2px solid red";
    } else {
        frequent_visit.style.border = "2px solid black";
    }
}


// Функция самой валидации
function validate(element) {
    // name (имя)
    if(name.value === "" || name.value.length < 2) {
        name.style.border = "2px solid red";
        return false;
    }

    // surename (фамилия)
    if(surename.value === "" || surename.value.length < 3) {
        surename.style.border = "2px solid red";
        return false;
    }

    // status (статус болезни)
    if(status.value === "default") {
        status.style.border = "2px solid red";
        return false;
    }

    // residence (место проживания)
    if(residence.value === "" || residence.value.length < 3) {
        residence.style.border = "2px solid red";
        return false;
    }

    // frequent_visit (частое посещение)
    if(frequent_visit.value === "" || frequent_visit.value.length < 3) {
        frequent_visit.style.border = "2px solid red";
        return false;
    }

    return true; // Если прошла вся валидация
}