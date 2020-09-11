<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Crear Usuarios</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=users&action=save" method="POST">
                        <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Rol</label>
                                <select name="rol_id" id="rol_id" class="form-control">
                                    <option disabled selected>Selección Rol</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
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