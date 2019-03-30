<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != TRUE) {
	header('Location: index.php');
}  else {
	require_once('layouts/header.php');
}
?>
	<?php include_once('layouts/sidebar.php'); ?>
	<main class="main">
  </main>


<?php
require_once('layouts/footer.php')
?>