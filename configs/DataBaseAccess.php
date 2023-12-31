<?php
function getDbAccess(){
    return new DatabaseAccess("ZizicN", "ZizicN", "PZI_ZizicN1"); 
}

class DatabaseAccess {
	private $_username;
	private $_password;
	private $_db;
	private $_connection;

	public function DatabaseAccess($db, $username, $password){
		$this->_db = $db;
		$this->_username = $username;
		$this->_password = $password;
	}

	public function executeSetQuery($query) /* UPDATE ili SET upit*/
	{
		
		$mysqli = new mysqli("localhost", $this->_username, $this->_password, $this->_db);

		if ($mysqli) 
		{
			$mysqli->query('SET character_set_results=utf8');
			$mysqli->query('SET character_set_client=utf8');
			$mysqli->query('SET names utf8');

			$queryResponse = $mysqli->query($query); 

			if(!$queryResponse)
			{
				$message  = 'Invalid query: ' . $mysqli->error . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
			}

			$resultItems = array();
		}
		else {
			die("Connection could not be established");
		}
	}

	public function executeQuery($query) // SELECT upit
	{
		
		$mysqli = new mysqli("localhost", $this->_username, $this->_password, $this->_db);

		if ($mysqli) 
		{
			$mysqli->query('SET character_set_results=utf8');
			$mysqli->query('SET character_set_client=utf8');
			$mysqli->query('SET names utf8');

			$queryResponse = $mysqli->query($query);

			if(!$queryResponse)
			{
				$message  = 'Invalid query: ' . $mysqli->error . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
			}

			$resultItems = array();

		   	while($item = $queryResponse->fetch_row())
			{
		   			$resultItems[] = $item;
		   	}

			return  $resultItems;
		}
		else {
			die("Connection could not be established");
		}
	}
	public function executeInsertQuery($query){ /* SAMO INSERT */

		$mysqli = new mysqli("localhost", $this->_username, $this->_password, $this->_db);

		if($mysqli)
		{
			$mysqli->query('SET character_set_results=utf8');
			$mysqli->query('SET character_set_client=utf8');
			$mysqli->query('SET names utf8');

			$queryResponse = $mysqli->query($query);

			if(!$queryResponse){
				$message  = 'Invalid query: ' . $mysqli->error . "\n";
				$message .= 'Whole query: ' . $query;
				die($message);
			}

			return $mysqli->insert_id;
		}
		else
		{
			die("Connection to DB could not be established");
		}
	}
}
