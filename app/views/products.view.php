<?php

include_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProdView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();

    }


    function home($products, $categories){
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categories', $categories);   
        $this->smarty->assign('products', $products);   
        $this->smarty->display('home.tpl');
        
    }

    function detail($item, $categories){
        $this->smarty->assign('item', $item);
        $this->smarty->assign('categories', $categories);   
        $this->smarty->display('item.tpl');

    }

}