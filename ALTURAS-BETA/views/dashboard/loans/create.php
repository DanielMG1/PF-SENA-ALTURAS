<?php 
$herramienta_obj = new Tool();
$vector_herramientas = $herramienta_obj->getAll();

$user_obj = new User();
$vector_usuarios = $user_obj->getAll();
?>
<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Crear Prestamo</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=loans&action=save" method="POST">
                            <div class="form-group">
                            <label for="">Fecha Prestamo</label>
                                <input type="date" name="fecha" id="fecha" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="herramienta_id">Herramienta: </label>
                                <select name="herramienta_id" id="herramienta_id" class="form-control">
                                    <option value="" Disabled selected>ID </option>
                                    <?php 
                                        foreach ($vector_herramientas as $row){?>
                                            <option value="<?php echo $row->id;?>">
                                                <?php echo $row->id." - ". $row->nombre;?>
                                            </option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input name="cantidad" id="cantidad" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="usaurio_id">Usuario Responsable: </label>
                                <select name="usaurio_id" id="usaurio_id" class="form-control">
                                    <option value="" Disabled selected>ID </option>
                                    <?php 
                                        foreach ($vector_usuarios as $row){?>
                                            <option value="<?php echo $row->id;?>">
                                                <?php echo $row->id." - ". $row->nombre;?>
                                            </option>
                                    <?php }?>
                                </select>
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