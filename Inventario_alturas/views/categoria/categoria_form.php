<?php
require_once '././layouts/header.php';
 ?>
 <div style="position: relative; top: 100px;" class="container">
  <form action='index.php?controller=categoria&action=save' method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $categoria->id; ?>">
    <div class="row">
        <div class="col-sm">
          <input type="text" class="form-control" name="nombre" value="<?php echo $categoria->nombre; ?>" placeholder="Nombre">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="descripcion" value="<?php echo $categoria->descripcion; ?>" placeholder="Descripcion">
        </div>
       <div class="col-sm">
        <input type="file" name="foto" class="form-control-file" accept=".jpg, .png, .gif">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
        <input type="submit" id="botn" name="send" class="btn btn-primary" value="Guardar">
      </div>
    </div>
  </form>
</div>