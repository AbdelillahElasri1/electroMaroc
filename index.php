<?php
require_once 'Controller/productController.php';
require_once 'Controller/AdminController.php';
require_once 'Controller/categoryController.php';
require_once 'Controller/clientController.php';
require_once 'Controller/carteController.php';
require_once 'Controller/orderController.php';

session_start();
$productAction = new productController;
$testLogin=new AdminController;
$categoryAction = new categoryController;
$client = new clientController;
$carte = new carteController;
$order = new orderController;

if(isset($_GET['a']) && isset($_GET['p'])){
    if($_GET['a']=='addp'){
      $productAction->addProduct();
    }
    if($_GET['a']=='addCategory'){
      $categoryAction->addCategory();
    }
    if($_GET['a']=='updateCategory'){
      $categoryAction->updateCategory();
    }
    if($_GET['a']=='shop'){
      $carte->carteC();
    }
    if($_GET['a']=='hideC'){
      $categoryAction->hideCategory();
    }
    if($_GET['a']=='showC'){
      $categoryAction->showCategory();
    }
    if($_GET['a']=='hide'){
      $productAction->hideProduct();
    }
    if($_GET['a']=='show'){
      $productAction->showProduct();
    }
    if($_GET['a']=='inscription'){
    $client->inscription();
    }
    if($_GET['a']=='updateP'){
      $productAction->updateProduct();
    }
    if($_GET['a']=='t'){
      $testLogin->Admin();
    }
    if($_GET['a']=='Logout'){
      $testLogin->Logout();
    }
    if($_GET['a']=='Confirm'){
    $order->confirmOrder();
    }
    if($_GET['a']=='c'){
      $order->delete($_GET['id']);
      }
}
if(isset($_GET['id'])&&isset($_GET['status'])){
  $order->orderStatus();
}
$pages=['home','inscription','command','Login','ProductInfo','Products','AddProductForm','Carte','AddCategoryForm','updateProductForm','updateCategory','order'];
if(!isset($_GET['p'])){
    include 'view/home.php';
} else if (isset($_GET['p'])) {
  if ($_GET['p'] == 'Dashboard') {
    if (isset($_SESSION['user'])) {
      if ($_SESSION['user'] == 'admin') {
        include 'view/Dashboard.php';
      }else
      include 'view/home.php';
    } else
      include 'view/home.php';
  } else if (in_array($_GET['p'], $pages)) {
    include 'view/' . $_GET['p'] . '.php';
  } else {
    include 'view/404.html';
  }
}


