<?php
class Category {

	// database connection and table name
	private $conn;
	private $table_name = "categories";

	// object properties
	public $id;
	public $name;
	public $description;
	public $created;

	public function __construct($db) {
		$this->conn = $db;
	} //public function __construct($db)

	public function update() {

		// update the category
		$query = "UPDATE " . $this->table_name . "
				SET name = :name, description = :description
				WHERE id = :id";

		// prepare query statement
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->name=htmlspecialchars(strip_tags($this->name));
		$this->description=htmlspecialchars(strip_tags($this->description));
		$this->id=htmlspecialchars(strip_tags($this->id));

		// bind values
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':description', $this->description);
		$stmt->bindParam(':id', $this->id);

		// execute the query
		if ($stmt->execute()) {
			return true;
		} //if($stmt->execute())

		return false;
	} //public function update()

	public function delete() {
		// delete query
		$query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

		// prepare query statement
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->id=htmlspecialchars(strip_tags($this->id));

		// bind record id
		$stmt->bindParam(1, $this->id);

		// execute the query
		if ($stmt->execute()) {
			return true;
		} //if($stmt->execute())

		return false;
	} //public function delete()

	public function create() {
		// create the category
		// insert query
		// $query = "INSERT INTO categories
		// 		SET name = ?, description = ?, created = ?";

		$query = "INSERT INTO
		" . $this->table_name . "
		('$_POST[name]','$_POST[description]','$_POST[created]')";

		// prepare query statement
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->name=htmlspecialchars(strip_tags($this->name));
		$this->description=htmlspecialchars(strip_tags($this->description));
		$this->created=htmlspecialchars(strip_tags($this->created));

		// bind values
		$stmt->bindParam(1, $this->name);
		$stmt->bindParam(2, $this->description);
		$stmt->bindParam(3, $this->created);

		// execute query
		if ($stmt->execute()) {
			return true;
		} //if($stmt->execute())

		return false;
	} //public function create()

	// used by select drop-down list
	public function read() {

		//select all data
		$query = "SELECT
					id, name, description
				FROM
					" . $this->table_name . "
				ORDER BY
					name";

		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	} //public function read()
} //class Category
?>
