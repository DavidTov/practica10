<? php
// Registro de una carrer

  // Se crea un objeto del tipo MvcController
  $obj = new MvcController();

  
  // se manda llamar al método del controlador para agregar carrera
  $obj->addCareerController();

  // Si el botón de guardar fue presionando
  
   




?>-------------------- // Auí obtenemos los datos de las carreras y de los tutores para incluirlos en el // select correspondiente #SE OBTIENEN LOS DATOS DE LAS CARRERAS ------------------------------------------ // Se declara un objeto del tipo mvcController $carreras = new MvcController(); // Se llama al método del controlador para obtener los datos de las carreras $carrerasTodas = $carreras->getAllController("carreras"); #SE OBTIENEN LOS DATOS DE LOS MAESTROS/TUTORES ---------------------------------- // Se declara otro objeto del tipo MvcController $teachers = new MvcController(); // Se llama al método para obtener los datos de los maestros y se almacenan en variable $teachersTodos = $teachers-osr alumno</li> </ol> <br><br> 	<div class="box box-warning"> <br> <!-- FORMULARIO PARA EL REGISTRO DE UN ALUMNO --> <form class="form-horizontal" method="POST"> <div class="box-body"> <div class="form-group"> <label class="col-sm-4 control-label">Nombre:</label> <div class="col-sm-6"> <input type="textgroup"> <lab
"-label">Apellido Paterno:</label> <div class="col-sm-6"> <input type="text" class="form-control" placeholder="Apellido Paterno" name="lastname"> </div> </div> <div class="form-group"> <label class=

abelabel">Apellido Materno:</label> <div class="col-sm-6"> <input type="text" class="form-control" placeholder="Apellido Materno" name="motherLastname"> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label">Carrera:</label> <div class="col-sm-6"> <select class="form-control" name="career"> <!-- Se muestran las diferentes carreras --> <?php // en este foreach se muestran las carreras en el select foreach($carrerasTodas as $carreras){ echo "<option>"; echo $carreras["nombreCarrera"]; echo "</option>"; } ?> </select> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label">Tutor:</label> <div class="col-sm-6"> <select class="form-control" name="teacher"> <!-- Se muestran los diferentes maestros --> <?php // en este foreach se muestran las carreras en el select foreach($teachersTodos as $teachers){ echo "<option>"; echo $teachers["nombreMaestro"]; echo "</option>"; } ?> </select> </div> </div> </div> <div class="box-footer" align="center"> <div class="col-sm-5"></div> <input type="submit" value="Guardar" class="btn btn-primary col-sm-4" name="guardar" > </div> </form> <!-- FIN FORMULARIO PARA EL REGISTRO DE UN ALUMNO --> </div></section>obj 
