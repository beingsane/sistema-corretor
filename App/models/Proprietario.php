<?php

use \App\Core\Model;

class Proprietario extends Model {

    public $nome;
    public $sobrenome;
    public $cpf;
    public $telefone;
    public $telefone2;
    public $email;
    public $estado;
    public $cidade;
    public $endereco;
    public $bairro;
    public $numero;
    
    public function listarTodos() {
        $sql = "SELECT * FROM proprietarios";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function listarUm($id) {
        $sql = "SELECT * FROM proprietarios WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function cadastrar() {
        $sql = "INSERT INTO proprietarios (nome, sobrenome, cpf, telefone, telefone2, email, estado, cidade, endereco,
        bairro, numero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = Model::getConn()->prepare($sql);

        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->sobrenome);
        $stmt->bindValue(3, $this->cpf);
        $stmt->bindValue(4, $this->telefone);
        $stmt->bindValue(5, $this->telefone2);
        $stmt->bindValue(6, $this->email);
        $stmt->bindValue(7, $this->estado);
        $stmt->bindValue(8, $this->cidade);
        $stmt->bindValue(9, $this->endereco);
        $stmt->bindValue(10, $this->bairro);
        $stmt->bindValue(11, $this->numero);

        if($stmt->execute()) {
            return "Cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar";
        }
    }

    public function deletar($id) {
        $sql = "DELETE FROM proprietarios WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        if($stmt->execute()) {
            return 'Excluído com sucesso!';
        } else {
            return 'Erro ao excluir!';
        }
    }

    public function atualizar($id) {
        $sql = "UPDATE proprietarios SET nome = ?, sobrenome = ?, cpf = ?, telefone = ?, telefone2 = ?, email = ?, 
        estado = ?, cidade = ?, endereco = ?, bairro = ?, numero = ? WHERE id = ?";

        $stmt = Model::getConn()->prepare($sql);

        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->sobrenome);
        $stmt->bindValue(3, $this->cpf);
        $stmt->bindValue(4, $this->telefone);
        $stmt->bindValue(5, $this->telefone2);
        $stmt->bindValue(6, $this->email);
        $stmt->bindValue(7, $this->estado);
        $stmt->bindValue(8, $this->cidade);
        $stmt->bindValue(9, $this->endereco);
        $stmt->bindValue(10, $this->bairro);
        $stmt->bindValue(11, $this->numero);
        $stmt->bindValue(12, $id);

        if($stmt->execute()) {
            return 'Atualizado com sucesso!';
        } else {
            return 'Erro ao atualizar';
        }
    }
}