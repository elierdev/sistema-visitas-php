<?php
// Incluir la configuracion de la base de datos
include "config.php";


// Si esta definido o es presionado el boton Registrar, el algoritmo lo detecta y procesa los datos para guardarlos en la base de datos
if (isset($_POST["registrar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    // Instanciar la clase visitaDB y llamar su metodo setter
    $visita = new VisitaDB();
    $visita->setVisitas($nombre, $apellido, $email, $telefono);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro visitas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Registar nueva visita</h1>
        <h2>Página para el registro de una nueva visita</h2>
        <!-- Boton para volver a la lista -->
        <a class="button" href="index.php">Volver a la lista</a>
    </header>
    <section>
        <!-- Formulario para enviar los datos a ser procesados y guardados a la base de datos -->
        <div class="formulario">
            <form action="registrar.php" method="post">
                <label>Nombre: <br>
                    <input type="text" name="nombre" placeholder="Juansito" required><br>
                </label>
                <label>Apellido:<br>
                    <input type="text" name="apellido" placeholder="Ramirez" required><br>
                </label>
                <label>Email:<br>
                    <input type="email" name="email" placeholder="alguien@ejemplo.com" required><br>
                </label>
                <label>Teléfono:<br>
                    <input type="text" name="telefono" placeholder="809-000-0000"><br>
                </label>
                <input type="submit" value="Registrar" name="registrar">

            </form>
        </div>

    </section>
</body>

</html>