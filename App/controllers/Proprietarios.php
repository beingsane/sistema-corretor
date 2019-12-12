<?php

use \App\Core\Controller;
use \App\Auth;

class Proprietarios extends Controller {

    public function listagem() {

        Auth::checkLogin();

        $proprietarios = $this->model('Proprietario');
        $dados = $proprietarios->listarTodos();

        $this->view('sistema/proprietarios/listagem', $dados = ['registros' => $dados]);
    }

    public function cadastro() {

        Auth::checkLogin();

        $this->view('/sistema/proprietarios/cadastro', $dados = []);
    }

}