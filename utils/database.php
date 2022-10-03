<?php

class DataBase{
    private $db;

    static function dataBase(){
        return new PDO('mysql:host=localhost;'.'dbname=db_cafeteria;charset=utf8', 'root', '');
    }
}