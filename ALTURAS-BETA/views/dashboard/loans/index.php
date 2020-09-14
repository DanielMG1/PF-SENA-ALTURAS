<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <h3>Uso en Campo</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="index.php?controller=loans&action=create" class="btn btn-primary mb-2">Añadir</a>
            <a href="index.php?controller=loans&action=export" class="btn btn-success mb-2">Exportar Excel</a>
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Herramienta</th>
                        <th>Cantidad</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($all_loans)>0){?>
                        <?php foreach($all_loans as $row){?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->fecha ?></td>
                                <td><?php echo $row->herramienta_nombre ?></td>
                                <td><?php echo $row->cantidad ?></td>
                                <td><?php echo $row->usuario_nombre ?></td>
                                <td><?php echo $row->devuelto == 0?"<span class='badge badge-danger'>No devuelto</span>":"<span class='badge badge-success'>Devuelto</span>" ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="index.php?controller=loans&action=detail&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Detalle</a>
                                        <a href="index.php?controller=loans&action=edit&id=<?php echo $row->id ?>" class="btn btn-outline-info">Editar</a>
                                        <div class="dropdown">
                                        <button class="btn btn-outline-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Eliminar
                                        </button>
                                        <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                            <a class="btn btn-outline-warning" href="index.php?controller=loans&action=delete&id=<?php echo $row->id ?>">¿Seguro desea eliminar?</a>
                                        </div>
                                    </div>
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
