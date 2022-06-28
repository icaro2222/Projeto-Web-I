(function(win,doc){
    'use strict';
    //Exibir o calendário
    function getCalendar(perfil, div)
    {

        if(perfil == 'Discente'){
            var event =  '../Discente/jsonDis.php';
        }else if(perfil == 'Tutor'){
            var event =  '../Discente/json.php';
        }else if(perfil == 'Tutor1'){
            var event =  '../Discente/json.php';
        }else if(perfil == 'Discente1'){
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
                
            events: event,

            eventClick: function(info) {
                if(perfil == 'Tutor'){
                    // win.location.href=`/Projeto_Web_I_Oficial/IFHelth-Beta/view/home/dashboard.php?menuop=agendamento&idAgendar=${info.event.id}&start=${info.event.start}`;
                }else if(perfil == 'Discente'){
                    win.location.href=`/Projeto_Web_I_Oficial/IFHelth-Beta/view/home/dashboard.php?menuop=agendamento&idAgendar=${info.event.id}&start=${info.event.start}`;
                }else if(perfil == 'Tutor1'){
                    win.location.href=`/Projeto_Web_I_Oficial/IFHelth-Beta/view/home/dashboard.php?menuop=horario&idAgendar=${info.event.id}&start=${info.event.start}`;
                }else if(perfil == 'Discente1'){
                    win.location.href=`/Projeto_Web_I_Oficial/IFHelth-Beta/view/home/dashboard.php?menuop=horario&idAgendar=${info.event.id}&start=${info.event.start}`;
                }
            }
        });
        calendar.render();
    }

    if(doc.querySelector('.calendarDiscente')){
        getCalendar('Discente','.calendarDiscente');
    }else if(doc.querySelector('.calendarTutor')){
        getCalendar('Tutor','.calendarTutor');
    }else if(doc.querySelector('.calendarDiscente1')){
        getCalendar('Discente1','.calendarDiscente1');
    }else if(doc.querySelector('.calendarTutor1')){
        getCalendar('Tutor1','.calendarTutor1');
    }

})(window,document);