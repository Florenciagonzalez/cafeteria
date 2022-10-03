<?php

require_once './utils/database.php';

class ProdModel{
    private $db;

    function __construct(){
       $this->db = DataBase::dataBase();
    }

    function getAll(){
        $query = $this->db->prepare('SELECT * FROM productos');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);

        return $products;
    }

    function getItem($id){
        $query = $this->db->prepare('SELECT `id_producto`, `producto`, `descripcion`, `id_categoria`  FROM `productos` WHERE id_producto = ?');
        $query->execute(array($id));
        $item = $query->fetch(PDO::FETCH_OBJ);

        return $item;
    }
}