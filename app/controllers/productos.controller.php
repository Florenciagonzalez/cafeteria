<?php

require_once './app/views/productos.view.php';


class ProdController{
    private $view;

    function __construct(){
        $this->view = new ProdView();
    }

    function showHome(){
        $this->view->home();
    }
}
