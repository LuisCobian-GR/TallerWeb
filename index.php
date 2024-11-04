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
                    <a href="productos.php" class="enlace active">
                        <i class="fa-solid fa-barcode"></i>Productos</a>
                    <a href="productos.php" class="enlace">
                        <i class="fa-solid fa-bag-shopping"></i>Ventas</a>
                    <a href="productos.php" class="enlace">
                    <i class="fa-solid fa-chart-simple"></i>Reportes</a>
                </div>
                <div class="seccion enlaces">
                    <a href="productos.php" class="enlace">
                    <i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>
                    <div class="firma"> Version 1.0.0 </div>
                    <div class="firma"> Luis Cobian </div>
                </div>       
            </nav>
        </div>
        <h1> Bienvenidos </h1>
        <script src="https://kit.fontawesome.com/dfc17848b1.js" crossorigin="anonymous"></script>
        <script>
            let num = 0; 

            setInterval(() => {
                let f =0 ;
                var k =0; 
                const fechaContendor = document.getElementById("fecha");
                /** aqui se acomoda la fecha */ 
                const fechaHoy = new Date(); 
                const dia = fechaHoy.getDate().toString().padStart(2,'0'); 
                const mes = (fechaHoy.getMonth() + 1).toString().padStart(2,'0');
                const anio = fechaHoy.getFullYear().toString();
                const hora = fechaHoy.getHours().toString().padStart(2,'0');
                const minutos = fechaHoy.getMinutes().toString().padStart(2,'0');;
                const fechaTotal = dia + '/' + mes + '/' + anio + ' ' + 
                                   hora + ':' + minutos;  
                       // `${dia}/${mes}/${anio} ${hora}:${minutos}`;
                fechaContendor.innerHTML = fechaTotal; 
            }, 500);    
        </script>
    </body>
</html>