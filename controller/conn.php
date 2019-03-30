<?php
class conn {
	private $host = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $database = 'taxi';

	public function conecta_mysql(){
		$con = mysqli_connect($this -> host, $this -> usuario, $this -> senha, $this -> database);
		mysqli_set_charset($con, 'utf8');

		if (mysqli_connect_errno()) {
			echo "Erro ao tentar conectar com o Banco de Dados MySQL". mysqli_connect_error();
		}
		return $con;
	}
}

?>