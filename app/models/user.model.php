<?php 

class UserModel{
    private $db;

    function __construct(){
        $this->db = DataBase::dataBase();
    }

    function user($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email =?');
        $query->execute(array($email));
        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user;
    }
}