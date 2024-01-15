<?php 

//class untuk mengatur App
class Controller{

	public function header($header = []){
		$header['title'] = 'nama'; //index dari var ini 
		require_once '../app/views/template/header.php';
	}


	public function sidebar(){
		require_once '../app/views/template/sidebar.php';
	}

	public function footer(){
		require_once '../app/views/template/footer.php';
	}
	
	//function view untuk mengatur jalannya tampilan
	public function view($view, $data){//$data akan ditampilkan ke html
		$this->header();
		$this->sidebar();
		require_once '../app/views/'.$view.'.php';
		$this->footer();
	}

	//function model untuk mengatur jalannya model
	public function model($model){
		require_once '../app/models/'.$model.'.php';
		return new $model;
	}

}