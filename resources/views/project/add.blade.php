<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>

    @endif

    <form action="/addfunc" method="POST" class="form-control  mt-5 text-center s-12">
        @csrf

        <h2> Hultimat'AddForm</h2>
        <div class="mb-3 ">
            <input type="text" class="form-control" placeholder="Nom"  name="nom">
        </div>
        <div class="mb-3 ">
            <input type="text" class="form-control" placeholder="Prenom" name="prenom" >
        </div>
        <div class="mb-3 ">
            <input type="number" class="form-control" placeholder="Age" name="age">
        </div>
        <div class="mb-3 df " >
            <button type="submit" class="btn btn-primary">add</button>
            <a href="/list" type="submit" class="btn btn-danger ">retour</a>
        </div>

        
    </form>
    
</body>
</html>