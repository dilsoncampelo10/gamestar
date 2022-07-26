<?php
require_once "connect.php";
require_once "../models/User.php";
class UserDaoMysql implements UserDao{

    private $drive;

    public function __construct($drive)
    {
        $this->drive = $drive;    
    }

    public function add(User $u){
        $stm = $this->drive->prepare("INSERT INTO users (name,lastname,email,password) VALUES (:name,:lastname,:email,md5(:password))");
       

        
        $stm->bindValue(":name",$u->getName());
        $stm->bindValue(":lastname",$u->getLastname());
        $stm->bindValue(":email",$u->getEmail());
        $stm->bindValue(":password",$u->getPassword());

        $u->setId($this->drive->lastInsertId());

        $stm->execute();

    }

    public function findAll(){

    }

    public function findById($id){

    }

    public function update(User $u){

    }

    public function delete($id){

    }
}