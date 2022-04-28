document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'pt-br',
      initialView: 'timeGridThreeDay',
      headerToolbar: {
        left: 'prev,next',
        center: '',
        right: 'timeGridThreeDay,timeGridWeek,dayGridMonth'
      },
      views: {
        timeGridThreeDay: {
          type: 'timeGrid',
          dayCount: 3
        }
      },
      buttonText: {
        timeGridThreeDay: 'Três dias',
        timeGridWeek: 'Semana',
        dayGridMonth: 'Mês'
      },     
      height: 'auto',
      slotMinTime: "07:00:00",
      slotMaxTime: "22:00:00",
      slotLabelInterval: "00:30",
      slotLabelFormat: {
        hour: '2-digit',
        minute: '2-digit',
        omitZeroMinute: false,
        meridiem: 'short'
      },                
      displayEventTime: false
    });
    calendar.addEvent({
      title: 'Leonardo',
      start: '2022-04-12T10:00:00',
      end: '2022-04-12T10:30:00',
      textColor: 'white',
      backgroundColor: 'blue'
    });
    calendar.addEvent({
      title: 'Vinicius',
      start: '2022-04-12T10:30:00',
      end: '2022-04-12T11:00:00',
      textColor: 'white',
      backgroundColor: 'purple'
    });
    calendar.render();  
});