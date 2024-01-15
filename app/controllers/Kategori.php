<?php 

class Kategori extends Controller{

	public function __construct(){
		if($_SESSION['session_login'] != 'sudah_login'){
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}
	
	public function index(){
		$data['title'] = 'Data Kategori';
		//from KategoriModel/getAllKategori untuk mengambil semua data di tabel kategori
		$data['kategori'] = $this->model('KategoriModel')->getAllKategori();

		$this->view('kategori/index', $data);//menampilkan index kategori
	}

	public function cari(){
		$data['title'] = 'Data Kategori';
		//from KategoriModel/cariKategori untuk mencari data berdasarkan key
		$data['kategori'] = $this->model('KategoriModel')->cariKategori();
		$data['key'] = $_POST['key'];

		$this->view('kategori/index', $data);//menampilkan bagian index kategori 
	}

	public function tambah(){
		$data['title'] = 'Tambah Kategori';

		$this->view('kategori/tambah', $data);//menampilkan bagian tambah kategori
	}

	public function simpanKategori(){
		//from KategoriModel/tambahKategori untuk melakukan proses simpan
		if($this->model('KategoriModel')->tambahKategori($_POST) > 0){
			Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
			header('location:'.base_url.'/kategori');//redirect index kategori
			exit;
		}else{
			Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
			header('location:'.base_url.'/kategori/tambah');//redirect tambah kategori
			exit;
		}
	}

	public function edit($id){
		$data['title'] = 'Detail Kategori';
		//from KategoriModel/getKategoriById untuk mengambil tabel kategori berdasarkan id
		$data['kategori'] = $this->model('KategoriModel')->getKategoriById($id);
		$this->view('kategori/edit', $data);//menampilkan edit kategori
	}

	public function updateData(){
		//from KategoriModel/editDataKategori untuk melakukan proses update 
		if($this->model('KategoriModel')->editDataKategori($_POST) > 0){
			Flasher::setMessage('Berhasil', 'diupdate', 'success');
			header('location:'.base_url.'/kategori');//redirect index kategori
			exit;
		}else{
			Flasher::setMessage('Gagal', 'diupdate', 'danger');
			header('location:'.base_url.'/kategori');//redirect index kategori
			exit;
		}
	}

	public function hapus($id){
		//from KategoriModel/hapusKategori berdasarkan id
		if ($this->model('KategoriModel')->hapusKategori($id) > 0 ) {
			Flasher::setMessage('Berhasil', 'dihapus', 'success');
			header('location:'.base_url.'/kategori');//redirect index kategori
			exit;
		}else{
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location:'.base_url.'/kategori');//redirect index kategori
			exit;
		}
	}
}
