<?php
require_once '././layouts/header.php';
 ?>
 <br>
 <br>
 <br>
<div class="container">
	<div class="card">
	  <h5 class="card-header">Detalles de la Categoria</h5>
	  <div class="card-body">
	  	<h5 class="card-title"></h5>
	  	<div class="row">
	  		<div class="col-sm">
	  			<p class="card-text"><b>Id: </b> <?php echo $categoria->id; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><strong>Nombre: </strong><?php echo $categoria->nombre; ?></p>
	  		</div>
	  		<div class="col-sm">
	  			<p class="card-text"><b>Descripción: </b> <?php echo $categoria->descripcion; ?></p>
	  		</div>
	  	</div>
	  	<br>
	    <a href="index.php" class="btn btn-primary">Atrás</a>
	  </div>
	</div>
</div>
