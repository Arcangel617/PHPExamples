<?php 
	
	$db = new mysqli('localhost','root','root','avisa_emails');
	$q = "select * from avisa ";
	$resultado = $db->query($q);

	$rows = array();

	while ($fila = $resultado->fetch_assoc()) {
 		if (!in_array($fila, $rows)) {
 			array_push($rows, $fila);
 		}
 	}
 	
 	foreach ($rows as $key => $value) {
		$q = "insert into avisa_emails_clean (contact_name,contact_email) values('".$value['s_contact_name']."','".$value['s_contact_email']."')";
		$db->query($q);
	}

	die('Done.');

?>