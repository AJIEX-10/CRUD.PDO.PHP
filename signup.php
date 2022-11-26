<?php

require_once('database.php');

class People {
	private $id;
	private $name;
	private $surname;
	private $birthday;
	private $gender;
	private $city;
	protected $db_connect;


	public function __construct($id = 0, $surname = '', $name = '', $birthday = '', $gender = '', $city = '') {
		$this->id = $id;
		$this->surname = $surname;
		$this->name = $name;
		$this->birthday = $birthday;
		$this->gender = $gender;
		$this->city = $city;
		$this->db_connect = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
	}

	public function setID($id){
		$this->id = $id;
	}

	public function getID(){
		return $this->id;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getSurname(){
		return $this->surname;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setBirthday($birthday){
		$this->birthday = $birthday;
	}

	public function getBirthday(){
		return $this->birthday;
	}

	public function setGender($gender){
		$this->gender = $gender;
	}

	public function getGender(){
		return $this->gender;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function getCity(){
		return $this->city;
	}

	public function insertData(){
		try{
			$stm = $this->db_connect->prepare("INSERT INTO люди(name, surname, birthday, gender, city) values(?, ?, ?, ?, ?)");
			$stm->execute([$this->name, $this->surname, $this->birthday, $this->gender, $this->city]);
			echo "<script>alert('data Saved successfully') ;document.location='alldata.php'</script>";
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function fetchAll(){
		try{
			$stm = $this->db_connect->prepare("SELECT * FROM люди");
			$stm->execute();
			return $stm->fetchAll();
		}
		catch(Exception $e){
			return $e->getMessage();
		}	
	}

	public function fetchOne(){
		try{
			$stm = $this->db_connect->prepare("SELECT * FROM люди WHERE id = ?");
			$stm->execute([$this->id]);
			return $stm->fetchAll();
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}
	
	public function update(){
		try{
			$stm = $this->db_connect->prepare("UPDATE люди SET name= ?, surname = ?, birthday = ?, gender = ?, city = ? WHERE id= ?");
			$stm->execute([$this->name, $this->surname, $this->birthday, $this->gender, $this->city, $this->id]);
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}

	public function delete(){
		try{
			$stm = $this->db_connect->prepare("DELETE FROM люди WHERE id=?");
			$stm->execute([$this->id]);
			return $stm->fetchAll();
			echo "<script>alert('data Deleted successfully') ;document.location='alldata.php'</script>";
		}
		catch(Exception $e){
			return $e->getMessage();
		}
	}
}
