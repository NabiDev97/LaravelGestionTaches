<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des taches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Taches</h1>
    <div>index</div>
   <div class="container">
   <div class="row">
        <div class="col s12">
            <h1>La liste des taches</h1>
            <hr>
            <a href="/ajouter" class="btn btn-info">Ajouter une tache</a><hr>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Date de creation</th>
                        <th>Date dernier mise a jour</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                @foreach($taches as $tache)
                    <tr>
                        <td>{{$tache->name}}</td>
                        <td>{{$tache->description}}</td>
                        <td>{{$tache->created_at}}</td>
                        <td>{{$tache->updated_at}}</td>
                        <td>
                        <a href="#" class="btn btn-success">Modifier</a>

                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </div>
</body>
</html>
