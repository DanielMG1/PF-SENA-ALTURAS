<?php 
    $id= isset($_GET['id'])? $_GET['id'] : "";
    $herramienta_obj = new Tool($id);
    $all_herramientas = $herramienta_obj->find();
?>
<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Editar Herramienta</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=tools&action=update" method="POST">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input value="<?php echo $all_herramientas->getNombre()?>" type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Marca</label>
                                <input value="<?php echo $all_herramientas->getMarca()?>"type="text" name="marca" id="marca" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Longitud</label>
                                <input value="<?php echo $all_herramientas->getLongitud()?>"type="text" name="longitud" id="longitud" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Serie</label>
                                <input value="<?php echo $all_herramientas->getSerie()?>"type="text" name="serie" id="serie" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <input value="<?php echo $all_herramientas->getDescripcion()?>" name="descripcion" id="descripcion" class="form-control"></input>
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input value="<?php echo $all_herramientas->getCantidad()?>" type="text" name="cantidad" id="cantidad" class="form-control">
                            </div>
                            <!-- Implementar CK editor y subir foto -->
                            <div class="form-group">
                                <label for="">Entidad_cert</label>
                                <input value="<?php echo $all_herramientas->getEntidad()?>" type="text" name="entidad_cert" id="entidad_cert" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha_fbc</label>
                                <input value="<?php echo $all_herramientas->getFechaFab()?>" type="date" name="fecha_fbc" id="fecha_fbc" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Norma_cert</label>
                                <input value="<?php echo $all_herramientas->getNorma()?>" type="text" name="norma_cert" id="norma_cert" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Vencimiento</label>
                                <input value="<?php echo $all_herramientas->getVencimiento()?>" type="date" name="vencimiento" id="vencimiento" class="form-control">
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