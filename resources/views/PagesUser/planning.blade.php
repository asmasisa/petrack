<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="fullcalendar.min.css" rel="stylesheet">
    <script src="{{ asset('./js/fullcalendar.min.js') }}"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <script src="{{ asset('./js/moment.min.js') }}"></script>
    <script src="{{ asset('./js/jquery.min.js') }}"></script>

    

    <link href="../css/User.css" rel="stylesheet">

    <title>Planning</title>
</head>
<body>
  
  @extends('layout.app')

  @section('content')
  <div id="content-container" class="container">
        <!-- Le contenu de chaque section sera chargé ici -->
    <div class="Agenda">
        <div id='calendar'></div>
        <div id="event-form" >
            <h2>Ajouter un rendez-vous ou une note</h2>
            <input type="text" id="event-title" placeholder="Nom de l'animal" required>
            <input type="text" id="event-title" placeholder="Titre" required>
            <input type="text" id="event-date" placeholder="Date (AAAA-MM-JJ)" required>
            <input type="text" id="event-time" placeholder="Heure (HH:MM)">
            <textarea id="event-description" placeholder="Description"></textarea>
            <button id="add-event">Ajouter</button>
        </div>
    </div>
</div>
</div>
@endsection

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
      // Ajoutez d'autres options de configuration de FullCalendar ici
    });
    calendar.render();

    // Gestion de la soumission du formulaire pour ajouter un événement
    $('#add-event').on('click', function() {
      var title = $('#event-title').val();
      var date = $('#event-date').val();
      var time = $('#event-time').val();
      var description = $('#event-description').val();

      var eventData = {
        title: title,
        start: date + (time ? 'T' + time : ''), // Combiner date et heure si disponible
        description: description
      };

      calendar.addEvent(eventData);
      // Effacer les champs du formulaire après l'ajout de l'événement
      $('#event-title').val('');
      $('#event-date').val('');
      $('#event-time').val('');
      $('#event-description').val('');
    });
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>