<?php

class Model{
    function __construct(){
        $this->db=new DataBase();
    }

    function query($query){
        return $this->db->connect()->query($query);
    }
    function prepare($query){
        
    }
}