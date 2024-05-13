<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    


    <link href="../css/User.css" rel="stylesheet">
  <title>Dashboared</title>
</head>
<body>
  @extends('layout.app')

  @section('content')
  <div id="content-container" class="container">
    <div class="pet-table">
      <h2>Mes Animaux Domestiques Enregistrés</h2>
      
      @if(Session::has('success'))
      
        <div class="alert alert-success">
      {{ Session::get('success') }}
        </div>
    
      @endif

      <table class="petable" id="petbl">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Image</th>
            <th>Espèce</th>
            <th>Race</th>
            <th>Âge</th>
            <th>Sexe</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @if ($pets->isNotEmpty())
          @foreach ($pets as $pet)
          <tr>
            <td>{{$pet->ID}}</td>
            <td>{{$pet->Nom}}</td>
            <td>
              <div class="profile-image-container">
                  @if($pet->Image != "")
                      <img src="{{ asset('uploads/Pets/' .$pet->Image) }}" alt="{{ $pet->Nom }}" >
                  @endif
            </div>
            </td>
            <td>{{$pet->Espèce}}</td>
            <td>{{$pet->Race}}</td>
            <td>{{$pet->Age}}</td>
            <td>{{$pet->Sexe}}</td>
            <td>{{$pet->Description}}</td>
            <td>
              <a href="{{ route('pet.edit',$pet->id )}}" class="btn btn-success">Modifier</a>
              <a href="#" onclick="deletePet({{ $pet->id }});" class="btn btn-danger">Supprimer</a>
              <form id="delete-pet-form-{{ $pet->id }}"  action="{{ route('pet.destroy',$pet->id)}}" method="post">
                  @csrf
                  @method('delete')
              </form>
            </td>
          </tr>
          @endforeach
          @endif        
        
        </tbody>
      </table>
    </div>
  </div>
  @endsection
</body>
</html>

<script>
function deletePet(id){
  if(confirm("Etes-vous sur de bien vouloir supprimer cet animal?")){
    document.getElementById('delete-pet-form-' + id).submit();

  }
}

</script>