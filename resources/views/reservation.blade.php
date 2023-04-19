
{{-- fullcalendar. --}}
<x-app-layout>
@include('header')

<div class="container mt-4" id='calendar'></div> 

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
<script>
 
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      headerToolbar:{
  start: 'prev', // will normally be on the left. if RTL, will be on the right
  center: 'title',
  end: 'today next listWeek dayGridMonth' // will normally be on the right. if RTL, will be on the left
},
events: [
  @foreach ($reservations as $reservation)    
    {
      title: '{{$reservation->user->name}}  {{ "Tel : " .$reservation->user->phone }} ',
      start: '{{$reservation->date_debut}}',
      end: '{{$reservation->date_fin}}',
      url:'{{route("checkreservation",$reservation->id)}}',
      className: '{{$reservation->status == 1 ? "bg-success" : ( $reservation->status == 2 ? "bg-danger" : "" )}}',
    }, 
  @endforeach
  ],
    });
    calendar.render();
  });

</script>

</x-app-layout>