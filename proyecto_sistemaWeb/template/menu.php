        <nav class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" class="nav-link px-2 text-white">Principal</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Información</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Ordenes</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Productos</a></li>
                        <li><a href="#" class="nav-link px-2 text-white" onclick="cargarContenido('modules/Usuarios/listadoUsuarios.php');">Usuarios</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="text-end" id="btnCerrarSesion">
                        <a href="modules/Login/logoutController.php" class="nav-link px-2 text-black">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </nav>