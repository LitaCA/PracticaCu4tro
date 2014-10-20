<html>
          <head>
	<title>ArraysPractica4Programacion</title>
                                                                 </head>
		
<body>
            <form>
                       <table>
                                 <tr>
<?php

      $PRODUCTOS = array(
	"idA" => "1",
	"ProductoA" =>"Pan",
	"PrecioA" =>"10",
);
?>

	<td><?php echo $PRODUCTOS ['idA']; ?>  </td>
	<td><?php echo $PRODUCTOS ['ProductoA']; ?></td>
	<td><?php echo $PRODUCTOS ['PrecioA']; ?>  </td>
	<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
	<td>                                  
       </td>
</tr>

<tr>
<?php

	$PRODUCTOS = array(
	"idB" => "2",
	"ProductoB" =>"Refresco",
	"PrecioB" =>"10",
);
?>

	<td><?php echo $PRODUCTOS ['idB']; ?>  </td>
	<td><?php echo $PRODUCTOS ['ProductoB']; ?></td>
	<td><?php echo $PRODUCTOS ['PrecioB']; ?>  </td>
	<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
	<td>                                  
       </td>
</tr>
						
<?php
						
	$PRODUCTOS = array(
	"idC" => "3",
	"ProductosC" =>"Verduras",
	"PrecioC" =>"2",
);
?>

	<td><?php echo $PRODUCTOS ['idC']; ?>  </td>
	<td><?php echo $PRODUCTOS ['ProductosC']; ?></td>
	<td><?php echo $PRODUCTOS ['PrecioC']; ?>  </td>
	<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
	<td>                                  
       </td>
</tr>
							
<?php
						
	$PRODUCTOS = array(
	"idD" => "4",
	"ProductosD" =>"Frutas",
	"PrecioD" =>"20",
);
?>
					
	<td><?php echo $PRODUCTOS ['idD']; ?>  </td>
	<td><?php echo $PRODUCTOS ['ProductosD']; ?></td>
	<td><?php echo $PRODUCTOS ['PrecioD']; ?> </td>
	<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
	<td>                                  
        </td>                   
</tr>	

<?php
						
	$PRODUCTOS = array(
	"idE" => "5",
	"ProductosE" =>"Agua",
	"PrecioE" =>"12",
);
?>
					
	<td><?php echo $PRODUCTOS ['idE']; ?>  </td>
	<td><?php echo $PRODUCTOS ['ProductosE']; ?></td>
	<td><?php echo $PRODUCTOS ['PrecioE']; ?> </td>
	<td> <a href="Editar.html">Editar</a>    <a href="Eliminar.html">Eliminar</a></td> 
         <td>                                  
</td>
                            
		               </tr>										
		         </tr>				
	               </table>
                      </form>
          </body>
</html>