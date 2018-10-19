<?php 
	
	#------------------------------------
  #VER LOS DATOS DE LOS DIFERENTES ALUMNOS -50%-
    #------------------------------------


	// Se declara un objeto del tipo MvcController
	$obj = new MvcController();

	// Se manda llamar al método para obtener todos los datos de los tutores
	// y se guardan en un array los registros encontrados
	$students = $obj->getAllController("alumnos");


 ?>

 <br><br><br>
 <center>
 	<table border="4px">
 		<thead>
 			<th> Nombre </th>
 		 	<th> Carrera </th>
 		 	<th> Maestro </th> 		 	
 		 	<th> Editar </th>
 		</thead>
 		<tbody>
 			<?php 
 				// Comienza el foreach
 				foreach($students as $student):
 					echo "<tr>"; // comienza un registro
 					echo "<td>" . $student["nombre"] . "</td>";
 					echo "<td>" . $student["carrera"] . "</td>";
 					echo "<td>" . $student["maestro"] . "</td>"; 					
 			 ?>
 			 <!-- BOTÓN PARA EDITAR LOS DATOS DE LOS TUTORES-->
 			 <td><a href="index.php?enlace=editarAlumno&id=<?php echo($student['id']) ?>"><button>Editar</button></a></td>
 			</tr> <!-- Termina un registro -->
 		<!--TERMINA foreach-->
 		<?php endforeach; ?>
 		</tbody>
 	</table>
 </center>