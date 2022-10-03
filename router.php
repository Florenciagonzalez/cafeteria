<?php
    
    require_once './app/controllers/productos.controller.php';


    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    $params = explode('/', $action);

   
    $prodController = new ProdController();

    switch($params[0]){
        case '':
            $prodController->showHome();
            break;
        case '':
            
            break;
    }
