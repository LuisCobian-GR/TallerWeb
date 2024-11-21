<?php
    require('scripts/Conexion.php');
    require('scripts/DaoProducto.php'); 
    $con = new Conexion(); 
    $dao = new DaoProducto($con->obtenerConexion());
    $R = $dao->buscarTodos();  
    $filas = $R['filas']; 
    $datos = $R['datos']; 
    $opc = 1; 
    include("encabezado.php");
?>

    <h1> Catalogo de productos </h1>
    
    <div class="productos_contenedor">
        <!-- Titulo de mini ventana -->
        <div class="titulo">
            <h3>Inventario </h3>
        </div>
        <!-- Van los productos --> 
         <div class="productos_catalogo">
         <?php
        foreach($datos as $producto){
           ?>
                 <div class="producto"> 
                    <div class="img">
                        <img src="images/logo_tienda.png" />
                    </div>
                    <h3> <?= $producto['nombre'] ?> </h3>
                    <h4> <?= $producto['categoria'] ?> </h4>
                    <p> <?= $producto['precio'] ?> </p>
                 </div>
                <?php 
                }
            ?> 
         </div>


    </div>

    <a href="index.php"> regresar </a>  
    <br> <br/> <!-- Aqui me permita mandar a productos --> 
    <a href="agregar_producto.php">Agregar producto</a>
    <br ><br> 
    

<?php 
    include("piepagina.php"); 
?>