<?php
require_once '././layouts/header.php';
 ?>
 <div style="position: relative; top: 100px;" class="modal-content">
  <form action='index.php?controller=tool&action=save' method="post">
    <input type="hidden" name="id" value="<?php echo $tool->id; ?>">
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="nombre" value="<?php echo $tool->nombre; ?>" placeholder="Nombre">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="marca" value="<?php echo $tool->marca; ?>" placeholder="Marca">
        </div>
    </div>
    
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="longitud" value="<?php echo $tool->longitud; ?>" placeholder="Longitud">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="serie" value="<?php echo $tool->serie; ?>" placeholder="Serie">
        </div>
    </div>
    <div class="row">
        <div class="col">
          <input type="text" class="form-control" name="descripcion" value="<?php echo $tool->descripcion; ?>" placeholder="Descripcion">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="acomulado" value="<?php echo $tool->acomulado; ?>" placeholder="Acomulado">
        </div>
    </div>
    <input style="position: relative; left: 47%; top:40px;" type="submit" id="botn" name="send" class="btn btn-primary" value="Guardar">
  </form>
</div>