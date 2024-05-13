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
    <link href="../css/véto.css" rel="stylesheet">


   
    <title>Ma liste de RDVs</title>
</head>
<body>
   
@extends('layout.appveto')

@section('content')

  <div id="content-container" class="container">
    <div class="appointment-list" id="aptlist">
        <h2>Liste des propriétaires souhaitant prendre un rendez-vous</h2>

        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Téléphone</th>
              <th>Email</th>
              <th>Animal</th>
              <th>Nom de l'animal</th>
              <th>Date souhaitée</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Melissa Laidi</td>
              <td>1234567890</td>
              <td>Melissa.Laidi@gmail.com</td>
              <td>Chat</td>
              <td>Tsuki</td>
              <td>2024-04-30</td>
              <td class="btnAR">
                <button class="accept-btn">Accepter</button>
                <button class="reject-btn">Refuser</button>
              </td>
            </tr>
            <tr>
                <td>Melissa Laidi</td>
                <td>1234567890</td>
                <td>Melissa.Laidi@gmail.com</td>
                <td>Chat</td>
                <td>Picsou</td>
                <td>2024-05-10</td>
                <td class="btnAR">
                  <button class="accept-btn">Accepter</button>
                  <button class="reject-btn">Refuser</button>
                </td>
              </tr>
            <tr>
              <td>Jane Smith</td>
              <td>9876543210</td>
              <td>jane.smith@outlook.fr</td>
              <td>Chien</td>
              <td>Fox</td>
              <td>2024-05-05</td>
              <td class="btnAR">
                <button class="accept-btn">Accepter</button>
                <button class="reject-btn">Refuser</button>
              </td>
            </tr>
            <!-- Ajoutez d'autres lignes au besoin -->
          </tbody>
        </table>
      </div></div>
      @endsection
</body>
</html>