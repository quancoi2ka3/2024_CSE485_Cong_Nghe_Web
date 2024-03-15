<?php 

class Department{
    private $username;
    private $password;
    private $role;
    private $employeeid;
    public function __construct($username, $password, $role, $employeeid){
        $this -> username = $username;
        $this -> password = $password;
        $this -> role = $role;
        $this -> employeeid = $employeeid;
    }
    public function getUsername(){
        return $this -> username;
    }
    public function getPassword(){
        return $this -> password;
    }
    public function getRole(){
        return $this -> role;
    }
    public function getEmployeeID(){
        return $this -> employeeid;
    }
    public function setUsername($username){
        $this -> username = $username;
    }
    public function setPassword($password){
        $this -> password = $password;
    }
    public function setRole($role){
        $this -> role = $role;
    }
    public function setEmployeeID($employeeid){
        $this -> employeeid = $employeeid;
    }
}

  ?>

      
        
        
       