<?php
require_once '././layouts/header.php';
 ?>
 <div style="position: relative; top: 100px;" class="container">
  <form action='index.php?controller=tool&action=save' method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $tool->id; ?>">
    <div class="row">
        <div class="col-sm">
          <input type="text" class="form-control" name="nombre" value="<?php echo $tool->nombre; ?>" placeholder="Nombre">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="marca" value="<?php echo $tool->marca; ?>" placeholder="Marca">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="longitud" value="<?php echo $tool->longitud; ?>" placeholder="Longitud">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm">
          <input type="text" class="form-control" name="serie" value="<?php echo $tool->serie; ?>" placeholder="Serie">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="descripcion" value="<?php echo $tool->descripcion; ?>" placeholder="Descripcion">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="acomulado" value="<?php echo $tool->acomulado; ?>" placeholder="Acomulado">
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
          <input type="text" class="form-control" name="entidad_cert" value="<?php echo $tool->entidad_cert; ?>" placeholder="Entidad">
      </div>
      <div class="col-sm">
          <input type="date" class="form-control" name="fecha_fbc" value="<?php echo $tool->fecha_fbc; ?>">
      </div>
      <div class="col-sm">
          <input type="text" class="form-control" name="norma_cert" value="<?php echo $tool->norma_cert; ?>" placeholder="Norma_certificadora">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
          <input type="text" class="form-control" name="limite_vid" value="<?php echo $tool->limite_vid; ?>" placeholder="Limite Vida">
      </div>
      <div class="col-sm">
        <input type="file" name="foto" class="form-control-file" accept=".jpg, .png, .gif">
      </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <input type="submit" id="botn" name="send" class="btn btn-primary" value="Guardar">
      </div>
    </div>
  </form>
</div>