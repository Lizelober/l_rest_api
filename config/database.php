<?php
class Database {

	// specify your own database credentials
	private $host = "ec2-54-145-249-177.compute-1.amazonaws.com";
	private $db_name = "dg3bkg2cj66jk";
	private $username = "sbxryxnsxvdprg";
	private $password = "2867b7c308da31284c9858ddfc98860e255b567894f823240fba05b3c686d483";
	public $conn;

	// get the database connection
	public function getConnection() {

		$this->conn = null;

		try {
			$this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->exec("set names 'utf8'");
		} catch (PDOException $exception) {
			echo "Connection error: " . $exception->getMessage();
		} //try

		return $this->conn;
	} //public function getConnection()
} //class Database
?>
