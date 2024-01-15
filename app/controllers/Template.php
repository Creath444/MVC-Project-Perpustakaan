<?php 

class Template extends Controller
{
	
	public function header()
	{
		$header['title'] = 'nama';
		$this->header($header['title']);
		// echo $tampil;
	}

}