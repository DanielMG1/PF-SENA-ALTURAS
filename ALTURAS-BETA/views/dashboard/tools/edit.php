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
                        <form action="index.php?controller=tools&action=edit" method="POST">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Longitud</label>
                                <input type="text" name="longitud" id="longitud" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Serie</label>
                                <input type="text" name="serie" id="serie" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Cantidad</label>
                                <input type="text" name="cantidad" id="cantidad" class="form-control">
                            </div>
                            <!-- Implementar CK editor y subir foto -->
                            <div class="form-group">
                                <label for="">Entidad_cert</label>
                                <input type="text" name="entidad_cert" id="entidad_cert" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Fecha_fab</label>
                                <input type="date" name="fecha_fab" id="fecha_fab" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Norma_cert</label>
                                <input type="text" name="norma_cert" id="norma_cert" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Vencimiento</label>
                                <input type="text" name="vencimiento" id="vencimiento" class="form-control">
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