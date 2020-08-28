<?php
    $email = isset($_GET['email'])? $_GET['email'] : "";
    $user_obj = new User($email);
    $all_users = $user_obj->find();
?>
<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Editar Usuarios</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=users&action=update" method="POST">
                        <div class="form-group">
                                <label for="">Nombre</label>
                                <input value="<?php echo $all_users->getNombre()?>" type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input value="<?php echo $all_users->getEmail()?>" type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Rol</label>
                                <input value="<?php echo $all_users->getRolId()?>" type="number" name="rol_id" id="rol_id" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'views/layouts/footer.php' ?>