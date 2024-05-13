
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Inscription vétérinaire</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/InscripVéto.css" />
   
   
  </head>
  <body>
  
  
    <div class="container">
       
      <h1 class="form-title">Inscription vétérinaire </h1>
      <form enctype="multipart/form-data" id="addPetForm" method="POST" action="{{ route('veto.store') }}">
            @csrf
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="nom">Nom </label>
            <input type="text"
                    id="nom"
                    name="nom"
                    placeholder="Nom "/>
                    @error('nom')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
          </div>
          <div class="user-input-box">
            <label for="prenom">prenom</label>
            <input type="text"
                    id="prenom"
                    name="prenom"
                    placeholder="prenom"/>
                    @error('prenom')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
          </div>
          <div class="user-input-box">
            <label for="numtel">numero de telephone</label>
            <input type="text"
                    id="numtel"
                    name="numtel"
                    placeholder="numero de telephone"/>
                    @error('numtel')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
          </div>
          <div class="user-input-box">
            <label for="nom_cabinet">nom cabinet</label>
            <input type="text"
                    id="nom_cabinet"
                    name="nom_cabinet"
                    placeholder="nom cabinet"/>
                    @error('nom_cabinet')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
          </div>
          <div class="user-input-box">
        
            <label for="heure_travail">heur de travail</label>
            <input type="text"
                    id="heure_travail"
                    name="heure_travail"
                    placeholder="heur de travail"/>
                    @error('heure_travail')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
          </div>
          <div class="user-input-box">
            <label for="frais_consultation">frais consultation</label>
            <input type="text"
                    id="frais_consultation"
                    name="frais_consultation"
                    placeholder="frais consultation"/>
                    @error('frais_consultation')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror  
          </div>
          <div class="user-input-box">
            <label for="localisation">localisation</label>
            <input type="text"
                    id="localisation"
                    name="localisation"
                    placeholder="localisation"/>
                    @error('localisation')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror 
          </div>
          <div class="user-input-box">
            <label for="description">description</label>
            <input type="textarea"
                    id="description"
                    name="description"
                    placeholder="ajouter les autres infos"/>
                    @error('description')
                      <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
          </div>
          
        </div>
        
           <div>
          <label for="petPhoto">Photo:</label>
          <input type="file" id="Image" name="Image" accept="image/*">
      </div>
        <div class="form-submit-btn">
          <input type="submit" value="M'inscrire">
        </div>
          


        <div class="form-submit-btn">
           
        <form action="{{ route('logout') }}" method="POST">
            @csrf 
            <button type="submit" class="logout" id="log">
                <i class="fas fa-sign-out-alt"></i> Se déconnecter
            </button>
          </form>
        
    </div>
    
  </body>
</html>