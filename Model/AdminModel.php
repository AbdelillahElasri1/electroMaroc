<?php 
require_once 'connection.php';
class AdminModel {
    public function AdminLog($email,$psw){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from admin where email='$email' and password='$psw' limit 1");
        $result=$stmt->fetch();
        $user = [
            'result' => $result,
            'role' => 'admin'
        ];
        if($result){
           return $user; 
        }else{
            $stmt=$conn->query("select * from client where email='$email' and password='$psw' limit 1");
            $result=$stmt->fetch();
            if($result){
                $user = [
                    'result' => $result,
                    'role' => 'client'
                ];
            } else
                die('invalid!');
            return $user;
        }
    }
}