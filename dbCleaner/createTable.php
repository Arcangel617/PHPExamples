<?php

$servername = "localhost";
$username 	= "root";
$password 	= "root";
$dbname 	= "links";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE links (
    			id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    			dominios VARCHAR(100) NOT NULL
    		)";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "la tabla fue creada!";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 