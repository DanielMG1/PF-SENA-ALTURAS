<?php include_once('././layouts/header.php'); ?>
<div class="container">
  <div class="row">
    <a class="btn btn-info btn-mb bo" href='index.php?controller=instructor&action=showById'>Nuevo Instructor</a>
  </div> 
  <div class="row">
    <table id="example" class="table table-striped table-bordered">
        <tr>
          <?php require_once '././includes/const.php';
            foreach (DATA_INSTRUCTOR as $key => $value):
          ?>
          <td><?php echo $value; ?></td>
        <?php endforeach; ?>
        </tr>
        <?php foreach($this->model->getAll() as $instructor): ?>
        <tr>
          <td><?php echo $instructor->nombre?></td>
          <td><?php echo $instructor->telefono?></td>
          <td><?php echo $instructor->cargo?></td>
          <td><?php echo $instructor->documento?></td>
          <td><?php echo $instructor->email?></td>
          <td><?php echo $instructor->ciudad?></td>
          <td><?php echo $instructor->direccion?></td>
          <td>
            <a class="btn btn-info mb-1" href="index.php?controller=instructor&action=snowById&id=<?php echo $instructor->id; ?>">Ver</a>
            <a class="btn btn-warning mb-1" href="index.php?controller=instructor&action=showById&id=<?php echo $instructor->id; ?>">Editar</a>
            <a class="btn btn-danger mb-1" onclick="javascript:return confirm('¿Seguro de Eliminar?');" href="index.php?controller=instructor&action=quit&id=<?php echo $instructor->id; ?>">Eliminar</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>

