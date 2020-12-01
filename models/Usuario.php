<?php

    class Usuario
    {
        private $db;
        private $usaurios;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->usaurios = array();
        }

        public function listar()
        {   
            $sql = "SELECT * FROM usuario ";
                   
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
                $this->usaurios[] = $row;
            }
            return $this->usaurios;
        }

    
        public function update($numeroDocumento, $rol, $nombre, $apellido, $telefono, $direccion, $email, $contrasenia)
        {
            $sql = "UPDATE usuario SET  rol = '$rol', nombre = '$nombre', apellido = '$apellido', telefono = '$telefono' , direccion = '$direccion', email = '$email', contrasenia = '$contrasenia'  WHERE numeroDocumento = '$numeroDocumento'";
            $resultado = $this->db->query($sql);
        }

        public function getUsuario($numeroDocumento)
    {
        $sql =  "SELECT * FROM usuario  WHERE numeroDocumento = '$numeroDocumento'";
        $resultado = $this->db->query($sql);
        $row = $resultado->fetch_assoc();
        return $row;
       
    }
    
        public function delete($numeroDocumento)
        {
            
                $sql = "DELETE FROM usuario  WHERE numeroDocumento = '$numeroDocumento' ";
                $resultado = $this->db->query($sql);
            
        }  
    }

?>