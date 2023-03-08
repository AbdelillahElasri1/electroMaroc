<?php
require_once 'connection.php';
class orderModel {
    function createOrder(){
        $conn=connect_to_db();
        $stmtorder = $conn->query("insert into command (dateofcreation,clientId) values (NOW(),".$_SESSION['clientId'].");");
        $commandId = $conn->query("select max(commandId) from command where clientId = " . $_SESSION['clientId'] );
    }
    function addDataToOrder($pId,$pQ,$pUnitPrice,$pTotalPrice){
        $conn=connect_to_db();
        $commandId = $conn->query("select max(commandId) from command where clientId = " . $_SESSION['clientId'] );
        $commandId=$commandId->fetchAll()[0]["max(commandId)"];
        $stmt=$conn->query("insert into componentProduct (productId,commandId,quantite,unitPrice,totalProductPrice) values ($pId,$commandId,$pQ,$pUnitPrice,$pTotalPrice)");

    }
    function clear($pId){
        $conn=connect_to_db();
        if($pId){
            $stmt = $conn->query("DELETE from carte where productId = $pId");
        }else{
             $stmt = $conn->query("delete from carte where clientId=" . $_SESSION['clientId']);
        }
    }

    function orderInfoFromDb(){
        $conn=connect_to_db();
        $inner = $conn->query('SELECT * , (select sum(totalProductPrice) from componentproduct where componentproduct.commandId = command.commandID) as total
        FROM command
        INNER JOIN componentProduct
        ON command.commandID = componentProduct.commandID group by command.commandID ;');
        return $inner->fetchAll();
    }
    
    function status($id,$status){
        $conn=connect_to_db();
        if($status == 'in Transit'){
            $stmt = $conn->query("update command set orderStatus = '" . $status . "', sendingDate = NOW() where commandID = " . $id);
        }
        $stmt = $conn->query("update command set orderStatus = '" . $status . "'  where commandID = " . $id);
    }
}
