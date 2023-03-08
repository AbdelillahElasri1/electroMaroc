<?php
require_once 'connection.php';
class carteModel {

    public function carteM($pId,$cId){
        $conn = connect_to_db();
        $stmt = $conn->query("insert into carte (productId,clientId) values ($pId,$cId);");
    }
    function productInCarteFromDb($id){
        $conn = connect_to_db();
        $stmt = $conn->query("SELECT * FROM product INNER JOIN carte ON product.productId = carte.productId and carte.clientId=$id");
        $result=$stmt->fetchAll();
        return $result;
    }
    
}