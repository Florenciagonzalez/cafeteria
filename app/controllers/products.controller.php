<?php
require_once './app/views/products.view.php';
require_once './app/models/products.model.php';
require_once './app/models/categories.model.php';
require_once './helpers/auth.helper.php';

class ProdController{
    private $view;
    private $model;
    private $categoriesModel;
    private $authHelper;
   

    function __construct(){
        $this->view = new ProdView();
        $this->model = new ProdModel();
        $this->categoriesModel = new CategoriesModel();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        $categories = $this->categoriesModel->getAll();
        $products = $this->model->getAll();
         $this->view->products($products, $categories);
    }

    function showDetail($id){
        $item = $this->model->getItem($id);
        $this->view->detail($item);
    }

    function showFiltered(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $categories = $this->categoriesModel->getAll();
            $products = $this->model->filter($id);
            if(empty($products)){
                $this->view->error('No hay productos disponibles para esta categoria :('); 
            }else{
                foreach ($categories as $category) {
                    if($products[0]->id_categoria == $category->id_categoria){
                        $actualCategory = $category->categoria;
                        $this->view->filtered($products, $categories, $actualCategory); 
                    }
                }
            }
        }
    }


    //Edición de productos para el admin

    function showEditProds(){
        $isLogged = $this->authHelper->checkLoggedIn();
        if($isLogged){
            $categories = $this->categoriesModel->getAll();
            $products = $this->model->getAll();
            $this->view->editProducts($products, $categories);
        }
    }

    function adminProduct($params){
        $isLogged = $this->authHelper->checkLoggedIn();
        if($isLogged){
            switch($params){
                case 'delete':
                    $this->deleteProduct();

                    break;
                case 'add':
                    $this->addProduct();

                    break;    
                case 'update':
                    $this->updateProduct();
                    break;
            }
        }
    }

    function deleteProduct(){
        $id = $_POST['id'];
        $this->model->delete($id);
        header("Location: " . PRODUCTS);
    }

    function updateProduct(){
        if(!empty($_POST)){
            $id = $_POST['id'];
            $product = $_POST['product'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $this->model->update($id, $product, $category, $description);
            header("Location: " . PRODUCTS);
        }
    }

    function addProduct(){
        if(!empty($_POST['product']) && !empty($_POST['category']) && !empty($_POST['description'])){
            $product = $_POST['product'];
            $category = $_POST['category'];
            $description = $_POST['description'];
            $this->model->add($product, $category, $description);
            header("Location: " . PRODUCTS);
        }
    }

}
