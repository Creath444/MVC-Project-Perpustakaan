<?php 



class Login extends Controller
{
	
	public function index()
	{
		$this->view('login/index');
	}

	public function processLogin(){
		if($user = $this->model('LoginModel')->checkLogin($_POST) > 0){
			$_SESSION['username'] 	= $user['username'];
			$_SESSION['nama'] 		= $user['nama'];
			$_SESSION['session_login'] 	= 'sudah_login';
			header('location: '.base_url.'/home');

		}else{
			Flasher::setMessage('Username / Password','salah.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}
	//function logout session
	public function logout(){
		session_start();
		session_destroy();
		header('location: '. base_url . '/login');
	}

	public function nameTag(){

		$user['user'] = $this->model('LoginModel')->getNameTag();

		$this->view('template/header',$user);
		$this->view('template/sidebar',$user);
		$this->view('template/footer',$user);
	}

}

