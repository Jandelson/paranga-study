document.addEventListener('DOMContentLoaded', function() {
    var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
        keyboard: false
      })
      
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                // myModal.show();
                var title = CapturaTexto();
                if (title) {
                    calendar.addEvent({
                        title: title,
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    })
                }
                calendar.unselect()
            },
            eventClick: function(arg) {
                if (confirm('Are you sure you want to delete this event?')) {
                    arg.event.remove()
                }
            },
            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
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

    function CapturaTexto(){
        var titulo = 'Tesando Retorno';

        return titulo;
    }