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

    function delete($id){
        $query = $this->db->prepare('DELETE FROM categorias WHERE id_categoria =?');
        $query->execute(array($id));
    }

    function update($id, $category){
        $query = $this->db->prepare('UPDATE categorias SET categoria =? WHERE id_categoria =?');
        $query->execute(array($id, $category));
        var_dump($query->errorInfo());
    }

    function add($category){
        $query = $this->db->prepare('INSERT INTO categorias(categoria) VALUES(?)');
        $query->execute(array($category));
    }


}