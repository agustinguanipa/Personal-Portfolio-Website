<?php require_once('includes/header.php'); ?>

<head>
	<title>Blog | Carlos Agustin Guanipa Alvarez</title>
</head>

<body>
	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
	  <div class="container">
	  	<div class="row">

				<!--- Columna 1 --->

	  		<div class="col-sm-8 form-group mb-5">
	  			<h2 class="" style="color: #000000;"><b>Blog</b></h2>
	  			<hr class="my-4">
	  			
					<?php
		        include("conexion.php");
		         $perpage = 8;
		          if(isset($_GET['page']) & !empty($_GET['page'])){
		            $curpage = $_GET['page'];
		          }else{
		            $curpage = 1;
		          }
		          $start = ($curpage * $perpage) - $perpage;
		          $PageSql = "SELECT * FROM tab_proy WHERE statu_proy = 1 ORDER BY ident_proy DESC";
		          $pageres = mysqli_query($con, $PageSql);
		          $totalres = mysqli_num_rows($pageres);

		          $endpage = ceil($totalres/$perpage);
		          $startpage = 1;
		          $nextpage = $curpage + 1;
		          $previouspage = $curpage - 1;

		          $ReadSql = "SELECT * FROM tab_proy WHERE statu_proy = 1 ORDER BY ident_proy DESC LIMIT $start, $perpage";
		          $res = mysqli_query($con, $ReadSql);
		      ?>

		      <div class="container text-center">
		        <div class="card-deck">
		          <?php
		            while($row = mysqli_fetch_assoc($res)){  
		          ?>
		          <div class="col col-lg-6">
		            <div class="card my-3">
		              <img  class="card-img-fluid image-size-index" src="<?php echo $row['image_proy']; ?>" alt="Foto de la Publicacion">
		              <div class="card-body">
		                <h4 class="card-title"><b><?php echo $row['nombr_proy']; ?></b></h4>
		                <p class="card-text"><?php echo $row['desco_proy']; ?></p>
		              </div>
		              <div class="card-footer">
		               	<p class="card-text float-left"><small class="text-muted"><?php echo $row['fecre_proy']; ?></small></p>
		                <a href="publicacion_detalle.php?id=<?php echo $row['ident_proy']; ?>" class="btn btn-primary float-right"><i class="fa fa-eye"></i> Leer Más</a>
		              </div>
		            </div>
		          </div>
		          <?php
		              }
		            ?>
		        </div>
		      </div>

		      <br>

		      <!--Pagination-->
		      <nav aria-label="Page navigation">
		        <ul class="pagination float-right">
		        <?php if($curpage != $startpage){ ?>
		          <li class="page-item">
		            <a class="page-link" href="?page=<?php echo $startpage ?>" tabindex="-1" aria-label="Previous">
		              <span aria-hidden="true">&laquo;</span>
		              <span class="sr-only">First</span>
		            </a>
		          </li>
		          <?php } ?>
		          <?php if($curpage >= 2){ ?>
		          <li class="page-item"><a class="page-link" href="?page=<?php echo $previouspage ?>"><?php echo $previouspage ?></a></li>
		          <?php } ?>
		          <li class="page-item active"><a class="page-link" href="?page=<?php echo $curpage ?>"><?php echo $curpage ?></a></li>
		          <?php if($curpage != $endpage){ ?>
		          <li class="page-item"><a class="page-link" href="?page=<?php echo $nextpage ?>"><?php echo $nextpage ?></a></li>
		          <li class="page-item">
		            <a class="page-link" href="?page=<?php echo $endpage ?>" aria-label="Next">
		              <span aria-hidden="true">&raquo;</span>
		              <span class="sr-only">Last</span>
		            </a>
		          </li>
		          <?php } ?>
		        </ul>
		      </nav>
		      <br>
		    </div>

				<!--- Columna 2 --->

		    <div class="col-sm-4 form-group mb-5">
	  			<h2 class="" style="color: #000000;"><b>Últimos Post</b></h2>
	  			<hr class="my-4">
	  			<h5 class="" style="color: #000000;"><b>Twitter</b></h5>
	  			<a href="https://twitter.com/agustinguanipa?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @agustinguanipa</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					<a class="twitter-timeline" data-height="1000" href="https://twitter.com/AgustinGuanipa?ref_src=twsrc%5Etfw">Tweets by AgustinGuanipa</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					<h5 class="" style="color: #000000;"><b>Instagram</b></h5>
					<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
					<iframe src="//lightwidget.com/widgets/59cbff6a504951e3ac812629fddaa9d8.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
		    </div>
		  </div>
		</div>
	</div>s
</body>

<?php require_once('includes/footer.php');  ?>


