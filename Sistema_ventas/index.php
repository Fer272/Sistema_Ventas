<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <title>Inicio de Sesión</title>

</head>

<body>
    <div class="container">
        <!-- Content here -->
        <br>
        <br>
        <br>

        <form id="formlogin" class="form" action="modules/Login/loginController.php" method="post">
            <h1>Inicio de Sesión</h1>
            <div class="mb-3">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user" name="user" aria-describedby="userAyuda">
                <div id="userAyuda" class="form-text">Este campo sirve para que ingreses tu nombre de usuario</div>
            </div>
            <div class="mb-3">
                <label for="clave" class="form-label">Password</label>
                <input type="password" class="form-control" id="clave" name="clave" aria-describedby="claveAyuda">
                <div id="claveAyuda" class="form-text">Este campo es para que ingreses tu clave</div>
            </div>
            
            <button type="submit" class="btn btn-primary">Ingresar al Sistema</button>
        </form>
    </div>
    <!-- JS DE BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>