<?php
require_once 'Model/carteModel.php';
class carteController{
    function carteC(){
        $carte=new carteModel;
        $carte->carteM($_GET['pId'], $_GET['cId']);
    }
    function productInCarte(){
        $carte=new carteModel;
        return $carte->productInCarteFromDb($_SESSION['clientId']);
    }
    
}