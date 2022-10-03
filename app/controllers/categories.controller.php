<?php

require_once './app/views/categories.view.php';
require_once './app/models/categories.model.php';



class CategoriesController{
    private $view;
    private $model;

    function __construct(){
        $this->view = new CategoriesView();
        $this->model = new CategoriesModel();

    }

    function showCategories(){
       $categories = $this->model->getAll();
      
        
    }

  


}