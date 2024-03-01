<?php
class Person{
    private $id;
    private $tensv;
    public function __construct($id,$tensv)
    {
          $this->id=$id;
          $this->tensv=$tensv;
    }
    public function getid(){
        return $this->id;
    }
    public function gettensv(){
        return $this->tensv;
    }
    public function setid($id){
        $this->id=$id;
    }
    public function settensv($tensv){
        $this->tensv=$tensv;
    }
    
}
?>