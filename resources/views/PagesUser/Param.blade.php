<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="fullcalendar.min.css" rel="stylesheet">
    <script src="jquery.min.js"></script>
    <script src="moment.min.js"></script>
    <script src="fullcalendar.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>

    <link href="../css/User.css" rel="stylesheet">

    <title>Accueil</title>
</head>
<body>
  
  @extends('layout.app')
  @section('content')
  <div id="content-container" class="container">

    <div class="settings-container">
        <h1 class="settings-title">Paramètres</h1>
        <div class="setting-item">
            <label for="username" class="setting-label">Nom d'utilisateur :</label>
            <input type="text" id="username" class="setting-input" placeholder="Entrez votre nom d'utilisateur">
        </div>
        <div class="setting-item">
            <label for="email" class="setting-label">Adresse e-mail :</label>
            <input type="email" id="email" class="setting-input" placeholder="Entrez votre adresse e-mail">
        </div>
        <div class="setting-item">
            <button class="save-button">Modifier les paramètres</button>
        </div>
    </div>
  </div>
  @endsection
</body>
</html>