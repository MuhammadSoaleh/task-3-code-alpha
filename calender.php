<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.11/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.11/index.global.min.js'></script>
    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
        
      });
      calendar.getOption('locale');
        calendar.setOption('locale', 'fr');
    </script>
    <script>eventClassNames: 'myclassname'

eventClassNames: 'myclassname otherclassname' // multiple separated by spaces
eventClassNames: [ 'myclassname', 'otherclassname' ]

eventClassNames: function(arg) {
  if (arg.event.extendedProps.isUrgent) {
    return [ 'urgent' ]
  } else {
    return [ 'normal' ]
  }
}</script>
  </head>
  <body>
    <style>:root {
  --fc-border-color: black;
  --fc-daygrid-event-dot-width: 5px;
}

.fc .fc-col-header-cell-cushion {
  display: inline-block;
  padding: 2px 4px;
}
.fc .fc-col-header-cell-cushion { /* needs to be same precedence */
  padding-top: 5px; /* an override! */
  padding-bottom: 5px; /* an override! */
}</style>
    <div id='calendar'></div>
  </body>
</html>


