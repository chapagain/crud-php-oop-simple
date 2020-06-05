<?php

namespace Testspace;

use mysqli;

class DbConfig
{	
	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'test';
	
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}			
		}	
		
		return $this->connection;
	}

	public function getConnection(){
		return $this->connection;
	}
}
?>
