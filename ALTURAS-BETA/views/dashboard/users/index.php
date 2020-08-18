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
            <a href="index.php?controller=users&action=create" class="btn btn-primary mb-2">Añadir</a>
            <table class="table">
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
                                <td><?php echo $row->rol_id ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="index.php?controller=categories&action=detail&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Detalle</a>
                                        <a href="index.php?controller=categories&action=edit&id=<?php echo $row->id ?>" class="btn btn-outline-primary">Editar</a>
                                        <a href="index.php?controller=categories&action=delete" class="btn btn-outline-danger">Eliminar</a>
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
