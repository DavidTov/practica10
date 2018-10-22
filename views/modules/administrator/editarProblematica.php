<?php 

	#------------------------------------
  # UPDATE DE PROBLEMATICAS  -- 100% --
    #------------------------------------
	

	// Se declara un objeto del tipo MvcController
	$controller = new MvcController();

	// Se obtiene el id con GET para mostrar los datos del cual se dio clic
	if(isset($_GET["id"])){
		$infoProblem = $controller->infoProblemController();
	}


	// Si se presionó el botón de guardar
	if(isset($_POST["guardar"])){
		// Se manda llamar al metodo para actualizar los datos de la problemática
		$controller->updateProblemController();
	}

 ?>



<section class="content-header">
  <br>
  <h1>
    Actualizar Problematica
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-exclamation-circle"></i>Problematicas</a></li>
    <li class="active">Actualizar problematica</li>
  </ol>
  <br><br>
  	
<div class="box box-warning">
  <br>

  <!-- FORMULARIO PARA ACTUALIZAR UNA PROBLEMATICA-->
  <form class="form-horizontal" method="POST">
    <div class="box-body">
      
      <div class="form-group">
        <label class="col-sm-4 control-label">Nombre:</label>
        <div class="col-sm-6">

        	<!-- INPUT HIDDEN PARA QUE NO SE VEA (PARA OBTENER EL ID)-->
        	<input type="hidden" name="id" value="<?php echo($infoProblem["id"]) ?>">
        	<!-- INPUT HIDDEN PARA QUE NO SE VEA -->


          <input type="text" class="form-control" placeholder="Nombre del tipo de problematica" name="nameProblem" required value="<?php echo($infoProblem["nombre"]) ?>">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-4 control-label">Descripcion:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Descripcion de la problematica" name="descriptionProblem" required value="<?php echo($infoProblem["decripcion"]) ?>">
        </div>
      </div>
    </div>
    <div class="box-footer" align="center">
      <div class="col-sm-5"></div>
      <input type="submit" value="Guardar" class="btn btn-primary col-sm-4" name="guardar" >
    </div>

  </form>
  <!-- FIN FORMULARIO PARA ACTUALIZAR UNA PROBLEMATICA -->

</div>
</section>
