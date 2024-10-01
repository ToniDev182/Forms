<!DOCTYPE html>
<html lang="UTF-8">
<head>
    <title> Formulario con Validaciones </title>

   <style>
       /* Estilo general del cuerpo */
       body {
           font-family: Arial, sans-serif; /* Fuente de texto a utilizar */
           background-color: #f4f4f4; /* Color de fondo gris claro */
           display: flex; /* Usamos flexbox para centrar el formulario */
           justify-content: center; /* Centra horizontalmente */
           align-items: center; /* Centra verticalmente */
           height: 100vh; /* La altura del viewport es del 100% */
           margin: 0; /* Eliminamos márgenes del body */
       }

       /* Estilo del contenedor del formulario */
       form {
           background-color: #fff; /* Fondo blanco para el formulario */
           padding: 20px; /* Espaciado interno del formulario */
           border-radius: 8px; /* Bordes redondeados */
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave para dar relieve */
           width: 300px; /* Ancho fijo del formulario */
           text-align: left; /* Alineación del texto a la izquierda */
       }

       /* Estilo del encabezado del formulario (título) */
       h2 {
           text-align: center; /* Alineación centrada del título */
           margin-bottom: 20px; /* Espaciado inferior para separar del contenido */
           color: #333; /* Color de texto gris oscuro */
       }

       /* Estilo de las etiquetas y los campos de entrada */
       label {
           display: block; /* Hace que las etiquetas ocupen el ancho completo */
           margin-bottom: 8px; /* Espaciado inferior para separar del input */
           font-weight: bold; /* Texto en negrita */
           color: #555; /* Color de texto gris medio */
       }

       input[type="text"],
       input[type="password"],
       input[type="number"],
       select {
           width: 100%; /* Los inputs ocuparán el ancho total disponible */
           padding: 10px; /* Espaciado interno en los inputs */
           margin-bottom: 20px; /* Espacio inferior para separar los campos */
           border: 1px solid #ddd; /* Borde gris claro */
           border-radius: 4px; /* Bordes ligeramente redondeados */
           box-sizing: border-box; /* Incluye el padding y el borde en el cálculo del ancho */
       }

       /* Estilo para el checkbox */
       input[type="checkbox"] {
           margin-right: 10px; /* Espacio a la derecha del checkbox para la etiqueta */
       }

       /* Estilo para el botón de envío */
       button {
           width: 100%; /* El botón ocupa el ancho completo del formulario */
           padding: 10px; /* Espaciado interno del botón */
           background-color: #28a745; /* Color de fondo verde */
           border: none; /* Sin borde */
           color: white; /* Texto en color blanco */
           font-size: 16px; /* Tamaño de fuente */
           border-radius: 4px; /* Bordes redondeados */
           cursor: pointer; /* Cambia el cursor a puntero cuando pasas sobre el botón */
       }

       /* Estilo del botón al pasar el mouse por encima (hover) */
       button:hover {
           background-color: #218838; /* Color de fondo más oscuro al hacer hover */
       }

       /* Estilo para los mensajes de error */
       .error {
           color: red; /* Texto de color rojo */
           font-size: 14px; /* Tamaño de fuente reducido */
       }

   </style>
</head>
<body>
<!-- Formulario para ingresar datos -->

<form method="POST">
    <h2> Formulario con Validaciones </h2>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>

    <label for="correo">Correo:</label>
    <input type="text" id="correo" name="correo" required>
    <br><br>

    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña" required>
    <br><br>

    <label for="confirmar_contraseña">Confirmar contraseña:</label>
    <input type="text" id="confirmar_contraseña" name="confirmar_contraseña" required>
    <br><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>
    <br><br>

    <label for="genero">Genero:</label>
    <select type="" id="genero" name="genero" required>
        <option value="hombre">Hombre</option>
        <option value="mujer">Mujer</option>
    </select>
    <br><br>

    <label for="aceptarTer">Aceptar terminos y condiciones</label>
    <input type="checkbox" id="aceptarTer" name="aceptarTer">
    <br><br>

    <button type="submit" name="Enviar">Enviar</button>


</form>

<?php

if (isset($_POST["Enviar"])) {

    echo "<h3> Datos </h3>";
    echo "<br>" . ("Nombre: " . $_POST["nombre"]);
    if (filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
        echo "<br>" . ("Correo: " . $_POST["correo"]);
    } else {
        echo "<br>" . "mensaje no valido";
    }
    if ($_POST['contraseña'] == $_POST['confirmar_contraseña']) {

        echo "<br>" . "Contraseña Valida";
    } else {

        echo "<br>" . "Contraseña no valida";
    }

    echo "<br>" . ("Edad: " . $_POST["edad"]);
    echo "<br>" . ("Genero: " . $_POST["genero"]);

}


?>

</body>
</html>
