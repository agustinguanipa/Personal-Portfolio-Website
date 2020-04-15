<?php 
	session_start();

  require_once('includes/admin_header.php');

	$busqueda = strtolower($_REQUEST['busqueda']);
	if (empty($busqueda)) {
		header('location: publicacion_lista.php');
		mysqli_close($con);
	}
?>

<div class="container-fluid">
	<div class="table-wrapper">
	    <div class="table-title">
	        <div class="row">
            <div class="col-sm-6">
							<h2>Administrar <b>Publicaciones</b></h2>
						</div>
						<div class="col-sm-6">
							<a href="publicacion_lista.php" class="btn btn-light text-dark"><i class="fa fa-users"></i> Publicaciones Activas</a>
							<a href="publicacion_lista_inactivo.php" class="btn btn-light text-dark"><i class="fa fa-trash"></i> Publicaciones Inactivas</a>
						</div>
	        </div>
	    </div>
	    <div class="row" style="padding-top: 2px;">
	    	<div class="col-sm-8">	
				</div>
				<form action="publicacion_buscar.php" method="GET" class="col-sm-4" style="padding-top: 1px;">
					<div class="input-group">			
						<input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar">
						<div class="input-group-append">
							<button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</form>
	    </div>
	    <hr>
	    <div>
	    	<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th class='text-center'>ID</th>
							<th class='text-center'>Nombre</th>
							<th class='text-center'>Área</th>
							<th class='text-center'>Fecha de Publicación</th>
							<th class='text-center'>Restaurar</th>
						</tr>
						<?php 
							
						// Paginador 

							$sql_registe = mysqli_query($con,"SELECT COUNT(*) as total_registro FROM tab_proy WHERE 
								(ident_proy LIKE '%busqueda%' OR
								nombr_proy LIKE '%busqueda%' OR
								fecre_not LIKE '%busqueda%' )
								AND statu_proy = 0");
							$result_registe = mysqli_fetch_array($sql_registe);
							$total_registro = $result_registe['total_registro'];

							$por_pagina = 20;

							if (empty($_GET['pagina'])) 
							{
								$pagina = 1;
							}else{

								$pagina = $_GET['pagina'];
							}

							$desde = ($pagina-1) * $por_pagina;
							$total_paginas = ceil($total_registro / $por_pagina);

							$query = mysqli_query($con,"SELECT ident_proy, nombr_proy, areaa_proy, fecre_proy FROM tab_proy WHERE 
								( ident_proy LIKE '%$busqueda%' OR
								nombr_proy LIKE '%$busqueda%' OR  
								fecre_proy LIKE '%$busqueda%' )
								AND statu_proy = 0  ORDER BY ident_proy ASC LIMIT $desde,$por_pagina");
							mysqli_close($con);
							$result = mysqli_num_rows($query);

							if ($result > 0) {
							 	while ($data = mysqli_fetch_array($query)) {

							 		?>

							 		<tr class="row<?php echo $data['ident_proy']; ?>">
										<td class='text-center'><?php echo $data['ident_proy']; ?></td>
										<td class='text-center'><?php echo $data['nombr_proy']; ?></td>
										<td class='text-center'><?php echo $data['areaa_proy']; ?></td>
										<td class='text-center'><?php echo $data['fecre_proy']; ?></td>
										<td class='text-center'>
											<a href="publicacion_restaurar.php?id=<?php echo $data['ident_proy']; ?>" class="look"><i class="fa fa-check"></i></a>
										</td>
									</tr>

							 	<?php	
							 	}
							 } 
						?>
					</table>
				</div>
				<div class="paginador">
					<ul>
						<?php 
							if ($pagina != 1) 
							{
								?>
								<li><a href="?pagina=<?php echo 1; ?>"><i class="fas fa-step-backward"></i></a></li>
								<li><a href="?pagina=<?php echo $pagina-1; ?>"><i class="fas fa-backward"></i></a></li>
								<?php	
							}
						?>
						
						<?php 
							for ($i=1; $i <= $total_paginas; $i++) 
							{ 
								if ($i == $pagina) 
								{
									echo '<li class="pageSelected">'.$i.'</li>';
								}else{

									echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
								}
							}
						
							if ($pagina != $total_paginas) 
							{
								?>
								<li><a href="?pagina=<?php echo $pagina+1; ?>"><i class="fas fa-forward"></i></a></li>
								<li><a href="?pagina=<?php echo $total_paginas; ?>"><i class="fas fa-step-forward"></i></a></li>
								<?php
							}
						?>
			
					</ul>
				</div>
	    </div>
	</div>
</div>

<?php require_once('includes/admin_footer.php');  ?>

                               		                            