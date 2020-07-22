<?php include_once('././layouts/header.php'); ?>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <a class="btn btn-primary btn-mb bo" href='index.php?controller=tool&action=showById'>Nuevo</a>
    </div>
    <div class="col-sm">
      <h1>Listado de Herramientas</h1>
    </div>
    <div class="col-sm"></div>
  </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <tr>
    <?php require_once '././includes/const.php';
      foreach (DATA_TOOL as $key => $value):
    ?>
    <td><?php echo $value; ?></td>
  <?php endforeach; ?>
  </tr>
  <?php foreach($this->model->getAll() as $tool): ?>
  <tr>
    <td><img src="<?php echo $tool->foto?>"></td>
    <td><?php echo $tool->nombre?></td>
    <td><?php echo $tool->marca?></td>
    <td><?php echo $tool->longitud?> Metros</td>
    <td><?php echo $tool->serie?></td>
    <td><?php echo $tool->descripcion?></td>
    <td><?php echo $tool->acomulado?></td>
    <td><?php echo $tool->entidad_cert?></td>
    <td><a class="btn btn-info" href="index.php?controller=tool&action=snowById&id=<?php echo $tool->id; ?>">Ver</a></td>
    <td><a class="btn btn-warning" href="index.php?controller=tool&action=showById&id=<?php echo $tool->id; ?>">Editar</a></td>
    <td><a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de Eliminar?');" href="index.php?controller=tool&action=quit&id=<?php echo $tool->id; ?>">Eliminar</a></td>
  </tr>
<?php endforeach; ?>
</table>
</div>

