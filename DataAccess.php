<?php 
class DataAccess {

public $localhost;
public $user;
public $pass;
public $database;
public $mysqli;

//constructor de conexión
	 function DataAccess() {
	    $this->localhost = "localhost";
	    $this->user = "root";
	    $this->pass = "";
	    $this->database = "userdb";
	  }

//funcion de conexión 
	function connect_db(){
	$this->mysqli = new MySQLi($this->localhost, $this->user, $this->pass, $this->database);
			if ($this->mysqli -> connect_errno) {
				die( "Fallo la conexión a MySQL: (" . $this->mysqli -> mysqli_connect_errno() 
					. ") " . $this->mysqli -> mysqli_connect_error());
			}
	} 
}

?>