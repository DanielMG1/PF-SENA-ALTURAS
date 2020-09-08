<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <h3>Categorias</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <?php if($_SESSION['rol_id']==1){?>
            <a href="index.php?controller=categories&action=create" class="btn btn-primary mb-2">Añadir</a>
        <?php } ?>
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($all_categorias)>0){?>
                        <?php foreach($all_categorias as $row){?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->nombre ?></td>
                                <td><?php echo $row->descripcion ?></td>
                                <td><?php echo $row->foto ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="index.php?controller=categories&action=detail&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Detalle</a>
                                        <?php if($_SESSION['rol_id']==1){?>
                                        <a href="index.php?controller=categories&action=edit&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Editar</a>
                                        <a href="index.php?controller=categories&action=delete" class="btn btn-outline-danger">Eliminar</a>
                                        <?php } ?>
                                    </div>
                                </td>
                            </tr>
                        <?php }?>
                    <?php }else{?>
                        <tr>
                            <td colspan="5" class="text-center">
                                No hay datos diponibles
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include_once 'views/layouts/footer.php' ?>
