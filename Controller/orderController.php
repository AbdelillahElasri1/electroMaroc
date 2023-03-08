<?php
require_once 'Model/orderModel.php';

class orderController
{
    function confirmOrder()
    {
        if(isset($_POST['Confirm'])){
            $test2 = new carteController;
            $orderModel = new orderModel;
            $orderModel->createOrder();
            $orders = $test2->productInCarte();
        foreach ($orders as $key => $value) {
            if ($value['hide'] == 0) {
                $orderModel->addDataToOrder($value['productId'], $_POST['quantite' . $value['productId']], $value['finalPrice'], $value['finalPrice'] * $_POST['quantite' . $value['productId']]);
            }
        }
            $orderModel->clear(null);
        }
        
    }
    function delete($id){
        $orderModel = new orderModel;
        $orderModel->clear($id);
        
    }

    function orderInfo(){
        $orderModel = new orderModel;
        $orderModel = $orderModel->orderInfoFromDb();
        return $orderModel;
    }

    function orderStatus(){
        $orderModel = new orderModel;
        if($_GET['status']=='in'){
            $Pstatus = 'in Transit';
        } else
            $Pstatus = $_GET['status'];
        
        $orderModel->status($_GET['id'], $Pstatus);
    }
}