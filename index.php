<?php 

require_once "config/conexion.php";
require_once "config/config.php";
require_once "core/routes.php";
require_once "controllers/HomeController.php";
require_once "controllers/UsuarioController.php";
require_once "controllers/DomiciliarioController.php";
require_once "controllers/PedidoController.php";

// $controlador = new ProductoController();
// $controlador->index();



if(isset($_GET['control']))
{
    $controlador = cargarControlador($_GET['control']);
    
    if(isset($_GET['action']))
    {
        if(isset($_GET['numeroDocumento']))
        {
            cargarAccion($controlador, $_GET['action'], $_GET['numeroDocumento']);   
        }
        else
        {
            cargarAccion($controlador, $_GET['action']);   
        }

     
    }
    else 
    {
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }

}
else
{

    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    cargarAccion($controlador, ACCION_PRINCIPAL);


}



?>







