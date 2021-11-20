document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        select: function (arg) {
            var title = CapturaTexto();
            if (title != '') {
                sendAjax(arg.start, arg.end);
                calendar.addEvent({
                    title: title,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay
                });
            }
            calendar.unselect()
        },
        eventClick: function (arg) {
            if (confirm('Excluir evento?')) {
                arg.event.remove()
            }
        },
        editable: true,
        // dayMaxEvents: true, // allow "more" link when too many events
        events: [{
            title: 'All Day Event',
            start: '2021-09-01'
        },
        {
            title: 'Long Event',
            start: '2021-09-07',
            end: '2021-09-10'
        },
        {
            groupId: 999,
            title: 'Repeating Event',
            start: '2021-09-09T16:00:00'
        },
        {
            groupId: 999,
            title: 'Repeating Event',
            start: '2021-09-16T16:00:00'
        },
        {
            title: 'Conference',
            start: '2021-09-11',
            end: '2021-09-13'
        },
        {
            title: 'Meeting',
            start: '2021-09-12T10:30:00',
            end: '2021-09-12T12:30:00'
        },
        {
            title: 'Lunch',
            start: '2021-09-12T12:00:00'
        },
        {
            title: 'Meeting',
            start: '2021-09-12T14:30:00'
        },
        {
            title: 'Happy Hour',
            start: '2021-09-12T17:30:00'
        },
        {
            title: 'Dinner',
            start: '2021-09-12T20:00:00'
        },
        {
            title: 'Birthday Party',
            start: '2021-09-13T07:00:00'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2021-09-28'
        }
        ]
    });

    calendar.render();
});


/**
 * Captura texto e valida Campos, após limpa os dados
 * 
 * @param {Boolean} origem 
 * @returns {String}
 */
function CapturaTexto(origem) {

    var myModal = new bootstrap.Modal(document.getElementById('ObrigaCampos'), {
        keyboard: false
    })
    var tituloValido = $("#titulo")[0].value.trim();

    var titulo = $("#titulo").val();
    var anotacao = $("#anotacao").val();
    var tipo = $("#tipo").val();
    var url = $("#url").val();
    var idContato = $("#idContato").val();

    if (tituloValido != '') {
        if (origem) {
            limpaCampo();
            return [titulo, anotacao, tipo, url, idContato];
        } else {
            return titulo;
        }
    } else {
        myModal.show();
        return '';
    }

}

/**
 * Envia dados Via ajax
 * @param {Date} start
 * @param {Date} end
 * 
 * @returns {Boolean}
 */
function sendAjax(start, end) {

    var values = CapturaTexto(true);
    var data_start = FiltraData(start, 'start');
    var data_end = FiltraData(end, 'end');
    var resp = false;

    $.ajax({
        url: "agenda.php",
        type: "POST",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: false, // HERE
        data: {
            'titulo': values[0],
            'anotacao': values[1],
            'tipo': values[2],
            'url': values[3],
            'start': data_start,
            'end': data_end,
        },
        success: function (response) {
            resp = true;
        }
    });

    return resp;
}

/**
 * Metodo para tratar a data
 * @param {Date} data 
 * @param {String} origem 
 * 
 * @returns {String}
 */
function FiltraData(data, origem) {
    var dia, mes, ano, hora, gethora, getminuto, getsegundo;
    hoje = new Date;

    dia = data.getDate();
    mes = data.getUTCMonth() + 1;
    ano = data.getFullYear();

    gethora = data.getHours();
    getminuto = data.getMinutes();
    getsegundo = data.getSeconds();

    if (mes < 10) {
        mes = '0' + mes;
    }

    if (gethora == 0 || gethora == '0') {
        gethora = hoje.getHours() + 1;
        getminuto = '00';
        getsegundo = hoje.getSeconds();

        if (origem == 'end') {
            getminuto = 30;
        }
        hora = gethora + ':' + getminuto + ':' + getsegundo;

    } else {
        hora = gethora + ':' + getminuto + ':' + getsegundo;
    }
    return [dia, mes, ano, hora];
}

/**
 * Function responsavel por limpar os campos quando 
 * a ação for true
 * @returns {VOID}
 */
function limpaCampo() {
    $("#titulo")[0].value = '';
    $("#anotacao")[0].value = '';
    $("#tipo")[0].value = '';
    $("#url")[0].value = '';
}


/**
 * Valida se a senha é a mesma 
 * quando o usuário digita 
 * novamente
 * 
 * @returns {void} 
 */
function confirmPassword() {
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    var msgValid = document.getElementById("msgValid");
    
    msgValid.setAttribute('class', '');
    msgValid.innerText = '';
    if(password.value != '' && confirm_password.value != ''){
        if (password.value != confirm_password.value) {
            password.value = '';
            confirm_password.value = '';
            msgValid.setAttribute('class', 'invalid-feedback d-block');
            msgValid.innerText = 'Senhas diferentes, tente novamente!';
        } else {
            msgValid.setAttribute('class', 'valid-feedback d-block');
            msgValid.innerText = 'Senha válidada!';
            confirm_password.setCustomValidity('');
        }
    }
}