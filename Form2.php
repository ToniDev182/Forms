<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>

    <!-- Estilos CSS para la apariencia de la calculadora -->
    <style>
        /* Estilos generales para el body, que centra todo el contenido */
        body {
            font-family: Arial, sans-serif; /* Fuente de texto */
            background-color: #f4f4f9; /* Color de fondo claro */
            display: flex; /* Usamos flexbox para centrar el contenido */
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
            height: 100vh; /* Altura del body para ocupar toda la pantalla */
            margin: 0; /* Elimina márgenes predeterminados */
        }

        /* Estilos para el contenedor principal */
        .container {
            background-color: #fff; /* Fondo blanco */
            padding: 20px; /* Espaciado interno */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            text-align: center; /* Alinea el texto al centro */
        }

        /* Estilo del título */
        h2 {
            margin-bottom: 20px; /* Espacio debajo del título */
        }

        /* Estilo de las etiquetas de los inputs */
        label {
            font-size: 16px; /* Tamaño de fuente para las etiquetas */
        }

        /* Estilo para los campos de entrada de números */
        input[type="number"] {
            width: 200px; /* Ancho del campo de texto */
            padding: 10px; /* Espaciado interno */
            margin-bottom: 20px; /* Espacio entre campos */
            border-radius: 5px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde gris claro */
        }

        /* Estilo para los botones de envío */
        input[type="submit"] {
            background-color: #4CAF50; /* Color verde del botón */
            color: white; /* Color de texto blanco */
            border: none; /* Sin bordes */
            padding: 10px 15px; /* Espaciado interno del botón */
            margin: 5px; /* Espaciado entre botones */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar el mouse */
            font-size: 16px; /* Tamaño del texto en los botones */
        }

        /* Efecto hover para los botones (cuando se pasa el mouse por encima) */
        input[type="submit"]:hover {
            background-color: #45a049; /* Cambia a un tono más oscuro de verde */
        }

        /* Estilo para el campo de resultado */
        input[type="text"] {
            width: 200px; /* Ancho del campo de resultado */
            padding: 10px; /* Espaciado interno */
            margin-top: 10px; /* Espaciado superior */
            border-radius: 5px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde gris claro */
            text-align: center; /* Alinea el texto al centro */
            background-color: #f4f4f9; /* Fondo del campo de resultado */
        }
    </style>
</head>

<body>
<!-- Contenedor principal para la calculadora -->
<div class="container">
    <h2>Mi primera calculadora </h2> <!-- Título de la calculadora -->

    <!-- Formulario que envía los datos mediante el método POST -->
    <form method="post">
        <!-- Etiqueta y campo de entrada para el primer número -->
        <label for="operando1">Operando 1:</label><br>
        <input type="number" name="operando1" id="operando1" required><br><br> <!-- El campo es obligatorio (required) -->

        <!-- Etiqueta y campo de entrada para el segundo número -->
        <label for="operando2">Operando 2:</label><br>
        <input type="number" name="operando2" id="operando2" required><br><br> <!-- También es obligatorio -->

        <!-- Botones para seleccionar la operación aritmética -->
        <input type="submit" name="operacion" value="+"> <!-- Botón para sumar -->
        <input type="submit" name="operacion" value="-"> <!-- Botón para restar -->
        <input type="submit" name="operacion" value="*"> <!-- Botón para multiplicar -->
        <input type="submit" name="operacion" value="/"> <!-- Botón para dividir -->
        <br><br>
    </form>

    <!-- Código PHP para procesar los datos y realizar la operación -->
    <?php
    // Verifica si el formulario fue enviado utilizando el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura los valores ingresados por el usuario
        $operando1 = $_POST['operando1']; // Primer número
        $operando2 = $_POST['operando2']; // Segundo número
        $operacion = $_POST['operacion']; // Operación seleccionada
        $resultado = 0; // Inicializa el resultado

        // Realiza la operación aritmética según el botón presionado
        if ($operacion == '+') {
            $resultado = $operando1 + $operando2; // Suma
        } elseif ($operacion == '-') {
            $resultado = $operando1 - $operando2; // Resta
        } elseif ($operacion == '*') {
            $resultado = $operando1 * $operando2; // Multiplicación
        } elseif ($operacion == '/') {
            // Verifica si el segundo operando es diferente de 0 para evitar la división por cero
            if ($operando2 != 0) {
                $resultado = $operando1 / $operando2; // División
            } else {
                // Muestra un error si el segundo operando es 0
                $resultado = "Error: División por cero";
            }
        }

        // Muestra el resultado de la operación en un campo de texto de solo lectura
        echo "<label for='resultado'>Resultado:</label><br>";
        echo "<input type='text' value='$resultado' readonly>"; // Campo que muestra el resultado
    }
    ?>
</div> <!-- Fin del contenedor -->
</body>
</html>
