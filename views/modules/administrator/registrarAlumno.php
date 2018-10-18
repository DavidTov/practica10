<?php 
  //REGISTRO DE UN ALUMNO

  // Aquí obtenemos los datos de las carreras y de los tutores para incluirlos en el
  // select correspondiente

  // Se declara un objeto del tipo mvcController
  $carreras = new MvcController();

  // Se llama al método del controlador para obtener los datos de las carreras
  $carreras->


 ?>


<section class="content-header">
  <br>
  <h1>
    Registrar Nuevo Alumno
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-user"></i>Alumnos</a></li>
    <li class="active">Registrar alumno</li>
  </ol>
  <br><br>
  	
<div class="box box-warning">
  <br>
  <form class="form-horizontal">
    <div class="box-body">
      
      <div class="form-group">
        <label class="col-sm-4 control-label">Nombre:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Nombre">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-4 control-label">Apellido Paterno:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Apellido Paterno">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-4 control-label">Apellido Materno:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="Apellido Materno">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-sm-4 control-label">Carrera:</label>
        <div class="col-sm-6">
          <select class="form-control">
            <option>ITI</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-4 control-label">Tutor:</label>
        <div class="col-sm-6">
          <select class="form-control">
            <option>Mario</option>
          </select>
        </div>
      </div>
    </div>
    <div class="box-footer" align="center">
      <div class="col-sm-5"></div>
      <input type="submit" value="Guardar" class="btn btn-primary col-sm-4" >
    </div>

  </form>
</div>
</section>
