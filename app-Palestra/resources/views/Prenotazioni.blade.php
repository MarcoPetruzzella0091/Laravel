<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <h1 class="text-center my-5">Prenotazioni</h1>
     {{ $prenotazioni }}
{{ $attivita  }}    



   <div class="container my-5" >
    <form method="POST" action="/prenotazioni">
        @csrf
        <div class="mb-3">
    <label for="corso" class="form-label">Corso</label>
    <select class="form-select" id="corso" name="corso">
    @foreach($attivita as $item)
    <option value="{{ $item -> corso }}"> {{ $item -> corso }}</option>
   
@endforeach
      
    </select>
</div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data" name="data">
        </div>
        <div class="mb-3">
            <label for="ora" class="form-label">Ora</label>
            <input type="time" class="form-control" id="ora" name="ora">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
