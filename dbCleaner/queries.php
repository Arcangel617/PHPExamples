<?php
Class Queries
{
	public static function getHostFromUrl($p_url)
	{
		
		if (self::isUrl($p_url)) {
			
		}

	}

	/**
	 * Verifica si el dato de un determinado campo es una url o no.
	 * @param $p_url dato
	 * @param $p_dbField Campo de la base de datos
	 * @return boolean
	 */
	public static function isUrl($p_url)
	{
		if (isset(parseLink($row[$p_dbField])['scheme'])) {
			return true;
		}else{
			return false;
		}
	}

	/**
	 * 
	 *	@return Array
	 */
	public static function parseLink($p_link)
	{
		return parse_url($p_link);

	}
}
?>