<?php
require_once '././layouts/header.php';
 ?>
  <form class="" action='index.php?controller=tool&action=save' method="post">
    <input type="hidden" name="id" value="<?php echo $tool->id; ?>">
    <br>
    Nombre
    <input type="text" name="nombre" value="<?php echo $tool->nombre; ?>">
    <br>
    Marca
    <input type="text" name="marca" value="<?php echo $tool->marca; ?>">
    <br>
    Longitud
    <input type="text" name="longitud" value="<?php echo $tool->longitud; ?>">
    <br>
    Serie
    <input type="text" name="serie" value="<?php echo $tool->serie; ?>">
    <br>
    Descripcion
    <input type="text" name="descripcion" value="<?php echo $tool->descripcion; ?>">
    <br>
    Acomulado
    <input type="text" name="acomulado" value="<?php echo $tool->acomulado; ?>">
    <br>
    <input type="submit" name="send" value="Guardar">
  </form>
