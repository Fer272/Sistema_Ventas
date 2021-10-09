<?php
    include_once('../../include/functions.php');
    $usuariosClass = new usuariosClass();

    $resultado = $usuariosClass->lista_usuarios();
    echo '<h2>SELECCION DE USUARIOS</h2>';
    echo '<table class= "table table-dark"';
    echo '<thead>';
    echo '<tr>';
    echo    '<th scope="col">ID</th>';
    echo    '<th scope="col">NOMBRE</th>';
    echo    '<th scope="col">APELLIDO</th>';
    echo    '<th scope="col">CORREO</th>';
    echo    '<th scope="col">TELEFONO</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_array($resultado)){
        echo '<tr>';
        echo    '<th scope="row">'.$row["id"].'</th>';
        echo    '<td>'.$row["nombre"].'</td>';
        echo    '<td>'.$row["apellido"].'</td>';
        echo    '<td>'.$row["email"].'</td>';
        echo   '<td>'.$row["telefono"].'</td>';
        echo '</tr>';
    }
    echo "</table>";
?>
