<?php
session_start();

if (session_destroy()) {
	header('Location: ../logar.php');
} else {
	echo "Falha no Logout";
}

?>