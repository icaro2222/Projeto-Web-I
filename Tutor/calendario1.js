(function(win,doc){
    'use strict';
    //Exibir o calendário
    function getCalendar(perfil, div)
    {

        if(perfil == 'Discente'){
            var event =  '../Discente/jsonDis.php';
        }else if(perfil == 'Tutor'){
            var event =  '../Discente/json.php';
        }

        let calendarEl=doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar:{
                start: 'prev,next,today',
                center: 'title',
                end: 'dayGridMonth, timeGridWeek, timeGridDay'
            },
            buttonText:{
                today:    'hoje',
                month:    'mês',
                week:     'semana',
                day:      'dia'
            },
            locale:'pt-br',
            dateClick: function(info) {
                if(perfil == 'Discente'){
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGridWeek', info.dateStr);
                        
                    }
                    if(info.view.type == 'timeGridWeek'){
                            calendar.changeView('timeGridDay', info.dateStr);
                    }
                }else{
                    if(info.view.type == 'dayGridMonth'){
                        calendar.changeView('timeGridWeek', info.dateStr);
                        
                    }
                    if(info.view.type == 'timeGridWeek'){
                            calendar.changeView('timeGridDay', info.dateStr);
                    }
                }
                /*alert('Clicked on: ' + info.dateStr);
                alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
                alert('Current view: ' + info.view.type);*/
            },
                
            events: event

            // eventClick: function(info) {
            //     if(perfil == 'Tutor'){
            //         win.location.href=`/view/manager/editar?id=${info.event.id}`;
            //     }
            // }
        });
        calendar.render();
    }

    if(doc.querySelector('.calendarDiscente')){
        getCalendar('Discente','.calendarDiscente');
    }else if(doc.querySelector('.calendarTutor')){
        getCalendar('Tutor','.calendarTutor');
    }

})(window,document);