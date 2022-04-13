document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'pt-br',
      initialView: 'timeGridThreeDay',
      headerToolbar: {
        left: 'prev,next',
        center: 'addEventButton',
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
      customButtons: {
        addEventButton: {
          text: 'add event...',
          click: function() {
            var dateStr = prompt('Enter a date in YYYY-MM-DD format');
            var date = new Date(dateStr + 'T00:00:00'); // will be in local time
  
            if (!isNaN(date.valueOf())) { // valid?
              calendar.addEvent({
                title: 'dynamic event',
                start: date,
                end: date,
                startTime: '10:00',
                endTime: '10:30',
                allDay: false
              });
              alert('Great. Now, update your database...');
            } else {
              alert('Invalid date.');
            }
          }
        }
      }
    });
    
    calendar.render();  
});