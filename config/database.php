<?php
class Database{

	// specify your own database credentials
	private $host = "ec2-54-159-175-113.compute-1.amazonaws.com";
	private $db_name = "d4c2023pgipanb";
	private $username = "zeeptopmcapcdy";
	private $password = "eccab3821558b84ff8dae5cb97c54b167f14c35c7601e25b9794667fd19eb255";
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
