<?php 
class Employee {
    public $employeeid;
    public $fullname;
    public $address;
    public $email;
    public $mobilephone;
    public $position;
    public $avatar;
    public $departmentid;
    public function __construct($employeeid, $fullname, $address, $email, $mobilephone, $position, $avatar, $departmentid){
        $this->employeeid = $employeeid;
        $this->fullname = $fullname;
        $this->address = $address;
        $this->email = $email;
        $this->mobilephone = $mobilephone;
        $this->position = $position;
        $this->avatar = $avatar;
        $this->departmentid = $departmentid;

    }
    public function get_employeeid(){
        return $this->employeeid;
    }
    public function get_fullname(){
        return $this->fullname;
    }
    public function get_address(){
        return $this->address;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_mobilephone(){
        return $this->mobilephone;
    }
    public function get_position(){
        return $this->position;
    }
    public function get_avatar(){
        return $this->avatar;
    }
    public function get_departmentid(){
        return $this->departmentid;
    }
    public function set_employeeid($employeeid){
        $this->employeeid = $employeeid;
    }
    public function set_fullname($fullname){
            $this->fullname = $fullname;
    }
    public function set_address($address){
        $this->address = $address;
    }
    public function set_email($email){
        $this->email = $email;
    }
    public function set_mobilephone($mobilephone){
        $this->mobilephone = $mobilephone;
    }
    public function set_position($position){
        $this->position = $position;
    }
    public function set_avatar($avatar){
            $this->avatar = $avatar;
    }
    public function set_departmentid($departmentid){
            $this->departmentid = $departmentid;
    }
   
}
?>