<?php 
	
	#------------------------------------
  #VER LOS DATOS DE LAS DIFERENTES CARRERAS -50%-
    #------------------------------------


	// Se declara un objeto del tipo MvcController
	$obj = new MvcController();

	// Se manda llamar al método para obtener todos los datos de los tutores
	// y se guardan en un array los registros encontrados
	$careers = $obj->getAllController("carreras");


 ?>

 <br><br><br>
 <center>
 	<table border="4px">
 		<thead>
 			<th> Nombre de la carrera </th>
 			<th> Editar </th>
 		</thead>
 		<tbody>
 			<?php 
 				// Comienza el foreach
 				foreach($careers as $career):
 					echo "<tr>"; // comienza un registro
 					echo "<td>" . $career["nombreCarrera"] . "</td>";
 			 ?>
 			 <!-- BOTÓN PARA EDITAR LOS DATOS DE LOS TUTORES-->
 			 <td><a href="index.php?enlace=editarCarrera&id=<?php echo($career['id']) ?>"><button>Editar</button></a></td>
 			</tr> <!-- Termina un registro -->
 		<!--TERMINA foreach-->
 		<?php endforeach; ?>
 		</tbody>
 	</table>
 </center>