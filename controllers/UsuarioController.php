<?php

    class usuarioController
    {
        public function __construct()
        {
            require_once "models/usuario.php";
        }

        public function index()
        {
            $usuarios = new Usuario();
            //cargar la vista
            $data["usuarios"] = $usuarios->listar();
            $data["titulo"] = "usuarios";
            require_once "views/usuarios/index.php";
        }

        public function store()
        {

        $numeroDocumento = $_POST['numeroDocumento'];
        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $contrasenia = $_POST['contrasenia'];
        
        $usuario = new usuario();
        $usuario->insert($numeroDocumento,$rol, $nombre, $apellido, $telefono, $direccion, $email, $estado, $contrasenia);
        $this->index();
        }

        public function edit($numeroDocumento)
        {
        
        $usuario = new Usuario();

        $data["numeroDocumento"] = $numeroDocumento;
        $data["usuario"] = $usuario->getUsuario($numeroDocumento);
        $data["titulo"] = "Actualizar usuario";

        require_once "views/usuarios/edit.php";

        }
        public function update()
        {

        $numeroDocumento = $_POST['numeroDocumento'];
        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $contrasenia = $_POST['contrasenia'];
        
        $usuario = new usuario();
        $usuario->update($numeroDocumento, $rol, $nombre, $apellido, $telefono, $direccion, $email, $estado, $contrasenia);
        $this->index();
        }

        public function delete($numeroDocumento)
        {
           
        $usuario = new usuario();
        $usuario->delete($numeroDocumento);
        $this->index();
        }
    }

?>

