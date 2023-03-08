<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .container-w{
            width:600px;
            margin-top: 15%;
        }
        footer{
            position:fixed;
            bottom:0px;
            width:100%;
            background-color:silver;
            text-align:center;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <main class="row justify-content-center aling-item-center">
        <div class="text-center container px-5 mx-5 container-w card py-4">
            <form action="" method="post">
                @csrf
                <div class="control-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="name" id="name" class="form-control">
                </div>
                <div class="control-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="pt-4">
                    <input type="submit" value="Ingresar" class="btn btn-primary">
                </div>
            </form>
            <hr>
            <div>
        <p>No esta registrado</p>
    </div>
    <div><a href="newUser" class="" btn btn-info>Registrarse</a></div>
        </div>
    </main>
    <footer>
        <p>Derechos reservados</p>
    </footer>
</body>

</html>