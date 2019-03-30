<?php
session_start();
require_once('conn.php');

$email = $_POST['inputEmail'];
$senha = md5($_POST['inputSenha']);

$objdb = new conn();
$link = $objdb -> conecta_mysql();

$valida = FALSE;

$sql = "SELECT nome, email, senha FROM usuarios WHERE email = '$email' ";
$dados_usuario = mysqli_query($link, $sql);

while ($user = $dados_usuario -> fetch_array(MYSQLI_ASSOC)) {
	$row_user[] = $user;
}

foreach ($row_user as $user) {
	echo $user['email'];
	echo $user['senha'];
	echo $user['nome'];
}

if($email == $user['email'] && $senha == $user['senha']) {
	$valida = TRUE;
}

if ($valida) {
	$_SESSION['logado'] = TRUE;
	$_SESSION['email'] = $email;
	$_SESSION['nome'] = $user['nome'];
	header('Location: ../home.php');
} else {
	header('Location: ../logar.php');
}
?>