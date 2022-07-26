<?php

class User{
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $password;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = trim($id);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = ucwords($name);
    }


    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname = ucwords($lastname);
    }


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = strtolower($email);
    }


    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}

interface UserDao{
    public function add(User $u);

    public function findAll();

    public function findById($id);

    public function update(User $u);

    public function delete($id);
}