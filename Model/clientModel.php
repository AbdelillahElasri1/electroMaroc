<?php
require_once 'Model/connection.php';
class clientModel {
   
    function inscriptionDB($post){
        $conn=connect_to_db();
        $stmt = $conn->query("insert into client (fullName,phoneNumber,adress,city,email,password) values ('".$_POST['fullName']."'," . $post['phoneNumber'] . ",'" . $post['adress'] . "','" . $post['city'] . "','" . $post['email'] . "','" . $post['password'] . "')");
    }
    public function getClientFromDb(){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from client;");
        $result=$stmt->fetchAll();
        return $result;
    }
    public function getOneClientFromDb($id){
        $conn=connect_to_db();
        $stmt = $conn->query('select fullName from client where clientId =' . $id);
        $result = $stmt->fetch();
        return $result['fullName'];
    }
}