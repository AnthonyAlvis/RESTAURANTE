

<?php

$servername = "localhost";
$database = "restaurante";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database );

//if (!$conn)
//{
 //   die("Conexion fallida" . mysqli_connect_error());
//}

//echo "Conectado Satisfactoriamente <br>";

class Conectar
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost", "root","","restaurante");
        if (!$conexion)
        {
            die("Conexion fallida" . mysqli_connect_error());
        }
        return $conexion;
    }
}
?>

