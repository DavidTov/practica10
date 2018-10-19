<?php 
	
	#------------------------------------
  #VER LOS DATOS DE LOS DIFERENTES TUTORES -50%-
    #------------------------------------


	// Se declara un objeto del tipo MvcController
	$obj = new MvcController();

	// Se manda llamar al método para obtener todos los datos de los tutores
	// y se guardan en un array los registros encontrados
	$teachers = $obj->getAllController("maestros");


 ?>

 <br><br><br>
 <center>
 	<table border="4px">
 		<thead>
 			<th> Nombre </th>
 		 	<th> Carrera </th>
 		 	<th> Email </th>
 		 	<th> Foto </th>
 		 	<th> Editar </th>
 		</thead>
 		<tbody>
 			<?php 
 				// Comienza el foreach
 				foreach($teachers as $teacher):
 					echo "<tr>"; // comienza un registro
 					echo "<td>" . $teacher["nombreMaestro"] . "</td>";
 					echo "<td>" . $teacher["carrera"] . "</td>";
 					echo "<td>" . $teacher["email"] . "</td>";
 					echo "<td>" . $teacher["foto"] . "</td>"; 				
 			 ?>
 			 <!-- BOTÓN PARA EDITAR LOS DATOS DE LOS TUTORES-->
 			 <td><a href="index.php?enlace=editarTutor&id=<?php echo($teacher["id"]) ?>"><button>Editar</button></a></td>
 			</tr> <!-- Termina un registro -->
 		<!--TERMINA foreach-->
 		<?php endforeach; ?>
 		</tbody>
 	</table>
 </center>