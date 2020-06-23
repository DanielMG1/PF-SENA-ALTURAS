<?php include_once('././layouts/header.php'); ?>
<div class="container">
<a class="btn btn-primary btn-mb bo" href='index.php?controller=categoria&action=showById'>Nuevo</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
  <tr>
    <?php require_once '././includes/const.php';
      foreach (DATA_CAT as $key => $value):
    ?>
    <td><?php echo $value; ?></td>
  <?php endforeach; ?>
  </tr>
  <?php foreach($this->model->getAll() as $categoria): ?>
  <tr>
    <td><?php echo $categoria->nombre?></td>
    <td><?php echo $categoria->descripcion?></td>
    <td><img src="<?php echo $categoria->foto?>"></td>
    <td><a class="btn btn-warning" href="index.php?controller=categoria&action=showById&id=<?php echo $categoria->id; ?>">Editar</a></td>
    <td><a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de Eliminar?');" href="index.php?controller=categoria&action=quit&id=<?php echo $categoria->id; ?>">Eliminar</a></td>
  </tr>
<?php endforeach; ?>
</table>
</div>