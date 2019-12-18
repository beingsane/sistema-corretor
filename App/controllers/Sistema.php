<?php

use \App\Core\Controller;
use \App\Auth;

class Sistema extends Controller {

	public function dashboard() {

		Auth::checkLogin();

		$proprietarios = $this->model('Proprietario');
		$listagem_proprietarios = $proprietarios->listarTodos();
		$contagem_proprietarios = count($listagem_proprietarios);
		
		$this->view('sistema/dashboard', $dados = ['contagem_proprietarios' => $contagem_proprietarios]);
	}
}