<?php require_once('includes/header.php'); ?>

<head>
	<title>Portafolio | Carlos Agustin Guanipa Alvarez</title>
</head>

<body>
	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-sm-12 form-group">
	  			<h2 class="" style="color: #000000;"><b>Portafolio</b></h2>
	  			<hr class="my-4">
	  			<div align="center">
				    <button class="btn btn-primary active filter-button" data-filter="todo">Todo</button>
				    <button class="btn btn-primary filter-button" data-filter="RETRATOS">Retratos</button>
				    <button class="btn btn-primary filter-button" data-filter="PAISAJES">Paisajes</button>
				    <button class="btn btn-primary filter-button" data-filter="DISENOS">Diseños</button>
				    <button class="btn btn-primary filter-button" data-filter="ZP FOTOGRAFIA">ZP Fotografía</button>

						<div class="row">
							<div class="row">
							<?php
				        include("conexion.php");

			          $ReadSql = "SELECT * FROM tab_imag WHERE statu_imag = 1 ORDER BY ident_imag ASC";
			          $res = mysqli_query($con, $ReadSql);
			      
	              while($row = mysqli_fetch_assoc($res)){
							
 							?>
									<div class="col-lg-3 col-md-4 col-xs-6 thumb filter <?php echo $row['categ_imag'] ?>">
		                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
		                   data-image="<?php echo $row['image_imag'] ?>"
		                   data-target="#image-gallery">
		                    <img class="img-thumbnail"
		                         src="<?php echo $row['image_imag'] ?>"
		                         alt="<?php echo $row['categ_imag'] ?>">
		                </a>
			            </div>
		           	<?php
		              }
		            ?> 
					        </div>

					        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					            <div class="modal-dialog modal-lg">
					                <div class="modal-content">
					                    <div class="modal-header">
					                        <h4 class="modal-title" id="image-gallery-title"></h4>
					                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
					                        </button>
					                    </div>
					                    <div class="modal-body">
					                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
					                    </div>
					                    <div class="modal-footer">
					                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
					                        </button>

					                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
					                        </button>
					                    </div>
					                </div>
					            </div>
					        </div>
						</div>
					</div>
		    </div>
		  </div>
		</div>
	</div>
</body>

<?php require_once('includes/footer.php');  ?>


