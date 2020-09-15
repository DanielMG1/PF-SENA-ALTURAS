<?php 
$id= isset($_GET['id'])? $_GET['id'] : "";
$prestamo_obj = new Loan($id);
$all_loans = $prestamo_obj->find();
?>
<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Editar Uso en Campo</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=loans&action=update" method="POST">
                            <div class="form-group">
                            <label for="">Fecha Uso</label>
                                <input value="<?php echo $all_loans->getFecha()?>" type="datetime" name="fecha" id="fecha" class="form-control">
                            </div>
                            <!--<div class="form-group">
                            <label for="herramienta_id">Herramienta ID: </label>
                                <input value="<?php echo $all_loans->getHerramientaId()?>" name="herramienta_id" id="herramienta_id" class="form-control" readonly>
                            </div>-->
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
                                <input value="<?php echo $all_loans->getCantidad()?>" name="cantidad" id="cantidad" class="form-control">
                            </div>
                            <!--<div class="form-group">
                            <label for="usaurio_id">Usuario Responsable ID: </label>
                                <input value="<?php echo $all_loans->getUsuarioId()?>" name="usaurio_id" id="usaurio_id" class="form-control" readonly>
                            </div>-->
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
                                <label for="">Devuelto</label>
                                <select name="devuelto" id="devuelto" class="form-control">
                                    <option value="0">No devuelto</option>
                                    <option value="1">Devuelto</option>
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