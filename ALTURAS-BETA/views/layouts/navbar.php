<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php?controller=dashboard&action=index">Form-Up</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controller=users&action=index">Usuarios</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controller=tools&action=index">Herramientas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controller=categories&action=index">Categorías</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?controller=loans&action=index">Préstamos</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php 
                            echo $_SESSION['username'];
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?controller=users&action=index">Perfil</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?controller=login&action=logout">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>