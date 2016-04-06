<?php
Class Conexion
{
	/* Attributes */
	private $dbUser;
	private $dbName;
	private $dbPassword;
	private $dbHost;
	private $db;
	private $dbInstance;


	public function __construct($p_dbName,$p_dbUser,$p_dbPassword,$p_dbHost,$p_db)
	{
		$this->setDbName($p_dbName);
		$this->setDbUser($p_dbUser);
		$this->setDbPassword($p_dbPassword);
		$this->setDbHost($p_dbHost);
		$this->setDb($p_db);
		$this->setDbInstance();
	}

	/* Setters */
	private function setDbUser($p_dbUser)
	{
		$this->dbUser = $p_dbUser;
	}

	private function setDbName($p_dbName)
	{
		$this->dbName = $p_dbName;
	}

	private function setDbPassword($p_dbPassword)
	{
		$this->dbPassword = $p_dbPassword; 
	}

	private function setDbHost($p_dbHost)
	{
		$this->dbHost = $p_dbHost;
	}

	private function setDb($p_db)
	{
		$this->db = $p_db;
	}

	private function setDbInstance()
	{
		$new_db_instance = new mysqli(
			$this->getDbHost(),
			$this->getDbUser(),
			$this->getDbPassword(),
			$this->getDbName()
			);

		$this->dbInstance = $new_db_instance;
	}

	/* Getters */
	public function getDbName()
	{
		return $this->dbName;
	}

	public function getDbUser()
	{
		return $this->dbUser;
	}

	public function getDbPassword()
	{
		return $this->dbPassword;
	}

	public function getDbHost()
	{
		return $this->dbHost;
	}

	public function getDb()
	{
		return $this->db;
	}

	public function getDbInstance()
	{
		return $this->dbInstance;
	}




}
?>