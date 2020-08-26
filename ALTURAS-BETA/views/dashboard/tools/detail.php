<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Equipos Alturas</h3>
                    </div>
                    <img class="card-img-top" src="https://image.freepik.com/foto-gratis/trabajador-ganchos-arnes-seguridad_61243-481.jpg" alt="">
                    <div class="card-body">
                        <h5>Nombre:</h5>
                        <h6><?php echo $herramienta->getNombre()?></h6>
                        <h5>Longitud:</h5>
                        <h6><?php echo $herramienta->getLongitud()?></h6>
                        <h5>Marca:</h5>
                        <h6><?php echo $herramienta->getMarca()?></h6>
                        <h5>Serie:</h5>
                        <h6><?php echo $herramienta->getSerie()?></h6>
                        <h5>Descripción:</h5>
                        <h6><?php echo $herramienta->getDescripcion()?></h6>
                        <h5>Cantidad:</h5>
                        <h6><?php echo $herramienta->getCantidad()?></h6>
                        <h5>Entidad_cert:</h5>
                        <h6><?php echo $herramienta->getEntidad()?></h6>
                        <h5>Norma:</h5>
                        <h6><?php echo $herramienta->getNorma()?></h6>
                        <h5>Vencimiento:</h5>
                        <h6><?php echo $herramienta->getVencimiento()?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'views/layouts/footer.php' ?>