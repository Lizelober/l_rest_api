<?php
class Product {

	// database connection and table name
	private $conn;
	private $table_name = "products";

	// object properties
	public $id;
	public $name;
	public $description;
	public $price;

	// constructor with $db as database connection
	public function __construct($db) {
		$this->conn = $db;
	} //public function __construct($db)

	// create product
	function create() {

		$query = "INSERT INTO products (name,price,description) values ('$this->name','$this->price','$this->description')";
		// prepare query
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->name=htmlspecialchars(strip_tags($this->name));
		$this->price=htmlspecialchars(strip_tags($this->price));
		$this->description=htmlspecialchars(strip_tags($this->description));

		// execute query
		if ($stmt->execute()) {
			return true;
		} else {
			echo "<pre>";
				print_r($stmt->errorInfo());
			echo "</pre>";

			return false;
		} //if($stmt->execute())
	} //function create()

	// read products
	public function read() {

		// select all query
		$query = "SELECT  name, price, description FROM products";

		// prepare query statement
		
		$stmt = $this->conn->prepare($query);

		// execute query
		$stmt->execute();

		return $stmt;
	} //public function read()

	// update the product
	function update() {

		// update query
		$query = "UPDATE
					" . $this->table_name . "
				SET
					name = '$this->name',
					price = '$this->price',
					description = '$this->description'
				WHERE
					id = $this->id";

		// prepare query statement
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->name=htmlspecialchars(strip_tags($this->name));
		$this->price=htmlspecialchars(strip_tags($this->price));
		$this->description=htmlspecialchars(strip_tags($this->description));

		// execute the query
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		} //if($stmt->execute())
	} //function update()

	// delete the product
	function delete() {

		// delete query
		$query = "DELETE FROM " . $this->table_name . " WHERE id = $this->id";

		// prepare query
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->id=htmlspecialchars(strip_tags($this->id));

		// bind id of record to delete
		//$stmt->bindParam(1, $this->id);

		// execute query
		if ($stmt->execute()) {
			return true;
		} //if ($stmt->execute())

		return false;

	} //function delete()

} //class Product
?>
