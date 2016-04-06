<?php
Class Check
{
	public static function getClassMethods($p_object_instance)
	{
		echo '<pre>';
		print_r(get_class_methods(get_class($p_object_instance)));
		echo '</pre>';
		echo '<br>';

	}

	public static function bool2str($p_boolValue)
	{
		if ($p_boolValue === true) {
			return 'TRUE';
		}else{
			return 'FALSE';
		}
	}

	public static function areTheSameInstance($p_object_instance1,$p_object_instance2)
	{
		return self::bool2str($p_object_instance1 == $p_object_instance2);
	}

	public static function debug($p_object)
	{
		echo '<pre>';
		print_r($p_object);
		echo '</pre>';
		echo '<br>';
	}
}
?>