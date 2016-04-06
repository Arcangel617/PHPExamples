<?php
class Main
{
	public static function test($url)
	{
		try {
			if ($result = getimagesize($url)) {

				self::formatMessage($result);

			}else{

				throw new Exception("La url contiene caracteres que no pueden ser procesados", 1);

			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public static function formatMessage($msg)
	{
		echo '<pre>';
		print_r($msg);
		echo '</pre>';
	}
}

	// $url = 'http://img.creativosonline.org/blog/wp-content/uploads/2016/03/marina-bychkova.jpg';	
	// $url = 'http://img.creativosonline.org/blog/wp-content/uploads/2016/03/Leia-uñas.png';
	// $url = 'http://img.creativosonline.org/blog/wp-content/uploads/2016/03/Leia-u%C3%B1as.png';
	$url = 'http://img.creativosonline.org/blog/wp-content/uploads/2016/03/Leia-uÃ±as.png';
	// Main::test(utf8_decode($url));
	Main::test($url);

?>