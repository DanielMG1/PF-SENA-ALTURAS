<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <h3>Herrramientas</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="index.php?controller=tools&action=create" class="btn btn-primary mb-2">Añadir</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Longitud</th>
                        <th>Marca</th>
                        <th>Serie</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($all_herramientas)>0){?>
                        <?php foreach($all_herramientas as $row){?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->nombre ?></td>
                                <td><?php echo $row->longitud ?></td>
                                <td><?php echo $row->marca ?></td>
                                <td><?php echo $row->serie ?></td>
                                <td><?php echo $row->cantidad ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="index.php?controller=tools&action=detail&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Detalle</a>
                                        <a href="index.php?controller=tools&action=edit&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Editar</a>
                                        <a href="index.php?controller=tools&action=delete" class="btn btn-outline-danger">Eliminar</a>
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
