<?php

    class HomeController
    {


        public function __construct()
        {

        }

        public function index ()
        {
            $data['titulo'] = "Proyecto";
            require_once "views/home/index.php";
        }

    }


?>