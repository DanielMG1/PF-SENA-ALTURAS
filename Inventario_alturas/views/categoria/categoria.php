<?php include_once('././layouts/header.php'); ?>
<div class="container">
  <div class="row">
    <a class="btn btn-info btn-mb bo" href='index.php?controller=categoria&action=showById'>Nueva Categoría</a>
  </div>
  <div class="row">
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
        <td><img src="<?php echo $categoria->foto?>"></td>
        <td><?php echo $categoria->nombre?></td>
        <td><?php echo $categoria->descripcion?></td>
        <td>
          <a class="btn btn-info mb-1" href="index.php?controller=categoria&action=snowById&id=<?php echo $categoria->id; ?>">Ver</a>
          <a class="btn btn-warning mb-1" href="index.php?controller=categoria&action=showById&id=<?php echo $categoria->id; ?>">Editar</a>
          <a class="btn btn-danger mb-1" onclick="javascript:return confirm('¿Seguro de Eliminar?');" href="index.php?controller=categoria&action=quit&id=<?php echo $categoria->id; ?>">Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </table>  
  </div>
</div>