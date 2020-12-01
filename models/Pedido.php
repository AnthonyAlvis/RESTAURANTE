<?php  

    class Pedido
    {
        private $db;
        private $pedidos;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->pedidos = array();
        }

        public function listar()
        {   
            $sql = "SELECT pedido.identificador, pedido.valor, pedido.numeroDocumentoCliente AS cliente " .
                    " FROM pedido " .
                    " WHERE pedido.estado = 'listo' ";
                   
            $resultado = $this->db->query($sql);
            if(!$resultado)
            {
                echo "Lo sentimos este sitio está experimentndo problemas.\n\n";

                echo "Eror: La ejecución de la consulta falla debido a :\n";
                echo "Query : " . $sql . "\n";
                echo "Errno" . $mysqli->errno . "\n" ;
                echo "Error" . $mysqli->error . "\n" ;
                exit;
            }
            while ($row = $resultado->fetch_assoc()) 
            {
                $this->pedidos[] = $row;
            }
            return $this->pedidos;
        }

        public function edit ($identificador)
        {
            
            if( isset($_SESSION["numeroDocumento"]))
            {
                $numeroDocumento = $_SESSION["numeroDocumento"];
                
                $sql ="UPDATE pedido SET estado = 'En tránsito', numeroDocumentoDomiciliario ='$numeroDocumento' WHERE identificador = $identificador";
                $resultado = $this->db->query($sql);

                $sql ="UPDATE usuario SET  estado = 'Ocupado' WHERE numeroDocumento = '$numeroDocumento'";
                $resultado = $this->db->query($sql);
            }
            else
            {   
                $sql ="UPDATE pedido SET estado = 'En tránsito', numeroDocumentoDomiciliario ='12345' WHERE identificador = $identificador";
                $resultado = $this->db->query($sql);

                $sql ="UPDATE usuario SET  estado = 'Ocupado' WHERE numeroDocumento = '12345'";
                $resultado = $this->db->query($sql);
            }
        }
        public function entregado ($identificador)
        {
            $sql ="UPDATE pedido SET estado = 'entregado' WHERE identificador = $identificador";
            $resultado = $this->db->query($sql);

            if( isset($_SESSION["numeroDocumento"]))
            {
                $numeroDocumento = $_SESSION["numeroDocumento"];
                $sql ="UPDATE usuario SET  estado = 'libre' WHERE numeroDocumento = '$numeroDocumento'";
                $resultado = $this->db->query($sql);
            }
            else
            {
                $sql ="UPDATE usuario SET  estado = 'libre' WHERE numeroDocumento = '12345'";
                $resultado = $this->db->query($sql);
            }
        }

          public function pedidos()
        {   
            if(isset($_SESSION["numeroDocumento"]))
            {
                $numeroDocumento = $_SESSION["numeroDocumento"];
                $sql = "SELECT * " .
                        " FROM pedido " .
                        " WHERE pedido.estado = 'En tránsito' AND numeroDocumentoDomiciliario = '$numeroDocumento'";
                $resultado = $this->db->query($sql);  
                if(!$resultado)
                {
                    echo "Lo sentimos este sitio está experimentndo problemas.\n\n";
    
                    echo "Eror: La ejecución de la consulta falla debido a :\n";
                    echo "Query : " . $sql . "\n";
                    echo "Errno" . $mysqli->errno . "\n" ;
                    echo "Error" . $mysqli->error . "\n" ;
                    exit;
                }   
                while ($row = $resultado->fetch_assoc()) 
                {
                    $this->pedidos[] = $row;
                }
                return $this->pedidos;  
            }
            else 
            {
                $sql = "SELECT * " .
                        " FROM pedido " .
                        " WHERE pedido.estado = 'En tránsito' AND numeroDocumentoDomiciliario = '12345'";
                $resultado = $this->db->query($sql);
                if(!$resultado)
                {
                    echo "Lo sentimos este sitio está experimentndo problemas.\n\n";
    
                    echo "Eror: La ejecución de la consulta falla debido a :\n";
                    echo "Query : " . $sql . "\n";
                    echo "Errno" . $mysqli->errno . "\n" ;
                    echo "Error" . $mysqli->error . "\n" ;
                    exit;
                }
                while ($row = $resultado->fetch_assoc()) 
                {
                    $this->pedidos[] = $row;
                }
                return $this->pedidos;     
            }
            
        }
    }

?>