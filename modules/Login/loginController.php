<?php
    ob_start();
    include_once("../../include/functions.php");

    $usuario = $_POST['user'];
    $clave = $_POST['clave'];

    $loginClass = new loginClass();

    $resultado = $loginClass->valida_login($usuario, $clave);

    if($fila = mysqli_fetch_array($resultado)){
        echo "¡GENIAL, HAS HECHO LOGIN EXITOSAMENTE! <br>BIENVENIDO: ".$fila['nombre']." ".$fila['apellido'];
        header("location: ../../main.php");
    }

    else{
        echo "<script>
            alert('¡QUE MAL, PARECE QUE TUS CREDENCIALES SON INCORRECTAS!');
            history.back();
        </script>";
        exit(-1);
    }

    ob_end_flush();
?>