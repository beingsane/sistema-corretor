<?php

use \App\Core\Controller;
use \App\Auth;

class Sistema extends Controller {

	public function dashboard() {

		Auth::checkLogin();
		
		$this->view('sistema/dashboard', $dados = []);
	}
}