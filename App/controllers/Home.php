<?php

use \App\Core\Controller;
use \App\Auth;

class Home extends Controller {

	public function index() {
		
		$this->view('site/index', $dados = []);
	}

	public function login() {

		Auth::checkLoginTrue();
		
		$mensagem = array();
		
		if(isset($_POST['login'])) {
			if(empty($_POST['email']) || empty($_POST['senha'])) {
				$mensagem[] = "O campo email e senha são obrigatórios!";
			} else {
				$email = $_POST['email'];
				$senha = $_POST['senha'];
				$mensagem[] = Auth::Login($email, $senha);
			}
	
		}
		
		$this->view('site/login', $dados = ['mensagem' => $mensagem]);
	}

	public function logout() {
		
		Auth::Logout();
	}
}
