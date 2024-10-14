<!DOCTYPE html>
<head>
    <title>Agregar producto</title>
</head>
<body>
    <h1>Nuevo Producto </h1>
    <form action="guardar.php" method="get">
        <label>Codigo: </label>
        <input type="text" name="codigo" />
        <br><br> 
        <label>Nombre: </label>
        <input type="text" name="nombre" />
        <br> <br> 
        <label>Categoria: </label>
        <input type="text" name="categoria" />
        <br><br> 
        <label>Precio: </label>
        <input type="number" name="precio"/>
        <br><br> 
        <button type="submit">Guardar</button>
    </form>
</body>
</html>