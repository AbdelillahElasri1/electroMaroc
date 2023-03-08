<?php
require_once 'Model/categoryModel.php';
class categoryController {
    private $post;
    function addPic(){
       // if(isset($_FILES['categoryPic'])){
            // $picname=$_FILES['categoryPic']['name'];
            // $picsize=$_FILES['categoryPic']['size'];
            // $pictmpname=$_FILES['categoryPic']['tmp_name'];
        
            // if($_FILES['categoryPic']['error']===0){
            //         $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
            //         $img_ex_lc = strtolower($img_ex);
            //         $allowed_exs=array("jpg","jpeg","png");
            //         if(in_array($img_ex_lc,$allowed_exs)){
            //             $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
            //             $img_upload_path='public/uploads/'.$new_img_name;
            //             move_uploaded_file($pictmpname,$img_upload_path);
            //             return $img_upload_path;
            //         }else{
            //             die("error1");
            //         }
                    
            // }else{
            //         die("error2");
            //     }    
            // $picname=$_FILES['categoryPic']['name'];
            // $pictmpname=$_FILES['categoryPic']['tmp_name'];
            // move_uploaded_file($pictmpname, 'public/uploads/' . $picname);

        // }
    }
    function addCategory(){
        if(isset($_POST['submit'])){
            
           $this->post=[
           //'categoryPic'=> $this->addPic(),
           'categoryName'=> $_POST['categoryName'],
           'categoryDescription'=> $_POST['categoryDescription']
        ];
        var_dump($this->post);
        $add=new categoryModel;
        $add->addCategoryToDb($this->post);

        }else{
            die('error3');
        }
    }
    function select($element,$id){
        $select=new categoryModel;
        return $select->selectFromDb($element,$id);
    }
    function updateCategory(){
        if(isset($_POST['submit'])){
            if(isset($_FILES['categoryPic'])&&$_FILES['categoryPic']['error']===0){
                $this->post=[
                    'categoryName'=> $_POST['categoryName'],
                    'categoryDescription'=> $_POST['categoryDescription'],
                    //'categoryPic'=> $this->addPic()
                     ];
                $bool=true;
            }else{
                $this->post=[
                    'categoryName'=> $_POST['categoryName'],
                    'categoryDescription'=> $_POST['categoryDescription']
                     ];
                $bool=false;
            }
         $update=new categoryModel;
         $update->updateCategoryInDb($this->post,$_GET['id'],$bool);
         }else{
             die('error');
         }
    }
    function getCategories() {
        $get = new categoryModel;
        return $get->getCategoriesFromDb();
    }
    function hideCategory() {
        if(isset($_GET['id'])){
            $hide=new categoryModel;
            $hide->hideCategoryInDb($_GET['id']);
        }else{
            die('error');
        }
    }
    function showCategory() {
        if(isset($_GET['id'])){
            $show=new categoryModel;
            $show->showCategoryInDb($_GET['id']);
        }else{
            die('error');
        }
    }
}