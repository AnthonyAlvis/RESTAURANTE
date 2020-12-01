<?php 

    class PedidoController
    {
        public function __construct()
        {
            require_once "models/Pedido.php";
        }

        public function index()
        {
            $pedido = new Pedido();
            $data["pedidos"] = $pedido->listar();
            $data["titulo"] =  "Pedidos Disponibles";
            require_once "views/pedidos/index.php";
        }

        public function update()
        {
            $identificador = $_POST['identificador'];
            
            $pedido = new Pedido();
            $pedido->edit($identificador);

            $this->index();
        }
        public function view()
        {
            $identificador = $_POST['identificador'];
            
            $pedido = new Pedido();
            $pedido->entregado($identificador);

            $this->index();
        }
        public function inicio ()
        {
            $pedido = new Pedido();
            $data["pedidos"] = $pedido->pedidos();
            $data["titulo"] =  "Pedidos Disponibles";
            require_once "views/pedidos/view.php";
        }
        

    }

?>