<?php include_once('././layouts/header.php'); ?>
<div class="container">
  <div class="row">
    <a class="btn btn-info btn-mb bo" href='index.php?controller=tool&action=showById'>Nueva Herramienta</a>
  </div> 
  <div class="row">
    <table id="example" class="table table-striped table-bordered">
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
          <td>
            <a class="btn btn-info mb-1" href="index.php?controller=tool&action=snowById&id=<?php echo $tool->id; ?>">Ver</a>
            <a class="btn btn-warning mb-1" href="index.php?controller=tool&action=showById&id=<?php echo $tool->id; ?>">Editar</a>
            <a class="btn btn-danger mb-1" onclick="javascript:return confirm('¿Seguro de Eliminar?');" href="index.php?controller=tool&action=quit&id=<?php echo $tool->id; ?>">Eliminar</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>

