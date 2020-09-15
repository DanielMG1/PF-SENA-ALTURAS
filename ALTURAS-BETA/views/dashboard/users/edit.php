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
                            <input type="hidden" name="id" value="<?php echo $usuario['id']?>">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input value="<?php echo $usuario['nombre']?>" type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input value="<?php echo $usuario['email']?>" type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Rol</label>
                                <select name="rol_id" id="rol_id" class="form-control">
                                    <?php foreach($roles as $role){
                                        if($role->id==$usuario['rol_id']){?>
                                        <option value="<?php echo $role->id?>" selected><?php echo $role->nombre?></option>  
                                    <?php }else {?>
                                        <option value="<?php echo $role->id?>" ><?php echo $role->nombre?></option>
                                    <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once 'views/layouts/footer.php' ?>