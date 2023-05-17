<?php require_once("layouts/header.php"); ?>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h1 style="text-align: center;font-family: algeria;font-size:30pt;margin-top: 2%;">LISTA DE PRODUCTOS 	
			<a href="index.php?m=nuevo" class="btn btn-primary btn-sm" style="margin-top: -0.5%;">
			<i class="fa fa-plus-square" aria-hidden="true"></i> NUEVO PRODUCTO </a></h1>
			<table class="table table-striped table-sm table-responsive-sm table-bordered">
				<tr>
					<td style="text-align: center;font-family: algeria;">ID</td>
					<td style="text-align: center;font-family: algeria;">NOMBRE</td>
					<td style="text-align: center;font-family: algeria;">PRECIO</td>
					<td style="text-align: center;font-family: algeria;">ACCIONES</td>
				</tr>
				<tbody>
					<?php  
					if (!empty($dato)) :
						foreach ($dato as $key => $value) 
							foreach($value as $v):?>
								<tr>
									<td style="text-align: center;font-family: algeria;"><?php echo $v['id'] ?></td>
									<td style="text-align: center;font-family: algeria;"><?php echo $v['nombre'] ?></td>
									<td style="text-align: center;font-family: algeria;"><?php echo $v['precio'] ?></td>
									<td style="text-align: center;font-family: algeria;">
										<a class="btn btn-success btn-sm" href="index.php?m=editar&id=<?php echo $v['id'] ?>"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> EDITAR</a>
										<a class="btn btn-danger btn-sm" href="index.php?m=eliminar&id=<?php echo $v['id'] ?>" onclick="return confirm('ESTAS SEGURO'); false"><i class="fa fa-trash-o" aria-hidden="true"></i> ELIMINAR</a>
										</td>
									</tr>
								<?php endforeach ?>
							<?php else: ?>
								<tr>
									<td colspan="3">NO HAY REGISTROS</td>
								</tr>
							<?php endif ?>
						</tbody>
					</table>
				</div>
				<div class="col-md-1"></div>
			</div>
			<?php require_once("layouts/footer.php") ?>