<?php
require_once 'connection.php';
class categoryModel
{
    public function addCategoryToDb($post)
    {
        $conn = connect_to_db();
        $stmt = $conn->query("INSERT INTO category (categoryName,categoryDescription) VALUES 
        ('" . $post['categoryName'] . "','" . $post['categoryDescription'] ."')");
        // $stmt = $conn->query("INSERT INTO `category` (`categoryId`, `categoryName`, `categoryDescription`, `adminId`, `hide`) VALUES (NULL, 'cuisine', 'cuisine is the best thing in life', '1', '1')");
    }
    public function getCategoriesFromDb(){
        $conn=connect_to_db();
        $stmt=$conn->query("select * from category;");
        $result=$stmt->fetchAll();
        return $result;
    }
    function selectFromDb($element,$id){
        $conn=connect_to_db();
        $stmt=$conn->query("SELECT $element from category where categoryId=$id");
        $result=$stmt->fetch();
        return $result;
    }
    public function updateCategoryInDb($post,$id,$bool){
        $conn=connect_to_db();
        if($bool){
             $stmt=$conn->query("UPDATE category SET categoryName='".$post['categoryName']."', categoryDescription='".$post['categoryDescription']."' where categoryId=$id;");
        }else{
            $stmt=$conn->query("UPDATE category SET categoryName='".$post['categoryName']."', categoryDescription='".$post['categoryDescription']."' where categoryId=$id;");
        }
    }
    public function hideCategoryInDb($id){
        $conn=connect_to_db();
        $stmt = $conn->query("UPDATE category set hide=1 where categoryId=$id");
        $stmtt= $conn->query("UPDATE product set hide=1 where categoryId=$id");
    }
    public function showCategoryInDb($id){
        $conn=connect_to_db();
        $stmt = $conn->query("UPDATE category set hide=0 where categoryId=$id");
        $stmtt= $conn->query("UPDATE product set hide=0 where categoryId=$id");
    }
}
