<?php include_once 'views/layouts/header.php' ?>
<?php include_once 'views/layouts/navbar.php' ?>
<div class="container my-3">
    <div class="row">
        <div class="col">
            <h3 class="mb-3">Dashboard</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Prestamos sin devolver</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Herramienta</th>
                                <th>Usuario</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(count($all_loans)>0){?>
                            <?php foreach($all_loans as $row){?>
                                <tr>
                                    <td><?php echo $row->herramienta_nombre?></td>
                                    <td><?php echo $row->usuario_nombre?></td>
                                    <td><?php echo $row->devuelto == 0?"<span class='badge badge-danger'>No devuelto</span>":"<span class='badge badge-success'>Devuelto</span>" ?></td>     
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
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Stock deficiente</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Herramienta</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(count($all_tools)>0){?>
                            <?php foreach($all_tools as $row){?>
                                <tr>
                                    <td><?php echo $row->nombre?></td>
                                    <td class="text-danger"><?php echo $row->cantidad?></td>
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
    </div>
    
</div>
<?php include_once 'views/layouts/footer.php' ?>
