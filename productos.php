<?php
    require('scripts/Conexion.php');
    require('scripts/DaoProducto.php'); 
    $con = new Conexion(); 
    $dao = new DaoProducto($con->obtenerConexion());
    $R = $dao->buscarTodos();  
    print_r($R)
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <a href="index.php"> regresar </a>  
    <br> <br/> <!-- Aqui me permita mandar a productos --> 
    <a href="agregar_producto.php">Agregar producto</a> 
</body>
</html>