<?php
    if(!isset($opc))
        $opc = 0; 
?>
<html>
    <head>
        <title>Tienda x</title>
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body bgcolor="#928333">
        <div class="contenedor">
            <nav class="sidebar">
                <div class="seccion logo-contenedor">
                    <img src="images/logo_tienda.png" />
                    <div class="user-titulo">Luis Cobian</div>
                    <div class="rol-titulo">Administrador</div>
                    <div class="fecha-titulo" id="fecha">00/00/00 00:00</div>
                </div>
                <div class="seccion enlaces">
                    <a href="productos.php" class="enlace <?= $opc==1?'active':''?>">
                        <i class="fa-solid fa-barcode"></i>Productos</a>
                    <a href="productos.php" class="enlace <?= $opc==2?'active':''?>">
                        <i class="fa-solid fa-bag-shopping"></i>Ventas</a>
                    <a href="productos.php" class="enlace <?= $opc==3?'active':''?>">
                    <i class="fa-solid fa-chart-simple"></i>Reportes</a>
                </div>
                <div class="seccion enlaces">
                    <a href="productos.php" class="enlace">
                    <i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
                    <div class="firma"> Version 1.0.0 </div>
                    <div class="firma"> Luis Cobian </div>
                </div>       
            </nav>
            <div class="contenido">