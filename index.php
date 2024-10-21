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
                <div class="enlaces seccion">
                    <p> Es para los enlaces </p>
                </div>
                <div class="firma seccion">
                    <p>Es para la firma</p>
                </div>       
            </nav>
        </div>
        <h1> Bienvenidos </h1>
        <a href="productos.php">
            Ve a productos
        </a>
        <br /> 
        <a href="ventas.php">A ventas </a>

        <script>
            let num = 0; 

            setInterval(() => {
                const fechaContendor = document.getElementById("fecha");
                /** aqui se acomoda la fecha */ 
                const fechaHoy = new Date(); 
                const dia = fechaHoy.getDate().toString(); 
                const mes = (fechaHoy.getMonth() + 1).toString();
                const anio = fechaHoy.getFullYear().toString();
                const hora = fechaHoy.getHours().toString();
                const minutos = fechaHoy.getMinutes().toString();
                const fechaTotal = dia + '/' + mes + '/' + anio + ' ' + 
                                   hora + ':' + minutos;  
                       // `${dia}/${mes}/${anio} ${hora}:${minutos}`;
                fechaContendor.innerHTML = fechaTotal; 
            }, 500);    
        </script>
    </body>
</html>