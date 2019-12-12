<?php

use \App\Core\Model;

class Proprietario extends Model {
    
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
}