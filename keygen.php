<?php

	/**
	 * Genera una clave alfabética de 24 caracteres y una
	 * clave numérica de 48 caracteres.
	 *
	 * @author Arcangel Andres Artigue
	 * @version 16.2.4
	 */
	
	/**
	 * Uso: Si la url no recibe parámetros generará una
	 * clave alfabética con caracteres aleatorios. Si se
	 * le pasa el parámetro ?appname=un_string generará
	 * una clave alfabética a partir del string que se
	 * proporciona como parámetro.
	 */

	/**
	 * Genera un string de 24 caracteres.
	 *
	 * @param $appName es un string
	 * @return string
	 */
	function GenerateDataKey($appName)
	{
		$appName .= strtoupper($appName);

		$chars = str_split($appName, 1);
		
		$key = '';
		
		for ($i=0; $i < 24; $i++) { 
			$key .= $chars[rand(0, strlen($appName)-1)];
		}

		return $key;
	}

	/**
	 * Genera un string de 10 caracteres.
	 *
	 * @return string
	 */
	function GenerateName()
	{
		$key = '';
		$alphabet = array(
			'a','b','c','d','e','f','g','h','i',
			'j','k','l','m','n','o','p','q','r',
			's','t','u','v','w','x','y','z'
			);

		for ($i=0; $i < 10 ; $i++) { 
			$key .= $alphabet[rand(0, (count($alphabet)-1))];
		}

		return $key;
	}

	/**
	 * Genera un string de 48 caracteres.
	 *
	 * @return string
	 */
	function GenerateEncryptHash()
	{
		$key = '';
		for ($i=0; $i < 48 ; $i++) { 
			$key .= rand(0, 9);
		}

		return $key;
	}

	if (!isset($_GET['appname'])) {
		$value = GenerateName();
	} else {
		$value = $_GET['appname'];
	}

	echo "<table border='1'>";
	echo '<tr><td>Clave de 24 caracteres</td><td>(datakey)</td><td>'.GenerateDataKey($value).'</td>';
	echo '<tr><td>Clave de 48 caracteres</td><td>(encrypthash)</td><td>'.GenerateEncryptHash().'</td>';
	echo '<tr><td>Nombre de session</td><td>(sessionname)</td><td>'.$value.'</td>';
	echo "<tr><td colspan='3'><b>Nota:</b>Estos valores deben agregarse en los archivos <i>development.xml</i> y <i>production.xml</i>.</td></tr>";
	echo '</table>';


?>