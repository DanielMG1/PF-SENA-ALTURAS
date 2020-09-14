<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <h3>Usuarios</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php if($_SESSION['rol_id']==1){?>
            <a href="index.php?controller=users&action=create" class="btn btn-primary mb-2">Añadir</a>
            <?php } ?>
            <table class="table"id="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(count($all_users)>0){?>
                        <?php foreach($all_users as $row){?>
                            <tr>
                                <td><?php echo $row->id ?></td>
                                <td><?php echo $row->nombre ?></td>
                                <td><?php echo $row->email ?></td>
                                <!--Desde el RolId, llamar el nombre del Rol-->
                                <td><?php echo $row->nombre_rol ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="index.php?controller=users&action=detail&email=<?php echo $row->email ?>" class="btn btn-outline-primary">Detalle</a>
                                        <?php if($_SESSION['rol_id']==1){?>
                                            <a href="index.php?controller=users&action=edit&email=<?php echo $row->email ?>" class="btn btn-outline-info">Editar</a>
                                            <div class="dropdown">
                                                <button class="btn btn-outline-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Eliminar
                                                </button>
                                                <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton">
                                                    <a class="btn btn-outline-warning" href="index.php?controller=users&action=delete&id=<?php echo $row->id ?>">¿Seguro desea eliminar?</a>
                                                </div>
                                            </div>
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
