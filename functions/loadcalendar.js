$(document).ready(function () {
    "use strict";
    var calendar = $('#calendar').fullCalendar({
        header: {
            right: 'prev,next today',
            center: 'title',
            left: 'month,agendaWeek,agendaDay'
        },
        events: 'load.php',
        eventColor: [
            '#E91E63'
        ]
    });
});

//            '#00c4ff'
//            '#348fe2'