<?php
Class User
{
	private $id;
	private $table;
	private $structure;
	private $params  			= array();
	private $filters 			= array();	// pagination filters
	private $sessionVariable	= 'mdl';
	private $cookieName		= 'user';
	private $cookieTime     = 1209600; // 2 semanas 
	private $cookiePath     = '/';
	private $encryptHash	= '994248963017717334501526818365836079525263211586';

	public function __construct($id = false)
	{
		$this->id 			= $id;
		$this->table    	= 'user';

		$this->params = array(
			'tag'       => 'user',
			'user_type' => 'backend',
			'debug'	    => true
		);

		// $this->params = Util::extend($this->params, $params);
	}
}
?>