<?php
require_once '././layouts/header.php';
 ?>
 <br>
   <div class="row">
    <div class="col-sm"></div>
    <div class="col-sm"><h1>Crud Instructores</h1></div>
    <div class="col-sm"></div>
  </div>
 <div style="position: relative; top: 100px;" class="container">
  <form action='index.php?controller=instructor&action=save' method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $instructor->id; ?>">
    <div class="row">
        <div class="col-sm">
          <input type="text" class="form-control" name="nombre" value="<?php echo $instructor->nombre; ?>" placeholder="Nombre" required>
        </div>
        <div class="col-sm">
          <input type="number" class="form-control" name="telefono" value="<?php echo $instructor->telefono; ?>" placeholder="Telefono" required>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="cargo" value="<?php echo $instructor->cargo; ?>" placeholder="Cargo" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm">
          <input type="number" class="form-control" name="documento" value="<?php echo $instructor->documento; ?>" placeholder="Documento" required>
        </div>
        <div class="col-sm">
          <input type="Email" class="form-control" name="email" value="<?php echo $instructor->email; ?>" placeholder="Example@email.com" required>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="ciudad" value="<?php echo $instructor->ciudad; ?>" placeholder="Ciudad" required>
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
          <input type="text" class="form-control" name="direccion" value="<?php echo $instructor->direccion; ?>" placeholder="Direccion" required>
      </div>
      <div class="col-sm">
          <input type="text" class="form-control" name="entidad" value="<?php echo $instructor->entidad; ?>" placeholder="Entidad/Institución" required>
      </div>
      <div class="col-sm">
        <input type="number" class="form-control" name="anio" value="<?php echo $instructor->anio; ?>" placeholder="Año" required>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm">
          
      </div>
        <div class="col-sm ">
        </div>
      </div>
    <div class="row">
      <div class="col-sm">
        <input type="submit" id="botn" name="send" class="btn btn-primary" value="Guardar">
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
</script>