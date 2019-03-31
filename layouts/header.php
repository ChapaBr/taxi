<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fi=no">
	<title>Taxi</title>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="libs/bootstrap-4.3.1-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon icon-header"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="assets/images/logo.svg" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="assets/images/logo.svg" width="30" height="30" alt="CoreUI Logo">
      </a>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle" style="font-size: 30px;"></i>
            <!-- <img class="img-avatar" src="img/avatars/6.jpg" alt="admin@bootstrapmaster.com"> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right lateral">
            <div class="dropdown-header text-center">
              <strong>Opções</strong>
            </div>
            <a class="dropdown-item" href="perfil.php">
              <i class="fa fa-user"></i> Perfil
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Configurações
            </a>
            <a class="dropdown-item" href="controller/sair.php">
              <i class="fa fa-lock"></i> Sair
            </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
  <div class="app-body">
	