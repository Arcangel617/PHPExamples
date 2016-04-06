<?php

	$db = new mysqli('localhost','root','root','mdn_vamoslasbandas');

	if ($db->maxdb_connect_errno > 0) {
		die('Imposible conectarse con la base de datos: ['.$db->connect_error.']');
	}

	$sql = "select object_id from object_category where category_id = 3 order by object_id ASC";

	if(!$resultado = $db->query($sql)){
		die('Ocurrio un error: ['.$db->error.']');
	}

	while ($fila = $resultado->fetch_assoc()) 
	{
		echo "'".$fila['object_id']."',";
	}

	die;

?>