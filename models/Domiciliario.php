<?php

    class Domiciliario
    {
        private $db;
        private $domiciliarios;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->domiciliarios = array();
        }

        public function listar()
        {   
            $sql = "SELECT * " .
                    "FROM usuario " .
                    "JOIN domiciliario " .
                    "ON usuario.numeroDocumento = domiciliario.numeroDocumento";
            $resulatado = $this->db->query($sql);
            if(!$resulatado)
            {
                echo "Lo sentimos este sitio está experimentndo problemas.\n\n";

                echo "Eror: La ejecución de la consulta falla debido a :\n";
                echo "Query : " . $sql . "\n";
                echo "Errno" . $mysqli->errno . "\n" ;
                echo "Error" . $mysqli->error . "\n" ;
                exit;
            }
            while ($row = $resulatado->fetch_assoc()) 
            {
                $this->domiciliarios[] = $row;
            }
            return $this->domiciliarios;
        }

    
        public function update( $nombre, $apellido, $direccion, $telefono)
        {
            $sql = "UPDATE domiciliario SET  nombre = '$nombre', apellido = '$apellido', direccion = '$direccion' , telefono = '$telefono' WHERE numeroDocumento = $numeroDocumento";
            $resultado = $this->db->query($sql);
        }
    
        public function delete($numeroDocumento)
        {
            $sql = "DELETE FROM domiciliario  WHERE numeroDocumento = $numeroDocumento";
            $resultado = $this->db->query($sql);
        }  
    }

?>