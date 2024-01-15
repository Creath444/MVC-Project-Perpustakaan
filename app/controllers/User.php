<?php 


class User extends Controller
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
		//title Halaman user
		$data['title'] = 'Halaman Pengguna';
		//Mengambil semua data user dari tabel user di database
		$data['user']  = $this->model('UserModel')->getAllUser();

		// $this->view('template/header',$data);
		// $this->view('template/sidebar',$data);
		$this->view('user/index',$data); //menampilkan index user
		// $this->view('template/footer',$data);
	}

	public function tambah(){
		//title halaman tambah user
		$data['title'] = 'Tambah User';

		$this->view('user/tambah',$data);//menampilkan tambah user
	}

	public function simpanUser(){
		//cek password apakah sama
		if($_POST['password'] == $_POST['ulangi_password']){
			//cek username apakah sudah pernah digunakan
			$cek = $this->model('UserModel')->cekUsername();
			if($cek['username'] == $_POST['username']){
				Flasher::setMessage('Gagal', 'Username yang anda masukan sudah pernah digunakan!!', 'danger');
				header('location:'.base_url.'/user/tambah');//redirect tambah user
				exit;
			}else{
				//from UserModel/tambahUser untuk melakukan proses tambah user
				if($this->model('UserModel')->tambahUser($_POST) > 0){
					Flasher::setMessage('Berhasil', 'ditambahkan', 'succses');
					header('location:'.base_url.'/user');//redirect ke user
					exit;
				}else{
					Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
					header('location:'.base_url.'/user');//redirect ke user
					exit;
				}
			}
		}else{
			Flasher::setMessage('Gagal', 'Password tidak sama', 'danger');
			header('location:'.base_url.'/user/tambah');//redirect ke user tambah
			exit;
		}
	}

	public function edit($id){
		//title halaman edit user
		$data['title'] = 'Edit User';
		//from UserModel/getUserById untuk melakukan proses get id
		$data['user'] = $this->model('UserModel')->getUserById($id);

		$this->view('user/edit',$data);//menampilkan edit user
	}

	
	public function updateUser(){
		//from UserModel/updateDataUser untuk melakukan proses update NAMA
		if(empty($_POST['password'])){
			if ($this->model('UserModel')->updateDataUser($_POST) > 0) {
				Flasher::setMessage('Berhasil', 'update nama', 'succses');
				header('location:'.base_url.'/user');//redirect ke user
				exit;
			}else{
				Flasher::setMessage('Gagal', 'tidak ada perubahan', 'danger');
				header('location:'.base_url.'/user');//redirect ke user
				exit;
			}

		//from UserModel/updateDataUser untuk melakukan proses update
		}else{
			if($_POST['password'] != $_POST['ulangi_password']){
				Flasher::setMessage('Gagal', 'Password tidak sama', 'danger');
				header('location:'.base_url.'/user');//redirect ke user tambah
				exit;
			}else{
				if($this->model('UserModel')->updateDataUser($_POST) > 0){
					Flasher::setMessage('Berhasil', 'diupdate', 'succses');
					header('location:'.base_url.'/user');//redirect ke user
					exit;
				}else{
					Flasher::setMessage('Gagal', 'diupdate atau password sama', 'danger');
					header('location:'.base_url.'/user');//redirect ke user tambah
					exit;
				}
			}
		}
	}

	public function hapus($id){
		//from UserModel/hapusData untuk melakukan proses hapus user
		if($this->model('UserModel')->hapusUser($id) > 0){
			Flasher::setMessage('Berhasil', 'dihapus', 'succses');
			header('location:'.base_url.'/user');//redirect ke user
			exit;
		}else{
			Flasher::setMessage('Gagal', 'dihapus', 'danger');
			header('location:'.base_url.'/user');//redirect ke user
			exit;
		}
	}

	public function cari(){
		$data['title'] = 'Halaman Pengguna';
		//Mengambil semua data user dari tabel user di database
		$data['user']  = $this->model('UserModel')->cariUser();
		$data['key'] = $_POST['key'];

		$this->view('user/index',$data); //menampilkan index user
	}
}

