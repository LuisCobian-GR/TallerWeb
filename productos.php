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

    <a href="index.php"> regresar </a>  
    <br> <br/> <!-- Aqui me permita mandar a productos --> 
    <a href="agregar_producto.php">Agregar producto</a>
    <br ><br> 
    <?php
        foreach($datos as $producto){
           ?>
                 <div> 
                    <img src="images/logo_tienda.png" />
                    <br>
                    <h3> <?= $producto['nombre'] ?> </h3>
                    <h4> <?= $producto['categoria'] ?> </h4>
                    <p> <?= $producto['precio'] ?> </p>
                 </div>
           <?php 
        }
    ?> 

<?php 
    include("piepagina.php"); 
?>