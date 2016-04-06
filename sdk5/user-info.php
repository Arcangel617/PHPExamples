<?php
	session_start();
	require_once('facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php');
	$fb = new Facebook\Facebook([
	  'app_id' => '939409082764250',
	  'app_secret' => '2aa90dfae293ebcff3d76f3899c4c9a9',
	  'default_graph_version' => 'v2.4',
	]);  
	  
	$helper = $fb->getRedirectLoginHelper();  
	  
	try {  
	  $accessToken = $helper->getAccessToken();  
	} catch(Facebook\Exceptions\FacebookResponseException $e) {  
	  // When Graph returns an error  
	  echo 'Graph returned an error: ' . $e->getMessage();  
	  exit;  
	} catch(Facebook\Exceptions\FacebookSDKException $e) {  
	  // When validation fails or other local issues  
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();  
	  exit;  
	}  

	try {
	  // Returns a `Facebook\FacebookResponse` object
	  $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	$user = $response->getGraphUser();

	echo '<pre>';
	print_r($user);
	echo '</pre>';
	// OR
	// echo 'Name: ' . $user->getName();
?>