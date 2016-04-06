<?php

	include ('../utilities/check.php');
	include ('links.php');

	// $db = new mysqli('localhost','root','root','alternativa');
	// $q = "select host from host_links ";
	// $resultado = $db->query($q);

 	// while ($fila = $resultado->fetch_assoc()) {
 	// 	$h = get_headers($fila['host'])[0];echo $h;die;
 	// 	$db->query('update host_links set status =("'.$h.'") where Link = "'.$fila['host'].'"');
 	// }

 	// foreach ($links as $key => $url) {
 	// 	$h = get_headers($url)[0];
 	// 	$db->query('update Criticas_Medios set status =("'.$h.'") where Link = "'.$url.'"');
 	// }

 	foreach ($links as $key => $value) {
 		$code = http_response_code($value);
 		echo $code;
 	}

 	die('done.');

 	// $db->query("update Criticas_Medios set status = (NULL)");die;
	
 	// $db->close();
 	// die('finished');

 	
 	
 	// while ($fila = $resultado->fetch_assoc()) {
 	// 	echo '"'.utf8_encode($fila['Link']).'",<br>';
 	// }

 	// die ('done.');



	// public function query1()
	// {
	// 	$sql = "select Codigo,Link from Criticas_Medios";

	// 	if(!$resultado = $db->query($sql)){
	// 		die('Ocurrio un error: ['.$db->error.']');
	// 	}

	// 	$hosts = array();
	// 	$schemes = array();
	// 	$corrupted = array();

	// 	while($fila = $resultado->fetch_assoc()){
	// 		$link = parse_url($fila['Link']);
	// 		$h = $link['host'];
	// 		$s = $link['scheme'];
			
	// 		if (!empty($h) && !in_array($h,$hosts)) {
	// 			$hosts[]=$h;
	// 		}

	// 		if (empty($h)) {
	// 			$corrupted[] = $fila['Codigo'];
	// 		}

	// 		if (!in_array($s,$schemes)) {
	// 			$schemes[]=$s;
	// 		}

	// 	}
	// 	$in = '(';
	// 	foreach ($corrupted as $key => $value) {
	// 		if ($key == (count($corrupted)-1)) {
	// 			$in .= $value.')';
	// 		}else{
	// 			$in .= $value.',';
	// 		}
	// 	}

	// 	var_dump($in);

	// 	echo '<pre>';
	// 	print_r($schemes);
	// 	print_r($corrupted);
	// 	print_r($hosts);
	// 	echo '</pre>';

	// 	$sql = "select * from Criticas_Medios where Codigo in ".$in."";

	// 	if(!$resultado = $db->query($sql)){
	// 		die('Ocurrio un error: ['.$db->error.']');
	// 	}

	// 	while($fila = $resultado->fetch_assoc()){
	// 		echo '<pre>';
	// 		print_r($fila);
	// 		echo '</pre>';

	// 	}

	// }

	
	// $q = "select Codigo,Link from Criticas_Medios where Link like '%pagina12.com.ar%' order by Link ASC";

	// if(!$resultado = $db->query($q)){
	// 	die('Ocurrio un error: ['.$db->error.']');
	// }

	// while ($fila = $resultado->fetch_assoc()) {
	// 	echo "'".$fila['Link']."',<br>";
	// }
	// die;

	// $q = "select Codigo,Link from Criticas_Medios where Link not like '%pagina12.com.ar%' and Link not like '%lanacion.com.ar%' order by Link ASC";

	// if(!$resultado = $db->query($q)){
	// 	die('Ocurrio un error: ['.$db->error.']');
	// }

	// while ($fila = $resultado->fetch_assoc()) {
	// 	echo "'".$fila['Link']."',<br>";
	// }
	// die;

	// $q = "select Link from Criticas_Medios where Link not like '%.jpg%' order by Link ASC";

	// if(!$resultado = $db->query($q)){
	// 	die('Ocurrio un error: ['.$db->error.']');
	// }

	// $total = array();
	// while ($fila = $resultado->fetch_assoc()) {
		
	// 	$host = parse_url($fila['Link']);
		
	// 	if (isset($host['host'])) {
	// 		if (!in_array($host['host'], $total)) {
	// 			$total[] = $host['host'];
	// 		}
	// 	}
	// }
	

	// foreach ($total as $key => $value) {
	// 	$q = "insert into host_links (host) values('".$value."')";
	// 	$db->query($q);
	// }

	// foreach ($total as $key => $value) {
	// 	$sq = "select count(Codigo) from Criticas_Medios where Link like '%".$value."%'";
	// 	$q = "UPDATE host_links SET total=(".$sq.") WHERE host='".$value."'";
	// 	$result = $db->query($q);
	// }

	

	
	die;

?>