<?php

require_once './utils/database.php';

class ProdModel{
    private $db;

    function __construct(){
       $this->db = DataBase::dataBase();
    }

    function getAll(){
        $query = $this->db->prepare('SELECT a.*, b.* FROM productos a INNER JOIN categorias b ON a. id_categoria = b. id_categoria');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function getItem($id){
        $query = $this->db->prepare('SELECT a.*, b.* FROM productos a INNER JOIN categorias b ON a. id_categoria = b. id_categoria WHERE id_producto = ?');
        $query->execute(array($id));
        $item = $query->fetch(PDO::FETCH_OBJ);

        return $item;
    }

    function delete($id){
        $query = $this->db->prepare('DELETE FROM productos WHERE id_producto =?');
        $query->execute(array($id));
        var_dump($query->errorInfo());

    }

    function update($id, $product, $category, $description){
        $query = $this->db->prepare('UPDATE productos SET producto =?, descripcion =?, id_categoria =? WHERE id_producto =?');
        $query->execute(array($product, $description, $category, $id));
        var_dump($query->errorInfo());

    }

    function add($product, $category, $description){
        $query = $this->db->prepare('INSERT INTO productos(producto, descripcion, id_categoria) VALUES(?,?,?)');
        $query->execute(array($product, $description, $category));
        var_dump($query->errorInfo());

    }


    function filter($id_category){
        $query = $this->db->prepare('SELECT * FROM productos WHERE id_categoria =?');
        $query->execute(array($id_category));
        $products = $query->fetchAll(PDO::FETCH_OBJ);
       
        return $products;
    }
}