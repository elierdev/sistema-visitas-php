<!DOCTYPE html>
<html lang="en">
<?php 
include "config.php"
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Visitas - 2do Parcial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Vistias</h1>
        <h2>Pagina para listar las visitas de la página</h2>
        <a class="button" href="registrar.php">Agregar visita</a>
    </header>
    <main>
        <!-- Creacion de la tabla para mostrar la lista de datos -->
        <table>
            <thead>
                <tr>
                    <td>Nombde</td>
                    <td>Apellido</td>
                    <td>Email</td>
                    <td>Teléfono</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                    // Instanciar clase visitaDB y llamar su metodo getter
                    $visita = new VisitaDB();
                    $visita->getVisitas();
                    ?>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>