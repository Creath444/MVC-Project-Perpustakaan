<?php 


class Database{

	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $connection;//koneksi database
	private $stmt;//query database

	//function utama koneksi database
	public function __construct(){
		$dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname;

		$option=[
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];
		
		try{
			$this->connection = new PDO($dsn, $this->user, $this->pass, $option);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	//function untuk mengambil query dari database
	public function query($query){
		$this->stmt = $this->connection->prepare($query);
	}

	//function melakukan binding terhadap value yang akan dimasukan
	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
				break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
				break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
				break;
				default:
					$type = PDO::PARAM_STR;
				break;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	//function untuk melakukan eksekusi 
	public function execute(){
		$this->stmt->execute();
	}
	//function untuk menampilkan semua data dari table
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	//function untuk menampilkan data dari table berdasarkan value
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	//function untuk melakukan proses
	public function rowCount(){
		return $this->stmt->rowCount();
	}

}
