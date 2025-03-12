<?php 

    class VisitaDB {
        var $dbHost = "localhost";
        var $dbUser = "root";
        var $dbPass = "";
        var $dbName = "visitas_db";
        var $conexion;

        function __construct()
        {
            $this->conexion = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        }

        function getVisitas()
        {
            $sql = "SELECT * FROM visitas";
            $result = mysqli_query($this->conexion, $sql);

            while ($visita = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>{$visita["nombre"]}</td>";
                echo "<td>{$visita["apellido"]}</td>";
                echo "<td>{$visita["email"]}</td>";
                echo "<td>{$visita["telefono"]}</td>";
                echo "</tr>";
            }
            
            
        }

        function setVisitas($nombre, $apellido, $email, $telefono)
        {
            $sql = "INSERT INTO `visitas` (`id`, `nombre`, `apellido`, `email`, `telefono`) VALUES (NULL, '{$nombre}', '{$apellido}', '{$email}', '$telefono')";
            $result = mysqli_query($this->conexion, $sql);

            if ($result) {
                header("Location: index.php");
            } else {
                echo "<p>Error al guardar los datos</p>";
            }
        }
        

    }



?>
