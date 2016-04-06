<?php 
	// $sql = mysqli_query("select * from `YourTable` ");
	// $countColumns = mysqli_field_count($sql); // get total columns
	// for ($i = 0; $i < $countColumns; $i++) {
	//   $column = mysqli_fetch_field_direct($sql, $i);  // get field name
	//   $csv.= '"'.$column.'",';
	// }
	// $csv.="\n";
	
	// while ($row = mysqli_fetch_array($sql)) {
	//   for ($i = 0; $i < $countColumns; $i++) {
	//   $csv.='"'.$row["$i"].'",';
	// }
	// $csv.="\n";
	// }
	// $filename = "Export.csv";
	// header('Content-type: application/csv');
	// header('Content-Disposition: attachment; filename='.$filename);
	// echo $csv;
	// exit;

	$db = new mysqli('localhost','root','root','avisa_emails');
	$q = "select * from avisa ";
	$resultado = $db->query($q);

	while ($fila = $resultado->fetch_assoc()) {
 		echo '<pre>';
 		print_r($fila);
 		echo '</pre>';
 	}
?>