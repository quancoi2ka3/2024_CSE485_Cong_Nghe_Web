<?php 

class Department{
    private $id;
    private $name;
    private $address;
    private $email;
    private $phone;
    private $logo;
    private $website;
    private $parentid;

    public function __construct($id,$name,$address,$email,$phone,$logo,$website,$parentid){
        $this -> id = $id;
        $this -> name = $name;
        $this -> address = $address;
        $this -> email = $email;
        $this -> phone = $phone;
        $this -> logo = $logo;
        $this -> website = $website;
        $this ->parentid =$parentid;

    }

    public function getID(){
        return $this -> id;
    }
    public function getName(){
        return  $this -> name;
    }
    public function getAddress(){
        return $this -> address;
    }
    public function getEmail(){
        return $this ->email;
    }
    public function getPhone(){
        return $this -> phone;
    }
    public function getLogo(){
        return $this ->logo;
    }
    public function getWebsite(){
        return $this -> website;
    }
    public function getParentID(){
        return $this -> parentid;
    }
    public function setID($id){
        $this -> id = $id;
    }
    public function setName($name){
        $this -> name = $name;
    }
    public function setAddress($address){
        $this -> address = $address;
    }
    public function setEmail($email){
        $this -> email = $email;
    }
    public function setPhone($phone){
        $this -> phone = $phone;
    }
    public function setLogo($logo){
        $this -> logo = $logo;
    }
    public function setWebsite($website){
        $this -> website = $website;
    }
    public function setParentID($parentid){
        $this ->parentid =$parentid;
    }
}

      
        
        
       