<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tache</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
     
   <div class="container">
   <h1>Ajouter une tache</h1><hr>
   @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
   @endif
   @foreach($errors->all() as $error)
   <div class="alert alert-danger">{{$error}}</div>
   @endforeach
    
   <div class="row">
   <form method="post" action="/ajouter/traitement">
   
    @method('POST')
    @csrf
   <div class="mb-3">
        <label for="name" class="form-label">Nom:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<br>
<a href="/tache" class="btn btn-primary mt-2">Lister les taches</a>

    </div>
   </div>
</body>
</html>
