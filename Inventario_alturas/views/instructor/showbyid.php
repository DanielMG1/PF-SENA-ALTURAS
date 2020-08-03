<?php
require_once '././layouts/header.php';
 ?>
 <br>
 <br>
 <br>
<div class="container">
	<div class="card">
	  <h5 class="card-header">Detalles Instructor</h5>
	  <div class="card-body">
	  	<h5 class="card-title"></h5>
	  	<div class="row">
	  		<div class="col-sm">
	  			<p class="card-text"><b>Id: </b> <?php echo $instructor->id; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><strong>Nombre: </strong><?php echo $instructor->nombre; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><b>Telefono: </b> <?php echo $instructor->telefono; ?></p>
	  		</div>
	  	</div>
	  	<br>
          <div class="row">
	  		<div class="col-sm">
	  			<p class="card-text"><b>Cargo: </b> <?php echo $instructor->cargo; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><strong>Documento: </strong><?php echo $instructor->documento; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><b>Email: </b> <?php echo $instructor->email; ?></p>
	  		</div>
	  	</div>
	  	<br>
          <div class="row">
	  		<div class="col-sm">
	  			<p class="card-text"><b>Ciudad: </b> <?php echo $instructor->ciudad; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><strong>Direccion: </strong><?php echo $instructor->direccion; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><b>Entidad: </b> <?php echo $instructor->entidad; ?></p>
	  		</div>
	  	</div>
	  	<br>
        <div class="row">
	  		<div class="col-sm">
	  			<p class="card-text"><b>Año: </b> <?php echo $instructor->anio; ?></p>
	  		</div>
        </div>
        <br>
	    <a href="index.php" class="btn btn-primary">Atrás</a>
	  </div>
	</div>
</div>
