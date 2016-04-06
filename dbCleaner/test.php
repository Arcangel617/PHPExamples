<?php

	require_once('conexion.php');
	require_once('check.php');

	$conexion1 = new Conexion('alternativa','root','root','localhost','mysql');

	$db = $conexion1->getDbInstance();
	// $result = $db->query('select * from Criticas_Medios');
	$result = $db->query('select * from Criticas_Medios where Titulo = Link');
	
	Check::debug($result->fetch_assoc());

	while ($row = $result->fetch_assoc()) {
		// echo $row['Codigo'].' => '.$row['Titulo'].' => '.$row['Link'].'<br>';
		// echo $row['Codigo'].' => '.$row['Link'].'<br>';
		// foreach ($row as $key => $value) {
		// 	echo '['.$key.']['.$value.']';
		// }
		// echo '<br>';
		// Check::debug(parseLink($row['Link']));
		// if (!isset(parseLink($row['Link'])['scheme'])) {
		// 	echo $row['Codigo'];
		// }
		Queries::getHostFromUrl($row['Link']);

	}

?>