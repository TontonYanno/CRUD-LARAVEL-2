<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hultimatum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">

        <div class="row">
            <h1>Hultimatum</h1>
            
            <div class="col s12">
                <a href="add"class="btn btn-primary">add</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fonctionnaires as $fonctionnaire)
                        <tr>
                            <td> {{$fonctionnaire->id}} </td>

                            <td>{{$fonctionnaire->nom}}</td>
                            <td>{{$fonctionnaire->prenom}}</td>
                            <td>{{$fonctionnaire->age}}</td>
                            <td>
                                <a href="/update/{{$fonctionnaire->id}}" class="btn btn-primary">Upadte</a>
                                <a href="/delete/{{$fonctionnaire->id}}" class="btn btn-danger">delete</a>
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
