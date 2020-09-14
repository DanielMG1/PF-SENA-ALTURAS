<?php
$id = isset($_GET['id'])?$_GET['id']:'';
$categoria_obj = new Category($id);
$all_categorias = $categoria_obj->find();
?>
<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Editar Categoría</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php?controller=categories&action=update" method="POST">
                            <div class="form-group">
                            <input value="<?php echo $all_categorias->getId()?>" type="text" name="id" id="id" class="d-none">
                                <label for="">Nombre</label>
                                <input value="<?php echo $all_categorias->getNombre()?>" type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Descripción</label>
                                <textarea name="descripcion" id="descripcion" class="form-control"><?php echo $all_categorias->getDescripcion()?></textarea>
                            </div>
                            <!-- Implementar CK editor y subir foto -->

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