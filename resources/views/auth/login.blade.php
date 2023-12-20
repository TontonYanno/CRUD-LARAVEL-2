<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="text-center container w-25">
        <h3>Authenification Login</h3>

        <form action="/log" method="post">
            @csrf
            <div class="mb-3 ">
                <input type="text" class="form-control" placeholder="Nom"  name="name">
            </div>
            <div class="mb-3 ">
                <input type="text" class="form-control" placeholder="Mot de Passe" name="password" >
            </div>
            <button class="button" type="submite" >connecter</button>
        </form>
    </div>
    
</body>
</html>