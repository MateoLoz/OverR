<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OverRated</title>
    <link rel="stylesheet" href="style.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    


<link href="https://cdn.tailwindcss.com" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="main">
    
    <section class="layout">
        <div class="header">
        <div class="fixed-top">

      <body  style="background: #edf2f7;"> 
         <body class="bg-blue-500">
	<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
		<a class="text-3xl font-bold leading-none" href="#">
		<label class="logo"> <img  src="https://i.ibb.co/vVVLK5H/logo.png" alt="" width="200px" height="75px"></label>
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-blue-600 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<div class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<a class="text-md text-black-600 hover:text-gray-500" href="OverRated.php">Home</a>
			<a class="text-md text-black-600 hover:text-gray-500" href="#">Sobre nosotros</a>
			<a class="text-md text-black-600 hover:text-gray-500" href="#">Buscar</a>

          <a class="text-md text-black-600 hover:text-gray-500" href="mostrarcarrito.php" > Carrito(<?php
            echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                 ?>)</a></a>
			
        </div>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="iniciosesion.php">Inicio</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-red-500 hover:bg-red-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Registrate</a>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
				<label class="logo"> <img  src="https://i.ibb.co/vVVLK5H/logo.png" alt="" width="200px" height="75px"></label>
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
                        <div class="carrito">
						<a class="block p-4 text-md font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="mostrarcarrito.php"> Carrito(<?php
            echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
                 ?>)</a></a></a>
                        </div>
					</li>
					<br>
					<li class="mb-1">
						<a class="block p-4 text-md font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Buscar</a>
					</li>
					<br>
					<li class="mb-1">
						<a class="block p-4 text-md font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="OverRated.php">Home</a>
					</li>
					<br>
					<li class="mb-1">
						<a class="block p-4 text-md font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Sobre nosotros</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-sm text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="iniciosesion.php">Inicio</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-sm text-center text-white font-semibold bg-red-500 hover:bg-red-600  rounded-xl" href="#">Registrate</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>OverRated</span>
				</p>
			</div>
		</nav>
	</div>
</body>

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>
</body>
</div>




        </div>

        <div class="leftSide"></div>


        <div class="body">



