<?php
require_once '././layouts/header.php';
 ?>
 <br>
 <br>
 <br>
<div class="container">
	<div class="card">
	  <h5 class="card-header">Detalles de la Herramienta</h5>
	  <div class="card-body">
	  		<h5 class="card-title"></h5>
	  	<div class="row">
	  		<div class="col-sm"><p class="card-text"><b>Id: </b><?php echo $tool->id; ?></p></div>
	  		<div class="col-sm"><p class="card-text"><b>Nombre: </b><?php echo $tool->nombre; ?></p></div>
	  		<div class="col-sm"><p class="card-text"><b>Marca: </b><?php echo $tool->marca; ?></p></div>
	  	</div>
	  	<br>
	  	<div class="row">
	  		<div class="col-sm"><p class="card-text"><b>Longitud: </b><?php echo $tool->longitud; ?></p></div>
	  		<div class="col-sm"><p class="card-text"><b>Serie: </b><?php echo $tool->serie; ?></p></div>
	  		<div class="col-sm"><p class="card-text"><b>Descripcion: </b><?php echo $tool->descripcion; ?></p></div>
	  	</div>
	  	<br>
	  	<div class="row">
	  		<div class="col-sm"><p class="card-text"><b>Acomulado: </b><?php echo $tool->acomulado; ?></p></div>
	  		<div class="col-sm"><p class="card-text"><b>Entidad_Cert: </b><?php echo $tool->entidad_cert; ?></p></div>
	  		<div class="col-sm"><p class="card-text"><b>Fecha_fbc: </b><?php echo $tool->fecha_fbc; ?></p></div>
	  	</div>
	  	<br>
	  	<div class="row">
	  		<div class="col-sm"><p class="card-text"><b>Norma_Cert: </b><?php echo $tool->norma_cert; ?></p></div>
	  		<div class="col-sm"></div>
	  		<div class="col-sm"><p class="card-text"><b>Limite_vid: </b><?php echo $tool->limite_vid; ?></p></div>
	  	</div>
	    <br>
	    <br>
	    <a href="index.php" class="btn btn-primary">Atrás</a>
	  </div>
	</div>
</div>