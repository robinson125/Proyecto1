<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="text-center container px-5 mx-6 container-w card py-4">


    <form id="newUser" class="row justify-content-center aling-item-center">

        <div class="col-6">
            <label for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <br>
        <div class="col-6">
            <label for="password">Clave</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <br>
        <div class="col-6">
            <label for="name">Nombre completo</label>
            <input type="name" name="name" id="name" class="form-control">
        </div>
        <br>
        <div class="col-6">
            <label for="telefono">Télefono</label>
            <input type="telefono" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="pt-4 justify-content-center align-item-center">
            <input type="submit" value="Registrar" class="btn btn-primary">
        </div>

    </form>

</body>
</html>