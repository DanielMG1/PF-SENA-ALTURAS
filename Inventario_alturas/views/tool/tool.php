<?php include_once('././layouts/header.php'); ?>
<a href='index.php?controller=tool&action=showById'>nuevo</a>
<table class="table">
  <tr>
    <?php require_once '././includes/const.php';
      foreach (DATA_TOOL as $key => $value):
    ?>
    <td><?php echo $value; ?></td>
  <?php endforeach; ?>
  </tr>
  <?php foreach($this->model->getAll() as $tool): ?>
  <tr>
    <td><?php echo $tool->nombre?></td>
    <td><?php echo $tool->marca?></td>
    <td><?php echo $tool->longitud?></td>
    <td><?php echo $tool->serie?></td>
    <td><?php echo $tool->descripcion?></td>
    <td><?php echo $tool->acomulado?></td>
    <td><a href="index.php?controller=tool&action=showById&id=<?php echo $tool->id; ?>">Editar</a></td>
    <td><a onclick="javascript:return confirm('¿Seguro de Eliminar?');" href="index.php?controller=tool&action=quit&id=<?php echo $tool->id; ?>">Eliminar</a></td>
  </tr>
<?php endforeach; ?>
</table>
