<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Categoría</h3>
                    </div>
                    <img class="card-img-top" src="https://image.freepik.com/vector-gratis/sitio-gancho-construccion-tiene-senal_24877-60026.jpg" alt="">
                    <div class="card-body">
                        <h5>Nombre:</h5>
                        <h6><?php echo $categoria->getNombre()?></h6>
                        <h5>Descripción:</h5>
                        <h6><?php echo $categoria->getDescripcion()?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'views/layouts/footer.php' ?>