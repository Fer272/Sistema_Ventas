<?php
include_once(RAIZ_APLICACION."/functions.php");

    class usuariosClass{
        function lista_usuarios(){
            $conexionClass = new Tools();
            $conexion = $conexionClass->conectar();

            $sql = "SELECT * from usuarios;";
            $resultado = mysqli_query($conexion, $sql);
            return $resultado;
        }
    }
?>