<?php 

namespace App;

use App\Core\Model;

class Auth {
	
	public static function Login($email, $senha) {
		$sql = "SELECT * FROM usuarios WHERE email = ?";
		$stmt = Model::getConn()->prepare($sql);
		$stmt->bindValue(1, $email);
		$stmt->execute();

		if($stmt->rowCount() >= 1) {
			$resultado = $stmt->fetch(\PDO::FETCH_ASSOC);

			if(password_verify($senha, $resultado['senha'])) {
				$_SESSION['isLogado'] = true;
				$_SESSION['idUsuario'] = $resultado['id'];
				$_SESSION['nomeUsuario'] = $resultado['nome'];
				header('Location: /sistema/dashboard');
			} else {
				return "Senha inválida!";
			}

		} else {
			return "Email inválido";
		}
	}
	
	public static function Logout() {
		session_destroy();
		header('Location: /site/login');
	}
	
	public static function checkLogin() {
		if(!isset($_SESSION['isLogado'])) {
			header('Location: /site/login');
			die;
		}
	}

	public static function checkLoginTrue() {
		if(isset($_SESSION['isLogado'])) {
			header('Location: /sistema/dashboard');
			die;
		}
	}
}