<?php
require_once 'connection.php';
class productModel {
    private $posts;
    public function addProductToDb($post){
        $conn=connect_to_db();
        $stmtC = $conn->query("select categoryId from category where categoryName='" . $post['productCategory']."';");
        $category = $stmtC->fetch();
        $stmt=$conn->query("INSERT INTO product (productName,referenceProduct,labelProduct,codeBar,purchasePrice,finalPrice,offrePrice,productCategory,description,productPic,categoryId) VALUES 
        ('".$post['productName']."','".$post['referenceProduct']."','".$post['labelProduct']."','".$post['codeBar']."',".$post['purchasePrice'].",".$post['finalPrice'].",".$post['offrePrice'].",'".$post['productCategory']."','".$post['description']."','".$post['productPic']."',".$category['categoryId'].")");
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from product where productId=$id;");
        $result=$stmt->fetch();
        return $result;
    }
    public function getProductsFromDb(){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from product;");
        $result=$stmt->fetchAll();
        return $result;
    }
    public function hideProductInDb($id){
        $conn=connect_to_db();
        $stmt = $conn->query("UPDATE product set hide=1 where productId=$id");
    }
    public function showProductInDb($id){
        $conn=connect_to_db();
        $stmt = $conn->query("UPDATE product set hide=0 where productId=$id");
    }
    public function updateProduitInDb($post,$id,$bool){
        $conn=connect_to_db();
        if($bool){
             $stmt=$conn->query("UPDATE product SET productName='".$post['productName']."',
             labelProduct='".$post['labelProduct']."',
             purchasePrice=".$post['purchasePrice'].",finalPrice=".$post['finalPrice'].",offrePrice=".$post['offrePrice'].",
             description=".$post['description'].",productCategory='".$post['productCategory']."',referenceProduct='".$post['referenceProduct']."',codeBar='".$post['codeBar']."' , productPic='".$post['productPic']."' 
             where productId=$id;");
        }else{
            $stmt=$conn->query("UPDATE product SET productName='".$post['productName']."',
             labelProduct='".$post['labelProduct']."',
             purchasePrice=".$post['purchasePrice'].",finalPrice=".$post['finalPrice'].",offrePrice=".$post['offrePrice'].",
             description=".$post['description'].",productCategory='".$post['productCategory']."',referenceProduct='".$post['referenceProduct']."',codeBar='".$post['codeBar']."' 
             where productId=$id;");
        }  
    }
}
