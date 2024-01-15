<?php 



class UserModel{
	private $table = 'user';
	private $db;


	public function __construct(){
		$this->db = new Database();
	}

	public function getAllUser(){
		$query = "SELECT * FROM ".$this->table;
		$this->db->query($query);
		return $this->db->resultSet();
	}
	public function cekUsername(){
		$username = $_POST['username'];
		$query = "SELECT * FROM ".$this->table." WHERE username=:username";
		$this->db->query($query);
		$this->db->bind('username',$username);
		return $this->db->single();
	}

	public function tambahUser($data){
		$query  = "INSERT INTO ".$this->table." (nama, username, password) VALUE (:nama,:username,:password)";
		$this->db->query($query);
		$this->db->bind('nama',$data['nama']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',md5($data['password']));
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function getUserById($id){
		$query = "SELECT * FROM ".$this->table." WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);

		return $this->db->single();
	}


	public function updateDataUser($data){
		//proses update nama
		if(empty($_POST['password'])){
			$query = "UPDATE ".$this->table. " SET nama=:nama WHERE id=:id";
			$this->db->query($query);
			$this->db->bind('id', $data['id']);
			$this->db->bind('nama', $data['nama']);

		//proses update 
		}else{
			$query = "UPDATE ".$this->table. " SET nama=:nama, password=:password WHERE id=:id";
			$this->db->query($query);
			$this->db->bind('id', $data['id']);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('password', md5($data['password']));

		}
		$this->db->execute();

		return $this->db->rowCount();

	}

	public function hapusUser($id){
		$query = "DELETE FROM ".$this->table." WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariUser(){
		$key = $_POST['key'];
		$query = "SELECT * FROM ".$this->table." WHERE nama LIKE :key";
		$this->db->query($query);
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
			
	}


}




