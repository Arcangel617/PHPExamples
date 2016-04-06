<?php

	require_once 'load.php';
	Session::Start();

	$user = new User();
	echo '<pre>';
    print_r($user);
    echo '</pre>';
    die;

	Session::Get();


?>