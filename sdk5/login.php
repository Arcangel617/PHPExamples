<?php
	
	session_start();

	require_once('facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php');

	$fb = new Facebook\Facebook([
	  'app_id' => '939409082764250',
	  'app_secret' => '2aa90dfae293ebcff3d76f3899c4c9a9',
	  'default_graph_version' => 'v2.4',
	]);

	$helper = $fb->getRedirectLoginHelper();
	
	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://local.examples/sdk5/user-info.php', $permissions);

	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>