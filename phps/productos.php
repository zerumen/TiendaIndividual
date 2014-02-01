<?php

    $db = mysql_connect("localhost","root","root") or die("Connection Error: " . mysql_error());
    mysql_select_db("wifi") or die("Error conecting to db.");
    
	$SQL = "SELECT * from productos;"; 
    $result = mysql_query( $SQL ) or die("Couldn t execute query.".mysql_error());
	//$datos[];
	$i=0;
    while($fila = mysql_fetch_array($result,MYSQL_ASSOC)) 
	{
		$datos[$i]=array('id'=>$fila["id"],'nombre'=>$fila["nombre"],'precio'=>$fila["precio"],'descripcion'=>$fila["descripcion"],'idCategoria'=>$fila['idCategoria']);
		$i++;
	}
		
	header('Content-type: application/json');
	echo json_encode($datos);
	
?>
