<?php

include_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProdView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }


    function home(){

       

        $this->smarty->display('home.tpl');


    }

}