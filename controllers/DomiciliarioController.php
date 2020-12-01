<?php

    class DomiciliarioController
    {
        public function __construct()
        {
            require_once "models/Domiciliario.php";
        }

    
        public function store()
        {

        $numeroDocumento = $_POST['numeroDocumento'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        
        $domiciliario = new Domiciliario();
        $domiciliario->insert($numeroDocumento, $nombre, $apellido, $direccion, $telefono);
        $this->index();
         }



        public function edit($numeroDocumento)
        {
        
        $domiciliario = new Domiciliario();

        $data["numeroDocumento"] = $numeroDocumento;
        $data["domiciliario"] = $domiciliario->getdomiciliario($numeroDocumento);
        $data["titulo"] = "Actualizar domiciliario";

        require_once "views/domicliarios/edit.php";

        }

        public function delete($numeroDocumento)
        {

        $domiciliario = new Domiciliario();
        $domiciliario->delete($numeroDocumento);
        $this->index();
        }
    }

?>

