<!DOCTYPE html>
<head>

	<!--- basic page needs
	================================================== -->
	<meta charset="utf-8">
	<title>CDMET</title>

	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="./assets/bootstrap-4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome/css/fontawesome-all.css"/>
	<link rel="stylesheet" type="text/css" href="./assets/Datatable/datatables.min.css"/>
	<link rel="stylesheet" type="text/css" href='./assets/FullCalendar/lib/main.css' />
	<link rel="stylesheet" type="text/css" href='./assets/FullCalendar/lib/main.min.css' />
	
	<!-- JS
	================================================== -->
	<script src="./assets/js/jquery-3.2.1.min.js"></script>
	<script src="./assets/js/plugins.js"></script>
	<script src="./assets/js/main.js"></script>
	<script src="./assets/bootstrap-4.5.2/js/bootstrap.min.js"></script>
	<script src="./assets/Datatable/datatables.min.js"></script>
    <script src='./assets/FullCalendar/lib/main.js'></script>
    <script src='./assets/FullCalendar/lib/main.min.js'></script>

	<!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">

</head>
<body>
<img class="banner" src="./assets/img/banner.png"  alt="">
<nav class="navbar navbar-expand-lg orange">
	<button class="navbar-toggler justify-content-end" type="button" data-toggle="collapse" data-target="#NavbarHome" aria-controls="NavbarHome" aria-expanded="false" aria-label="Toggle navigation">
		<span class="fas fa-align-justify"></span> Menú
	</button>
	<div class="collapse navbar-collapse" id="NavbarHome">
		<ul class="navbar-nav justify-content-center mr-auto">
			
			<li class="nav-item">
				<a class="nav-link" href="./Home">Dashboard</a>
			</li>
			<div class="dropdown-divider"></div>
			<li class="nav-item">
				<a class="nav-link" href="./SignUp">Modificar Datos Personales</a>
			</li>
			<div class="dropdown-divider"></div>
			<li class="nav-item">
				<a class="nav-link" href="./ProductiveStage">Revisión de Bitácoras</a>
			</li>
            <div class="dropdown-divider"></div>
			<li class="nav-item">
                <a class="btn btn-block green" href="./Auth/logout">Cerrar Sesión</a>
			</li>
		</ul>
	</div>
	
</nav>
