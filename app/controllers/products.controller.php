<?php

require_once './app/views/products.view.php';
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';




class ProdController{
    private $view;
    private $model;
    private $categoriesModel;

    function __construct(){
        $this->view = new ProdView();
        $this->model = new ProdModel();
        $this->categoriesModel = new CategoriesModel();

    }

    function showHome(){
       $products = $this->model->getAll();
       $categories = $this->categoriesModel->getAll();
        $this->view->home($products, $categories);
    }

    function showDetail($id){
        $item = $this->model->getItem($id);
        $categories = $this->categoriesModel->getAll();
        $this->view->detail($item, $categories);
    }


}
