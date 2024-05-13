<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <link href="../css/User.css" rel="stylesheet">

    <title>Messagerie</title>
</head>
<body>

  @extends('layout.app')

  @section('content')
  <div id="content-container" class="container">
    <div class="messages-container">
        <div class="left-panel">
            <input type="text" placeholder="Rechercher un utilisateur ou messages">
            <div class="message-filters">
                <button id="b1">Tous</button>
                <button id="b2">Lu</button>
                <button id="b3">Non Lu</button>
            </div>
            <div class="message-list">
                <!-- Liste des messages reçus -->
                <div class="message-item">
                    <div class="sender">Expéditeur</div>
                    <div class="timestamp">Heure d'envoi</div>
                    <div class="message-preview">Aperçu du message...</div>
                    
                </div>
                <!-- Autres messages... -->
            </div>
        </div>
        <div class="right-panel">
            <div class="chat-header">Nom de l'utilisateur</div>
            <div class="chat-messages">
                <!-- Affichage de la conversation -->
                <div class="sent-message">Message envoyé</div>
                <div class="received-message">Message reçu</div>
                <!-- Autres messages... -->
            </div>
            <div class="message-input">
                <input type="text" placeholder="Taper un message...">
                <button>Envoyer</button>
            </div>
        </div>
    </div>
  </div>
  @endsection
</body>
</html>