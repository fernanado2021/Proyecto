<?php require_once("layouts/header.php"); ?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<h1 style="text-align: center;font-family: algeria;font-size:30pt;margin-top: 2%;">EDITAR</h1>
		<div class="container">
			<form action="" method="get">
				<?php
				foreach($dato as $key => $value):
					foreach($value as $v):
						?>
						<div class="form-group">
							<label class="control-label" style="font-family: algeria;">Nombre:</label>
							<input type="text" value="<?php echo $v['nombre'] ?>" name="nombre" class="form-control" placeholder="Escriba el nombre" required autofocus>
						</div>
						<div class="form-group">
							<label class="control-label" style="font-family: algeria;">Precio:</label>
							<input type="text" value="<?php echo $v['precio'] ?>" name="precio" class="form-control" placeholder="Escriba el precio" required autofocus><br>
						</div>
						<div class="form-group">
							<input type="hidden" value="<?php echo $v['id'] ?>" name="id">
							<button type="submit"  class="btn btn-primary btn-sm form-control" style="margin-top: -3%;font-family: algeria;"><i class="fa fa-paper-plane" aria-hidden="true"></i>   ACTUALIZAR</button>
							<a type="btn" href="index.php"  class="btn btn-success btn-sm form-control" style="margin-top: 1%;font-family: algeria;"><i class="fa fa-arrow-left" aria-hidden="true"></i> REGRESAR</a>
							<input type="hidden" name="m" value="actualizar">
						</div>
						
						<?php 
					endforeach;
				endforeach; 
				?>
			</form>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<?php require_once("layouts/footer.php"); ?>