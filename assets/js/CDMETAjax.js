$(document).ready(function() {
    $('#TableBitacoras').DataTable({
        'info': false,
        'searching': false,
        "lengthChange": false
    });
    $('#TableBitacorasSubidas').DataTable({
        'info': false,
        'searching': false,
        "lengthChange": false
    });
    $('#TableVisitas').DataTable({
        'info': false,
        'searching': false,
        "lengthChange": false
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        selectable: true,
        locale: "es",
        headerToolbar: {
            left: 'title',
            center: '',
            right: 'prev,next'
        },
        footerToolbar: {
            left: '',
            center: '',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,today'
        },
        handleWindowResize: true,
        weekNumbers: true,
        weekText: "",
        dateClick: function(info) {
            $('#myModal').modal();
            $("#Date").val(info.dateStr);
        }
    });
    calendar.render();
    calendar.setOption('locale', 'es');
});