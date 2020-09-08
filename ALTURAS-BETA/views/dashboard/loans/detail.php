<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Info Uso Campo</h3>
                    </div>
                    <img class="card-img-top" src="https://image.freepik.com/free-photo/happy-young-asian-couple-realtor-agent_7861-1032.jpg" alt="">
                    <div class="card-body">
                        <h5>Fecha Uso C.:</h5>
                        <h6><?php echo $prestamo->getFecha()?></h6>
                        <h5>Herramienta ID: </h5>
                        <h6><?php echo $prestamo->getHerramientaId()?></h6>
                        <h5>Cantidad Herramienta:</h5>
                        <h6><?php echo $prestamo->getCantidad()?></h6>
                        <h5>Usuario ID: </h5>
                        <h6><?php echo $prestamo->getUsuarioId()?></h6>
                        <h5>Devuelto: </h5>
                        <h6><?php echo $prestamo->getDevuelto()?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'views/layouts/footer.php' ?>