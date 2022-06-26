// (function(win,doc){
//     'use strict';

//     let calendarEl = doc.querySelector('.calendar');
//     let calendar = new FullCalendar.Calendar(calendarEl, {
//         initialView: 'dayGridMonth',
//         headerToolbar:{
//             start: 'prev,next,today',
//             center: 'title',
//             end: 'dayGridMonth, timeGridWeek, timeGridDay'
//         },
//         buttonText:{
//             today:    'hoje',
//             month:    'mês',
//             week:     'semana',
//             day:      'dia'
//         },
//         locale:'pt-br',
//         dateClick: function(info) {
//             alert('Clicked on: ' + info.dateStr);
//             alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
//             alert('Current view: ' + info.view.type);
//             // change the day's background color just for fun
//             info.dayEl.style.backgroundColor = 'green';
//         },
//         events: '../Discente/jsonDis.php',
//     });
//     calendar.render();
    
// })(window,document);