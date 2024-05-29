<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg px-5" style="background-color: #e3f2fd;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

    <h1 class="text-center my-5">Lista prenotazioni</h1>
    <div class=" my-5 container">
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Corso</th>
      <th scope="col">Data</th>
      <th scope="col">fascia oarioa</th>
      <th scope="col">Modifica</th>
      <th scope="col">Cancella</th>
    </tr>
  </thead>
  <tbody>
    @foreach($prenotazioni as $prenotazione) 
    <tr>
      
      <td>{{ $prenotazione->attivita->corso }}</td>
      <td>{{ $prenotazione->data }}</td>
      <td>{{ $prenotazione->orario }}</td>
      <td><a href="" class="btn btn-info"><i class="bi bi-pencil"></i></a></td>
      <td>
        <form action="/prenotazioni/{{ $prenotazione->id }}" method="POST" >
        @csrf
    @method('DELETE')
        <button type="submit" class="btn btn-primary">cancella</button></form>


        </i></a></td>
     
    </tr>
    @endforeach
    
    
  </tbody>
</table>
    
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>