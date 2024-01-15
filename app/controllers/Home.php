<?php 

class Home extends Controller{

	public function index(){
		//menampilkan ke bagian home
		$data['title'] = 'Halaman Home';

		$this->view('home/index',$data);//menampilkan index kategori
	}


}