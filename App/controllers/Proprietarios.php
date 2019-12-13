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

        $mensagem = array();

        $this->view('/sistema/proprietarios/cadastro', $dados = ['mensagem' => $mensagem]);
    }

    public function detalhes($id) {

        Auth::checkLogin();

        $proprietario = $this->model('Proprietario');
        
        $dados = $proprietario->listarUm($id);

        $this->view('/sistema/proprietarios/detalhes', $dados);
    }

    public function salvar() {

        Auth::checkLogin();

        if(empty($_POST['nome'])) {
            $mensagem[] = "O campo nome não pode ser em branco!";
        } else if(empty($_POST['sobrenome'])) {
            $mensagem[] = "O campo sobrenome não pode ser em branco!";
        } else if(empty($_POST['cpf'])) {
            $mensagem[] = "O campo cpf não pode ser em branco!";
        } else if(empty($_POST['telefone'])) {
            $mensagem[] = "O campo telefone não pode ser em branco!";
        } else if(empty($_POST['estado'])) {
            $mensagem[] = "O campo estado não pode ser em branco!";
        } else if(empty($_POST['cidade'])) {
            $mensagem[] = "O campo cidade não pode ser em branco!";
        } else if(empty($_POST['endereco'])) {
            $mensagem[] = "O campo endereco não pode ser em branco!";
        } else if(empty($_POST['bairro'])) {
            $mensagem[] = "O campo bairro não pode ser em branco!";
        } else if(empty($_POST['numero'])) {
            $mensagem[] = "O campo numero não pode ser em branco!";
        } else {
            $proprietario = $this->model('Proprietario');

            $proprietario->nome =           $_POST['nome'];
            $proprietario->sobrenome =      $_POST['sobrenome'];
            $proprietario->cpf =            $_POST['cpf'];
            $proprietario->telefone =       $_POST['telefone'];
            $proprietario->telefone2 =      $_POST['telefone2'];
            $proprietario->email =          $_POST['email'];
            $proprietario->estado =         $_POST['estado'];
            $proprietario->cidade =         $_POST['cidade'];
            $proprietario->endereco =       $_POST['endereco'];
            $proprietario->bairro =         $_POST['bairro'];
            $proprietario->numero =         $_POST['numero'];

            $mensagem[] = $proprietario->cadastrar();

            $registros = $proprietario->listarTodos();
        }

        $this->view('/sistema/proprietarios/listagem', $dados = ['mensagem' => $mensagem, 'registros' => $registros]);
    }

    public function deletar($id) {

        Auth::checkLogin();

        $mensagem = array();

        $proprietario = $this->model('Proprietario');

        $mensagem[] = $proprietario->deletar($id);

        $dados = $proprietario->listarTodos();

        $this->view('/sistema/proprietarios/listagem', $dados = ['mensagem' => $mensagem, 'registros' => $dados]);
    }

    public function editar($id) {

        Auth::checkLogin();

        $proprietario = $this->model("Proprietario");
        $dados = $proprietario->listarUm($id);

        $this->view('/sistema/proprietarios/edicao', $dados);
    }

    public function atualizar($id) {

        Auth::checkLogin();

        $mensagem = array();

        if(empty($_POST['nome'])) {
            $mensagem[] = "O campo nome não pode ser em branco!";
        } else if(empty($_POST['sobrenome'])) {
            $mensagem[] = "O campo sobrenome não pode ser em branco!";
        } else if(empty($_POST['cpf'])) {
            $mensagem[] = "O campo cpf não pode ser em branco!";
        } else if(empty($_POST['telefone'])) {
            $mensagem[] = "O campo telefone não pode ser em branco!";
        } else if(empty($_POST['estado'])) {
            $mensagem[] = "O campo estado não pode ser em branco!";
        } else if(empty($_POST['cidade'])) {
            $mensagem[] = "O campo cidade não pode ser em branco!";
        } else if(empty($_POST['endereco'])) {
            $mensagem[] = "O campo endereco não pode ser em branco!";
        } else if(empty($_POST['bairro'])) {
            $mensagem[] = "O campo bairro não pode ser em branco!";
        } else if(empty($_POST['numero'])) {
            $mensagem[] = "O campo numero não pode ser em branco!";
        } else {
            $proprietario = $this->model('Proprietario');

            $proprietario->nome         =   $_POST['nome'];
            $proprietario->sobrenome    =   $_POST['sobrenome'];
            $proprietario->cpf          =   $_POST['cpf'];
            $proprietario->telefone     =   $_POST['telefone'];
            $proprietario->telefone2    =   $_POST['telefone2'];
            $proprietario->email        =   $_POST['email'];
            $proprietario->estado       =   $_POST['estado'];
            $proprietario->cidade       =   $_POST['cidade'];
            $proprietario->endereco     =   $_POST['endereco'];
            $proprietario->bairro       =   $_POST['bairro'];
            $proprietario->numero       =   $_POST['numero'];

            $mensagem[] = $proprietario->atualizar($id);

            $registros = $proprietario->listarTodos();
        }

        $this->view('/sistema/proprietarios/listagem', $dados = ['mensagem' => $mensagem, 'registros' => $registros]);
    }

}