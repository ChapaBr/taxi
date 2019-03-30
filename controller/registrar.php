<?php
require_once('conn.php');

$nome = $_POST['inputName'];
$sobrenome = $_POST['inputFullName'];
$email = $_POST['inputEmail'];
$senha = md5($_POST['inputSenha']);
$confirmar_senha = md5($_POST['inputConfirmarSenha']);

$objdb = new conn();
$link = $objdb -> conecta_mysql();

// $email_existe = false;

// $sql = " select * from usuarios where email = '$email' ";
// 	if($resultado_id = mysqli_query($link, $sql)) {

// 		$dados_usuario = mysqli_fetch_array($resultado_id);

// 		if(isset($dados_usuario['email'])){
// 			$email_existe = true;
// 		} 
// 	} else {
// 		echo 'Erro ao tentar localizar o registro de email';
// 	}

// 		if($email_existe){
// 			$retorno_get.= "erro_email=1&";
// 		header('Location: registrar.php?'.$retorno_get);
// 		die();	
// 		}
// 		$retorno_get = '';

$sql = "SELECT * FORM usuarios WHERE email = '$email' ";
	if (mysqli_query($link, $sql)) {
		echo "Email Já cadastrado";
	} else {
		$sql = " insert into usuarios(nome, sobrenome, email, senha, confirmar_senha) values ('$nome', '$sobrenome', '$email', '$senha', '$confirmar_senha') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo 'Usuário registrado com sucesso!';
	} else {
		echo 'Erro ao registrar o usuário!';
	}
	}

?>