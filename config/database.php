<?php
class Database{

	// specify your own database credentials
	private $host = "ec2-18-204-101-137.compute-1.amazonaws.com";
	private $db_name = "d2r9rir3q2h9sg";
	private $username = "zsqjqfcztioxxj";
	private $password = "21cb28a4388ee66365ac2da4a52f66c021de78d6ca05195b2de1703e8c65ea0d";
	public $conn;

	// get the database connection
	public function getConnection(){

		$this->conn = null;

		try{
			$this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->exec("set names 'utf8'");
		}catch(PDOException $exception){
			echo "Connection error: " . $exception->getMessage();
		}

		return $this->conn;
	}
}
?>
