<?php
session_start();
if (!$_SESSION['user_id']){
    header("location: index.php");
}
include 'template/header.php';
include 'template/menu.php';
?>

        <!-- INICIAL EL CONTENIDO DINAMICO DEL SITIO -->
        <div class="container-fluid">
            <div class="row">
                <main>
                    <div class="container" id="contenedorPrincipal">
                        <!-- AQUI VA EL CONTENIDO DINAMICO -->
                    </div>
                </main>
            </div>
        </div>

<!-- FINALIZA EL CONTENIDO DINAMICO DEL SITIO -->
<?php
include 'template/footer.php';
?>
