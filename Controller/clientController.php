<?php
include 'Model/clientModel.php';
class clientController {
    private $post;
    function inscription(){
        $this->post = [
            'fullName'=>$_POST['fullName'],
            'phoneNumber' => $_POST['phoneNumber'],
            'adress' => $_POST['adress'],
            'city' => $_POST['city'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        $inscription = new clientModel;
        $inscription->inscriptionDB($this->post);
    }
    function getClient(){
        $get = new clientModel;
        return $get->getClientFromDb();
    }
    function getOneClient($id){
        $get = new clientModel;
        return $get->getOneClientFromDb($id);
    }
}