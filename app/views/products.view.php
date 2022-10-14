<?php

include_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProdView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function products($products, $categories){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('home.tpl');
    }

    function detail($item){
        $this->smarty->assign('item', $item);   
        $this->smarty->display('item.tpl');

    }

    function editProducts($products, $categories){
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('editProducts.tpl');
    }

}