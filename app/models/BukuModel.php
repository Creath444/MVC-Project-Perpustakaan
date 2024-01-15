<?php 


class BukuModel{

	private $table 	= 'buku';
	private $db;


	public function __construct(){
		$this->db = new Database();
	}

	public function getAllBuku(){
		//mengambil semua data buku serta data nama_kategori di tabel kategori
		//join tabel kategori dan buku
		//kategori.id = buku.kategori_id
		$this->db->query("SELECT buku.*, kategori.nama_kategori FROM  
			$this->table JOIN kategori ON kategori.id = buku.kategori_id");
		$joinbuku = $this->db->resultSet();
		return $joinbuku;
	}

	public function getBukuById($id){
		//mengambil semua data di tabel buku berdasarkan id
		$query = "SELECT * FROM ".$this->table." WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahBuku($data){
		//memasukan data ke tabel buku
		$query = "INSERT INTO ".$this->table."(judul,penerbit,pengarang,tahun,kategori_id,harga) 
		VALUES (:judul,:penerbit,:pengarang,:tahun,:kategori_id,:harga)";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);
		$this->db->bind('pengarang', $data['pengarang']);
		$this->db->bind('tahun', $data['tahun']);
		$this->db->bind('kategori_id', $data['kategori_id']);
		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCount();
	}


	public function editDataBuku($data){
		//update data ke tabel buku
		$query = 'UPDATE '. $this->table .' SET judul=:judul, penerbit=:penerbit, pengarang=:pengarang, tahun=:tahun, kategori_id=:kategori_id, harga=:harga WHERE id=:id';

		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);
		$this->db->bind('pengarang', $data['pengarang']);
		$this->db->bind('tahun', $data['tahun']);
		$this->db->bind('kategori_id', $data['kategori_id']);
		$this->db->bind('harga', $data['harga']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusBuku($id){
		//Delete From table berdasarkan id
		$query = 'DELETE FROM ' . $this->table . ' WHERE id=:id';
		$this->db->query($query);
		$this->db->bind('id',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariBuku()
	{
		$key = $_POST['key'];
		$query = "SELECT buku.*, kategori.nama_kategori FROM ". $this->table ." JOIN kategori ON kategori.id = buku.kategori_id WHERE judul LIKE :key";
		$this->db->query($query);
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}

}