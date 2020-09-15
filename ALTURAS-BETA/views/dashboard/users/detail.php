<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-4 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Perfil del usuario</h3>
                    </div>
                    <img class="card-img-top" src="https://image.freepik.com/free-vector/follow-me-social-business-theme-design_24877-52233.jpg" alt="">
                    <div class="card-body">
                        <h5>Nombre:</h5>
                        <h6><?php echo $usuario['nombre']?></h6>
                        <h5>Email:</h5>
                        <h6><?php echo $usuario['email']?></h6>
                        <h5>Tipo Usuario:</h5>
                        <h6><?php echo $usuario['rol_id'] == 1?"<span class='badge badge-success'>Administrador</span>":"<span class='badge badge-primary'>Usuario general</span>"?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'views/layouts/footer.php' ?>