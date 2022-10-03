<?php

require_once './utils/database.php';

class CategoriesModel{
    private $db;

    function __construct(){
        $this->db = DataBase::dataBase();
    }


    function getAll(){
        $query = $this->db->prepare('SELECT * FROM categorias');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }
}