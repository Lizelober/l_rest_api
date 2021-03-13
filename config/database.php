<?php
class Database{

	// specify your own database credentials
	private $host = "ec2-52-6-178-202.compute-1.amazonaws.com";
	private $db_name = "d6m03tveq0t8v6";
	private $username = "eoxmzcknpfdiin";
	private $password = "58ffbd24c12428a3976a06223d15744db8ea7ea3f60ec25e8c7c71d86c72f258";
	public $conn;

	// get the database connection
	public function getConnection(){

		$this->conn = null;

		try{
			$this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->exec("set names utf8");
		}catch(PDOException $exception){
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
}
?>
