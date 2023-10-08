<?php
class Load{

    public function__contruct(){

    }

    public function view($fileName, $data = false){
    if($data == true){
        extract($data);
    }
    include '../app/views/',$fileName,'.php';
    }
    public function model($fileName){
        include '/..app/models/' $fileName();
    }
}

?>