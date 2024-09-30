<!DOCTYPE html>
<html lang="UTF-8">
<head>
<title> Tienda de Ropa </title>

<style>

</style>
</head>
<body>
<!-- Formulario para ingresar datos -->
 <h2> Tienda de ropa</h2>
<form action="" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="" id="nombre" name="nombre" required>
    <br><br>

    <!-- Selección de categoría -->
    <label for="categoria">Categoria:</label>
    <select type="" id="categoria" name="categoria" required>
        <option value="Electronica">Electronica</option>
        <option value="Ropa">Ropa</option>
        <option value="Alimentos">Electronica</option>
    </select>
    <br><br>

    <!-- Cantidad -->
    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" min="1" required>
    <br><br>

    <!-- Checkbox para aplicar descuento -->
    <label for="descuento">Aplicar 10% Descuento</label>
    <input type="checkbox" id="descuento" name="descuento">

    <!-- Botón para enviar el formulario -->
    <button type="submit" name="Enviar" >Enviar</button>
</form>
<?php

//usamos isset para diferenciar si la variable que hay dentro
// existe en cuyo caso te la devuelve, si no, se la salta.

if (isset($_POST['Enviar'])) {

    // Mostrar resultados
    echo"<h3> Cesta </h3>";

    echo "<br>".("Nombre: ".$_POST['nombre']);
    echo "<br>".("Categoria: ".$_POST['categoria']);
    echo "<br>".("Cantidad: ".$_POST['cantidad'])."<br>";

    // caluclar descuento
    if(isset($_POST['descuento'])){
        $precio_final = $_POST['cantidad']*0.9 . "€";
        echo "Descuento aplicado satisfactoriamente<br>";
        echo $precio_final;

    } else {
        echo "Descuento no aplicado<br>";
    }
}


?>

</body>
</html>


