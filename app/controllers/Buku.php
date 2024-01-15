<?php 

class Buku extends Controller
{

	public function __construct(){
		if($_SESSION['session_login'] != 'sudah_login'){
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}
	
	public function index()
	{
		$data['title'] = 'Data Buku';
		// from BukuModel/getAllBuku untuk mengambil data Buku di tabel buku
		$data['buku'] = $this->model('BukuModel')->getAllBuku();

		$this->view('buku/index', $data); //menampilkan bagian tampilan buku

	}

	public function tambah(){
		$data['title'] = 'Tambah Buku';
		// from KategoriModel/getAllKategori untuk mengambil data kategori di tabel kategori
		$data['kategori'] = $this->model("KategoriModel")->getAllKategori();
		
		$this->view('buku/tambah', $data); //menampilkan bagian tampilan tambah

	}

	public function simpanBuku(){
		//from BukuModel/tambahBuku untuk melakukan proses simpan
		if($this->model('BukuModel')->tambahBuku($_POST) > 0){
			// from Model Flasher.php
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location:'.base_url.'/buku');
			exit;
		}else{
			// from Model Flasher.php
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location:'.base_url.'/buku/tambah');
			exit;
		}
	}

	public function edit($id){
		$data['title'] = 'Edit Buku';
		// from KategoriModel/getAllKategori untuk mengambil data kategori di tabel kategori
		$data['kategori'] = $this->model("KategoriModel")->getAllKategori();
		// from BukuModel/getBukuById untuk mengambil data buku di table buku berdasarkan id
		$data['buku'] = $this->model("BukuModel")->getBukuById($id);
	
		$this->view('buku/edit', $data);
	}

	public function updateBuku(){
		//from BukuModel/editDataBuku untuk melakukan proses Update 
		if($this->model('BukuModel')->editDataBuku($_POST) > 0){
			// from Model Flasher.php
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location:'.base_url.'/buku');//redirect ke tampilan index buku
			exit;
		}else{
			// from Model Flasher.php
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location:'.base_url.'/buku');//redirect ke tampilan index buku
			exit;
		}
	}

	public function hapus($id){
		// from BukuModel/hapusBuku untuk melakukan proses hapus berdasarkan id
		if ($this->model('BukuModel')->hapusBuku($id) > 0 ) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location:'.base_url.'/buku');//redirect ke tampilan index buku
			exit;
		}else{
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location:'.base_url.'/buku');//redirect ke tampilan index buku
			exit;
		}

	}

	public function cari()
	{
		$data['title'] = 'Data Buku';
		// from BukuModel/cariBuku untuk mencari data berdasarkan key
		$data['buku'] = $this->model('BukuModel')->cariBuku();
		// mengirimkan key ke data index
		$data['key'] = $_POST['key'];
		
		$this->view('buku/index', $data);
	}

}