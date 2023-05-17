<?php require_once("layouts/header.php"); ?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1 style="text-align: center;font-family: algeria;font-size:30pt;margin-top: 2%;">NUEVO REGISTRO</h1>
		<div class="container">
			<form action="" method="get">
				
				<div class="form-group">
					<label class="control-label" style="font-family: algeria;">Nombre:</label>
					<input type="text"  name="nombre" class="form-control" placeholder="Escriba el nombre" required autofocus>
				</div>
				<div class="form-group">
					<label class="control-label" style="font-family: algeria;">Precio:</label>
					<input type="text"  name="precio" class="form-control" placeholder="Escriba el precio" required autofocus><br>
				</div>
				<div class="form-group">
					<button type="submit"  class="btn btn-primary btn-sm form-control" style="margin-top: -3%;font-family: algeria;"><i class="fa fa-paper-plane" aria-hidden="true"></i>   GUARDAR</button>
					<a type="btn" href="index.php"  class="btn btn-success btn-sm form-control" style="margin-top: 1%;font-family: algeria;"><i class="fa fa-arrow-left" aria-hidden="true"></i> REGRESAR</a>
					<input type="hidden" name="m" value="guardar">
				</div>

			</form>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<?php require_once("layouts/footer.php"); ?>